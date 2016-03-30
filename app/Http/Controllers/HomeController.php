<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Post;
use DB;
use Paginator;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function welcomePage(Post $postModel)
    {
        $data = DB::table('posts')->orderBy('created_at', 'DESC')->paginate(1);
        return view('welcome', compact('data'));
    }

    public function homePage()
    {
        $user = \Auth::user();
//         dd($user->hasRole('owner'));
        if($user->hasRole('admin')){
//             echo "you are admin ";
        }
        if($user->can('update-data')){
//             echo "you can update file";
        }
        return view('home');
    }


}

