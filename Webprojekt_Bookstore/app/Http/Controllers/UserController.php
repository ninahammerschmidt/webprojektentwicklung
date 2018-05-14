<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Image;
use App\Author;

class UserController extends Controller
{
    public function index() {

        $users = User::all();
        return $users;
    }
    /**
     * find user by his/her name
     */
    public function findByName(string $name) : User {
        $user = User::where('name', $name)
            ->first();
        return $user;
    }

    /**
     * create new User
     */
    public function save(Request $request) : JsonResponse  {

        /**
         *  use a transaction for saving model including relations
         * if one query fails, complete SQL statements will be rolled back
         */
        DB::beginTransaction();
        try {
            $user = User::create($request->all());

            DB::commit();
            // return a vaild http response
            return response()->json($user, 201);
        }
        catch (\Exception $e) {
            // rollback all queries
            DB::rollBack();
            return response()->json("saving user failed: " . $e->getMessage(), 420);
        }
    }

    public function update(Request $request, string $name) : JsonResponse
    {

        DB::beginTransaction();
        try {
            $user = User::where('name', $name)->first();
            if ($user != null) {
                $user->update();
                }
            DB::commit();
            // return a vaild http response
            return response()->json($user, 201);
        }
        catch (\Exception $e) {
            // rollback all queries
            DB::rollBack();
            return response()->json("updating user failed: " . $e->getMessage(), 420);
        }
    }

    public function delete(string $name) : JsonResponse
    {
        $user = User::where('name', $name)->first();
        if ($user != null) {
            $user->delete();
        }
        else
            throw new \Exception("user couldn't be deleted - it does not exist");
        return response()->json('user (' . $name . ') successfully deleted', 200);

    }
}