<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\ApplicantRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\Applicant;
use App\Models\User;

class ApplicantsController extends Controller
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
    public function store(ApplicantRequest $request)
    {
        $applicant = new Applicant();
        $applicant->post_id = $request->post_id;
        $applicant->user_id = $request->user_id;
        $applicant->save();
        $data = Post::where('id', $request->post_id)->first();
        $data_id = $data->user_id;
        return redirect()->route('messages.show', ['message' => $data_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
