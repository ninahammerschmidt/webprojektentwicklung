<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::all()->first();
        DB::table('books')->insert([
            'title' => 'Tipps vom Hundeflüsterer',
            'isbn' => '0123456789',
            'subtitle' => 'Einfache Maßnahmen für die gelungene Beziehung zwischen Mensch und Hund',
            'description' => 'Vom Experten für Hundeerziehung und Hunderehabilitation aus den Vereinigten Staaten Cesar Millans unkonventionelle Methode geht von einem tiefen Verständnis für das Wesen des Hundes aus. Statt mit Kommandos arbeitet er mit Energie und Berührung. Der Schlüssel zu seinem Erfolg ist die Macht des Rudels. „Ich resozialisiere Hunde und trainiere Menschen“, bringt er seine Arbeit auf den Punkt. Denn wenn ein Hund verhaltensauffällig wird, hat das fast immer einen Grund: Er wird nicht als Hund behandelt, sondern als Mensch mit Fell. Dieses Buch ist ideal für alle, die sich einen Hund anschaffen wollen, aber auch für die jenigen, die ihren Hund über die Maßen lieben, ihm jedoch gewisse Unarten nicht abgewöhnen können.
                Gut zu wissen: In Deutschland gibt es rund 8 Millionen Hunde!',
            'published' => new DateTime(),
            'price_netto' => 10,
            'price_brutto' => 11,
            'user_id' => $user->id,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //test authors - load them and write them to the db using eloquent ORM
        $book = App\Book::all()->first();
        $authors = App\Book::all();

        foreach($authors as $author){
            $book->authors()->save($author);
        }
        $book->save();

        //add images
        DB::table('images')->insert([
            'title' => 'Titelseite',
            'url' => 'https://images-na.ssl-images-amazon.com/images/I/51uNq%2B0Ov0L.jpg',
            'book_id' => $book->id,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);


        $user = App\User::all()->first();
        DB::table('books')->insert([
            'title' => 'Hund hört nicht',
            'isbn' => '9000000001',
            'subtitle' => 'Hundeerziehung einfach und Schritt für Schritt, damit der Hund hört ',
            'description' => str_random(100),
            'published' => new DateTime(),
            'price_netto' => 6.99,
            'price_brutto' => 8.99,
            'user_id' => $user->id,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        $book = App\Book::where('isbn', '=', '9000000001')->first();
        $authors = App\Book::all();

        foreach($authors as $author){
            $book->authors()->save($author);
        }
        $book->save();

        //add images
        DB::table('images')->insert([
            'title' => 'Hund hört nicht',
            'url' => 'https://images-na.ssl-images-amazon.com/images/I/512ZCO9tQ3L.jpg',
            'book_id' => $book->id,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        $user = App\User::all()->first();
        DB::table('books')->insert([
            'title' => 'Das BARF Buch',
            'isbn' => '9239123456',
            'subtitle' => 'Inklusive 14 Rezepten',
            'description' => str_random(100),
            'published' => new DateTime(),
            'price_netto' => 16.99,
            'price_brutto' => 19.95,
            'user_id' => $user->id,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        $book = App\Book::where('isbn', '=', '9239123456')->first();
        $authors = App\Book::all();

        foreach($authors as $author){
            $book->authors()->save($author);
        }
        $book->save();

        //add images
        DB::table('images')->insert([
            'title' => 'Das BARF Buch',
            'url' => 'https://images-na.ssl-images-amazon.com/images/I/41zdzj-zMjL.jpg',
            'book_id' => $book->id,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        $user = App\User::all()->first();
        DB::table('books')->insert([
            'title' => 'Hunde unter Wasser',
            'isbn' => '9221234444',
            'subtitle' => 'Gebundene Ausgabe',
            'description' => str_random(100),
            'published' => new DateTime(),
            'price_netto' => 20.99,
            'price_brutto' => 25.57,
            'user_id' => $user->id,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        $book = App\Book::where('isbn', '=', '9221234444')->first();
        $authors = App\Book::all();

        foreach($authors as $author){
            $book->authors()->save($author);
        }
        $book->save();

        //add images
        DB::table('images')->insert([
            'title' => 'Hunde unter Wasser',
            'url' => 'https://images-na.ssl-images-amazon.com/images/I/51LWe5S1lhL.jpg',
            'book_id' => $book->id,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

    }
}
