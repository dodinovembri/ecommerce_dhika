<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VoucherModel;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');        
    }

    public function apply(Request $request)
    {
        $user_id = auth()->user()->id;
        $voucher_code = $request->voucher_code;
        $user_voucher = VoucherModel::where('user_id', $user_id)->where('voucher_code', $voucher_code)->where('status', 1)->first();
        if (!empty($user_voucher)) {
            $data['user_voucher'] = $user_voucher;
            session([
                'user_voucher_id' => $user_voucher->id,
                'user_voucher_code' => $user_voucher->voucher_code,
                'user_voucher_percentage' => $user_voucher->voucher_percentage
            ]);
        }

        return redirect(url('frontend/cart/index'));
    }

    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
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
