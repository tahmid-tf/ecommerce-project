<?php

namespace App\Http\Controllers;

use App\Models\Approval;
use App\Models\Cart;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $approvals = Approval::all();
        return view('pages.approval.approval-index',compact('approvals'));
    }

    public function add(){
        $inputs = [];

        $user = auth()->user();
        $carts = Cart::where('user_id',$user->id)->get();

        $inputs['name'] = auth()->user()->name;
        $inputs['email'] = auth()->user()->email;
        $inputs['phone'] = auth()->user()->phone;
        $inputs['address'] = auth()->user()->address;
        $inputs['admin'] = auth()->user()->admin;

        foreach ($carts as $cart){
            $inputs['product_name'] = $cart->product_name;
            $inputs['product_price'] = $cart->product_price;
            $inputs['product_count'] = $cart->product_count;
            $inputs['product_image'] = $cart->product_image;
            Approval::create($inputs);
        }

        foreach ($carts as $cart){
            $cart->where('user_id',$user->id)->delete();
        }
        return back();

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
     * @param  \App\Models\Approval  $approval
     * @return \Illuminate\Http\Response
     */
    public function show(Approval $approval)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Approval  $approval
     * @return \Illuminate\Http\Response
     */
    public function edit(Approval $approval)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Approval  $approval
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Approval $approval)
    {
        $approval->update(['status'=>'approved']);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Approval  $approval
     * @return \Illuminate\Http\Response
     */
    public function destroy(Approval $approval)
    {
        $approval->delete();
        return back();
    }
}
