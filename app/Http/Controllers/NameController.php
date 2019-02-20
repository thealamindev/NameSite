<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Carbon\Carbon;
use App\Name;

class NameController extends Controller
{
    public function index () {

        return view('name.home.home');
    }

    public function boys () {
        $boys = Name::where('gender', 1)->orderBy('name', 'asc')->get();
        return view('name.boys.boys', compact('boys'));
    }
    public function boysalphabate ($alphabate) {
        $boys = Name::where('gender', 1)->where('name', 'like' , $alphabate."%")->get();
        return view('name.boys.boys', compact('boys'));
    }
    public function girlsalphabate ($alphabate) {
        $girls = Name::where('gender', 2)->where('name', 'like' , $alphabate."%")->get();
        return view('name.girls.girls', compact('girls'));
    }
    public function girls () {
        $girls = Name::where('gender', 2)->orderBy('name', 'asc')->get();
        return view('name.girls.girls', compact('girls'));
    }

    public function login () {
        return view('name.login.login');
    }

    public function namedetails ($name_id) {
        $name = Name::find($name_id);
        return view('name.namedetails.namedetails', compact('name'));
    }

    public function nameview(){
        return view('name.backend.nameinsertview');
    }
    public function nameinsert(Request $request){
      $request->validate([
        'name' => 'unique:names,name'
      ]);
        Name::insert([
          "name" => $request->name,
          "gender" => $request->gender,
          "origin" => $request->origin,
          "english_meaning" => $request->english_meaning,
          "bangla_meaning" => $request->bangla_meaning,
          "created_at" => Carbon::now()
        ]);
        return back()->with('status', 'Name Added Successfully!');
    }
    function search()
    {
      $search_string = $_GET['search_string'];
      $searched_names = Name::where('name', 'like' , "%".$search_string."%")->get();
      return view('name.search', compact('searched_names'));
    }
}
