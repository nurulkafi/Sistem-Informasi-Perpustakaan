<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;
use App\Book;

class DataController extends Controller
{
    public function authors(){
        $author =Author::query();
        return datatables()->of($author)
        ->addColumn('action','admin.author.action')
        ->toJson();
    }
    public function books(){
        $book =Book::query();
        return datatables()->of($book)
        ->addColumn('action','admin.book.action')
        ->addColumn('author',function(Book $model){
            return $model->author->name;
        }) 
        ->editColumn('cover',function(Book $model){
            return '<img src="'.$model->getCover().'" height="150px">';
        })
        ->rawColumns(['cover','action'])
    
        ->toJson();
    }

}
