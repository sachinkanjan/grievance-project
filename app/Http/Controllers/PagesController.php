<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

   public function new(){
       $data = array(
       'title' => 'categories',
       'categories' => ['caegory','subject','desccription','file'] );
    return view('pages.new')->with($data);
   }

   public function history(){
    return view('pages.history');
   }
   public function profile(){
    return view('pages.profile');
   }
   public function new_grievance(){
       return view ('pages.new_grievance');
   }
}
