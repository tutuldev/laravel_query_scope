<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::with('posts')->where('status',1)
        // ->get();
        // return $users;

        // $users = User::with('posts')
        // ->whereCity('Delhi')
        // ->where('status',1)
        // ->get();
        // return $users;

        // after using scope
        //    $users = User::with('posts')
        //    ->active()
        //    ->get();
        // return $users;

        // // after using scope 2
        // $users = User::with('posts')
        // ->city('Delhi') //city scope
        // ->active() // active scope
        // ->get();
        // return $users;

           // after using scope 2
        //    $users = User::with('posts')
        //    ->city(['Delhi','Goa']) //city scope
        //    ->active() // active scope
        //    ->get();
        //    return $users;

        // $users = User::with('posts')
        // ->city(['Delhi','Goa']) //city scope
        // ->active() // active scope
        // ->sort()
        // ->get();
        // return $users;

        // $users = User::with('posts')
        // ->active() // active scope
        // ->sort()
        // ->get();
        // return $users;

        // for global scope no need to active function
        // $users = User::with('posts')
        // ->sort()
        // ->get();
        // return $users;

        // $users = User::with('posts')
        // ->city(['Delhi'])
        // ->sort()
        // ->get();
        // return $users;

        // get only two column
        // $users = User::with('posts:title,description,user_id')
        // ->city(['Delhi'])
        // ->sort()
        // ->get();
        // return $users;

        // scope method i
        // $users = User::select("id","name","email")
        // ->with('posts:title,description,user_id')
        // ->city(['Delhi'])
        // ->sort()
        // ->get();
        // return $users;

        // scope method ii
        // $users = User::city(['Delhi'])
        // ->sort()
        // ->get();
        // return $users;
        $users = User::get();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
