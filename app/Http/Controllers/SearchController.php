<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SearchController extends Controller
{
    public function search(){
        $search = $_GET['search'];

        $profile = User::where('username','LIKE','%'.$search.'%')->first();

        
        if($profile !== null){
             return view('profile',compact(['profile']));

        }else{
            return view('error/404');
        }
    }
}
