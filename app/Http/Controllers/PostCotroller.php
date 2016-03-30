<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Post;
use Illuminate\Support\Facades\Validator;
class PostController extends Controller
{
    public function index()
    {
        return view('admins.posts.home');
    }


    public function addNews(Request $request, Post $postModel)
    {
        $validator = Validator::make($request->all(), $postModel->rules());
        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator) // send back all errors to the login form
                ->withInput();
        } else {

        $imageName = time() . "." .  $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(
            base_path() . '/public/images/', $imageName
        );
        $postModel->title = $request->title;
        $postModel->text = $request->text;
        $postModel->image = $imageName;
        $postModel->save();
            die("success");
//        Redirect::back()->withInput()->with('success', 'Company added.');
//        return \Redirect::to('home',
//            array($request->id))->with('message', 'Product added!');

        }
    }
}