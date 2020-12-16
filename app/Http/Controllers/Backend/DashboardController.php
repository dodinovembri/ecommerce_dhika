<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\OrderModel;
use App\Models\VoucherModel;
use App\Models\UserModel;
use App\Models\ProductModel;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $file_storage = "public/img/product";

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['total_order_created'] = OrderModel::where('status', 2)->count();
        $data['total_order'] = OrderModel::count();

        $data['total_voucher_active'] = VoucherModel::where('status', 1)->count();
        $data['total_voucher'] = VoucherModel::count();

        $data['total_customer_active'] = UserModel::where('role', 2)->where('status', 1)->count();
        $data['total_customer'] = UserModel::where('role', 2)->count();

        $data['total_product_active'] = ProductModel::where('status', 1)->count();
        $data['total_product'] = ProductModel::count();

        return view('backend.dashboard.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $form = Schema::getColumnListing("frontend_general_info");
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
