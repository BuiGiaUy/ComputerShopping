<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function index () {
        $book = [
            ["id" => 1, "name" => "quan ao"],
            ["id" => 2, "name" => "sach vo"],
            ["id" => 3, "name" => "xe co"],
        ];
        return view("admin.content.book.index", ["books" => $book]);
    }
    function add( ) {
        return view("admin.content.book.addForm");
    }
    function edit($id) {
        return "edit:". $id;
    }
}
