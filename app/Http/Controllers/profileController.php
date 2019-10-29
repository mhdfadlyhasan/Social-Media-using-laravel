<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class profileController extends Controller
{
    //
    public function index(\App\User $user)
    {
        return view('profiles/index',compact('user'));
    }
    public function edit( $user)
    {
        $this->authorize('update',$user->profile);
        return view('profiles/edit',compact('user'));
    }
    public function update(\App\User $user)
    {
        
        $this->authorize('update',$user->profile);
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => 'image',
        ]);
        auth()->user()->profile()->update($data);
        return redirect("/profile/{$user->id}");
    }
}