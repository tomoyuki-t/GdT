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
        //自分のユーザー詳細画面で、誰に応募されたかを最新順で表示

        /*
        //自分がした投稿のidを取得
        $myPosts = Post::where('user_id', Auth::id())->get(['id']);
        //応募情報テーブルからその投稿に応募した人のuser_idを取得
        $myAppliedPosts = Applicant::whereIn('post_id', $myPosts)->get(['user_id']);
        //ユーザーテーブルからuser_idが一致する人を取得
        $appliedUsers = User::whereIn('id', $myAppliedPosts)->get();
        */

        //自分がした投稿のidを取得
        $myPosts = Post::where('user_id', Auth::id())->get(['id']);
        //応募情報テーブルから、自分がした投稿のidが含まれている情報を全て取得
        $myAppliedPosts = Applicant::whereIn('post_id', $myPosts)->latest('created_at')->get();


        $userPosts = Post::where('user_id',$user->id)->latest('created_at')->get();
        return view('users.show', compact('user', 'userPosts', 'myAppliedPosts'));
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
