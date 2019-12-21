<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $dataUsers=User::all();
        return view('admin.user.index',['dataUsers'=>$dataUsers]);
    }

    public function create(){
        return view('admin.user.create');
    }
}
