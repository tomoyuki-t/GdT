<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Applicant;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //$appliedUsers = [];
        //if($user->id == Auth::id()){
        //    $myPosts = Post::where('user_id', $user->id)->get();
        //    foreach($myPosts as $myPost){
        //        $myAppliedPost = 
        //    }
        //    $appliedUsers = Applicant::where('post_id', $user->post->id)->get();
        //}
        $myPosts = Post::where('user_id', Auth::id())->get(['id']);
        $myAppliedPosts = Applicant::whereIn('post_id', $myPosts)->get(['user_id']);
        $appliedUsers = User::whereIn('id', $myAppliedPosts)->get();
        $userPosts = Post::where('user_id',$user->id)->latest('created_at')->get();
        return view('users.show', compact('user', 'userPosts', 'appliedUsers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
