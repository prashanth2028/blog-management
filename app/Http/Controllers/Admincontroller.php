<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usermodels = User::latest()->get();
        return view('admin.userindex',compact('usermodels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.usercreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $Request)
    {
        // dd($Request->all());
         User::create($Request->all());
         return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.useredit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $userRequest, User $user)
    {
        // User::updated($userRequest->all());
        $userdate = User::find($user->id);
        $userdate->name = $userRequest->name;
        $userdate->email = $userRequest->email;
        $userdate->password = bcrypt($userRequest->password);
        $userdate->save();
        return redirect()->route('user.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
