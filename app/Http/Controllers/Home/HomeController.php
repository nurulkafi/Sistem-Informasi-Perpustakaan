<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;
use App\Book;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(){
    	$books = Book::paginate(4);
    	return view('home2',[
    		'books' => $books,
    		'author' => Author::get()
    	]);
    }
}
