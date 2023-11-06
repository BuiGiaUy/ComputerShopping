<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index () {
        $category = [
            ["id" => 1, "name" => "quan ao"],
            ["id" => 2, "name" => "sach vo"],
            ["id" => 3, "name" => "xe co"],
        ];
        return view("admin.content.category.index", ["categories" => $category]);
    }
    function add( ) {
        return view("admin.content.category.addForm");
    }
    function edit($id) {
        return "edit:". $id;
    }
}
