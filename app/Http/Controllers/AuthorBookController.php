<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Author, Book};

class AuthorBookController extends Controller
{
    public function getAuthorBook(Request $request)
    {
        $author = Author::with('books')->get();

        echo $author;
    }
}
