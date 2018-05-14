<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function getAllAuthors() {
        /* load all books and relations with eager loading,
           which means "load all related objects" */
        $authors = Author::all();
        return $authors;
    }
}
