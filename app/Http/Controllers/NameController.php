<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    public function index () {

        return view('name.home.home');
    }

    public function boys () {

        return view('name.boys.boys');
    }

    public function girls () {
        return view('name.girls.girls');
    }

    public function login () {
        return view('name.login.login');
    }

    public function namedetails () {
        return view('name.namedetails.namedetails');
    }

    public function nameview(){

        return view('name.backend.nameinsertview');
    }

}
