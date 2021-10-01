<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){

    }

    public function create(){
      return view('register.create');
    }

    public function store(){
      $attributes = request()->validate([
        'name' => 'required|max:255',
        'username' => 'required|max:255|unique:users,username',
        'email' => 'required|email|max:255|unique:users,email',
        'password' =>'required|min:7|max:255'
      ]);
      $attributes['password'] = bcrypt($attributes['password']);
      session()->flash('success','You account has been created');
      $user = user::create($attributes);
      auth()->login($user);
      return redirect('/');
    }

    public function destroy(){
      auth()->logout();
      return redirect('/');
    }

    public function login(){
      return view('register.login');
    }

    public function loginUser(){
      $attributes = request()->validate([
        'email'=>'required|email',
        'password' => 'required'
      ]);
      if(auth()->attempt($attributes)){
        return redirect('/');
      }
    }
}
