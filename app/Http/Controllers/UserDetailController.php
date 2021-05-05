<?php

namespace App\Http\Controllers;

use App\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = auth()->user()->details;
        return view('user_detail.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_detail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'firstname' => 'required',
                'lastname' => 'required',
                'email'=> 'required',
                'phone' => 'required',
                'address' => 'required',
                'summary'=>'required'
            ]
        );

        $detail = new UserDetail();
        $detail->firstname = $request->input('firstname');
        $detail->lastname = $request->input('lastname');
        $detail->email = $request->input('email');
        $detail->phone = $request->input('phone');
        $detail->address = $request->input('address');
        $detail->summary = $request->input('summary');
        $detail->user_id = auth()->id();
        $detail->save();
        return redirect()->route('education.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDetail $userDetail)
    {
        return view('user_detail.edit', compact('userDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDetail $userDetail)
    {
        $request->validate(
            [
                'firstname' => 'required',
                'lastname' => 'required',
                'email'=> 'required',
                'phone' => 'required',
                'address' => 'required',
                'summary'=>'required'

            ]
        );

        $userDetail->update($request->except('_token'));
        return redirect()->route('user-detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDetail $userDetail)
    {
        $userDetail->delete();
        return back();
    }
}
