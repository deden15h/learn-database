<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//use\Carbon\Carbon; untuk waktu sekarang

class BookController extends Controller
{
    public function index()
    {
        //$books = DB::select("SELECT * FROM books");
        // return view('booklist',compact('books'));

        // $result = DB::table('books')->get();
        // return view('booklist', ['books' => $result]);

        $result = DB::table('books')->where('harga', '>', 200000)->orderBy('harga', 'desc')->get();
        return view('booklist', ['books' => $result]);

        //dump($books);
    }

    // public function insert()
    // {
    //     $books = DB::insert(
    //         "INSERT INTO books(judul, halaman, isbn, kategori, penerbit, harga, created_at, updated_at) Values (?, ?, ?, ?, ?, ?, NOW(), NOW())",
    //         [
    //             "Buku Nikah",
    //             10,
    //             "123456789123",
    //             "Rumah Tangga",
    //             "KUA",
    //             0.05
    //         ]
    //     );

    //     dump($books);
    // }

    public function insert()
    {
        $result = DB::table('books')->insert(
            [
                [
                    'judul' => 'The Bench',
                    'ISBN' => '9780593434512',
                    'kategori' => 'Growing Up & Facts of Life',
                    'harga' => 181500,
                    'halaman' => 40,
                    'penerbit' => 'Random House Books for Young Readers'
                ],

                [
                    'judul' => 'Economic Dignity',
                    'ISBN' => '9781984879875',
                    'kategori' => 'Business & Leadership',
                    'harga' => 222900,
                    'halaman' => 384,
                    'penerbit' => 'Penguin Press'
                ],
                [
                    'judul' => 'Food by Fire: Grilling and BBQ with Derek Wolf of Over the Fire Cooking',
                    'ISBN' => '9781592339754',
                    'kategori' => 'Meat Cooking',
                    'harga' => 310750,
                    'halaman' => 208,
                    'penerbit' => 'Harvard Common Press'
                ],
                [
                    'judul' => 'The 4-Hour Workweek: Escape 9-5, Live Anywhere, and Join the New Rich',
                    'ISBN' => '9780307465351',
                    'kategori' => 'Self-Improvement',
                    'harga' => 253500,
                    'halaman' => 448,
                    'penerbit' => 'Harmony'
                ]
            ]
        );

        dump($result);
    }

    public function update()
    {
        $result = DB::table('books')->where('ISBN', '9781592339754')->update(['kategori' => 'Cooking', 'harga' => 210000, 'updated_at' => now(),]);
        dump($result);
    }
}
