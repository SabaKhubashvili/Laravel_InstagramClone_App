<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){
        $search = $_GET['search'];

        $profile = User::where('username','LIKE','%'.$search.'%')->first();

        

        if($profile !== null){

        return Redirect('/profile',$profile->id);

        }else{
            abort(404);
        }
    }
}
