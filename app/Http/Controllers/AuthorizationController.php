<?php

namespace App\Http\Controllers;

use App\Models\Authorization;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authorizations = User::all()->where('admin','=','admin');
        return view('pages.authorization.authorization-index',compact('authorizations'));
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
     * @param  \App\Models\Authorization  $authorization
     * @return \Illuminate\Http\Response
     */
    public function show(Authorization $authorization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Authorization  $authorization
     * @return \Illuminate\Http\Response
     */
    public function edit(Authorization $authorization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Authorization  $authorization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $authorization = User::find($id);
        // $authorization->update(["admin"=>"subscriber"]);

        User::whereId($id)->update(["admin"=>"subscriber"]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Authorization  $authorization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Authorization $authorization)
    {
        //
    }
}
