<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class MovieController extends Controller
{
    public function list()
    {
      $movies_array = [
        'one',
        'two',
        'three',
        'four'
      ];
      return view('internals.movies', [
        'movies' => $movies_array
      ]);
    }

    public function cart(){
      return Cart::getContent();
    }
    public function add(Request $res){
      $add = Cart::add([
        'name' => $res->name,
        'summary' => $res->summary,
        'Director' => $res->Director,
      ]);

      if($add){
        echo "done";
      }
    }
}
