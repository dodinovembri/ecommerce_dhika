<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartModel;
use App\Models\CartDetailModel;
use App\Models\UserModel;
use App\Models\OrderModel;
use App\Models\OrderDetailModel;
use App\Models\VoucherModel;

use App\Models\LanguangeModel;
use App\Models\CurrencyModel;
use App\Models\SocialMediaModel;
use App\Models\ProductCategoryModel;
use App\Models\PartnerModel;
use App\Models\ShopInformationModel;
use App\Models\PaymentMethodModel;

class CheckoutController extends Controller
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

    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user_id = auth()->user()->id;
        $total_voucher = $request->total_voucher;
        $total_price = $request->total_price;
        $grand_total = $request->grand_total;

        $data['total_voucher'] = $total_voucher;
        $data['total_price'] = $total_price;
        $data['grand_total'] = $grand_total;

        $data['languange'] = LanguangeModel::where('status', 1)->get();
        $data['currency'] = CurrencyModel::where('status', 1)->get();
        $data['social_media'] = SocialMediaModel::where('status', 1)->get();
        $data['product_category'] = ProductCategoryModel::where('status', 1)->get();
        $data['partner'] = PartnerModel::where('status', 1)->get();
        $data['shop_information'] = ShopInformationModel::where('status', 1)->first();
        $data['payment_method'] = PaymentMethodModel::where('status', 1)->get();

        $user_voucher = VoucherModel::where('user_id', $user_id)->where('status', 1)->first();
        if (!empty($user_id)) {
            $data['user_voucher'] = $user_voucher;
        }else{
            $data['user_voucher'] = "";
        }

        $data['user'] = UserModel::find($user_id);
        $data['checkout_detail'] = CartDetailModel::with('product')->with('product_stock')->where('status', 1)->where('user_id', $user_id)->get();
        return view('frontend.checkout.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $total_price = $request->total_price;
        $payment_method = $request->payment_method;
        $total_voucher = $request->total_voucher;

        $order_detail = CartDetailModel::with('product')->with('product_stock')->where('status', 1)->where('user_id', $user_id)->get();

        $insert_order = new OrderModel();
        $insert_order->user_id = $user_id;
        $insert_order->total_price = $total_price;
        $insert_order->payment_method_id = $payment_method;
        $insert_order->total_voucher = $total_voucher;
        $insert_order->status = 2;
        $insert_order->created_by =  auth()->user()->id;
        $insert_order->created_at =  date("Y-m-d H:i:s");           
        $insert_order->save();
        $order_id = $insert_order->id;

        foreach ($order_detail as $key => $value) {
            $insert_order_detail = new OrderDetailModel();
            $insert_order_detail->user_id = $user_id;
            $insert_order_detail->order_id = $order_id;
            $insert_order_detail->product_id = $value->product->id;
            $insert_order_detail->qty = $value->qty;
            $insert_order_detail->price = $value->price;
            $insert_order_detail->subtotal = $value->subtotal;
            $insert_order_detail->created_by =  auth()->user()->id;
            $insert_order_detail->created_at =  date("Y-m-d H:i:s");           
            $insert_order_detail->save();
        }

        if (!empty(session()->get('user_voucher_id'))) {
            $voucher_id = session()->get('user_voucher_id');
            $update = VoucherModel::find($voucher_id);
            $update->status = 0;
            $update->updated_by =  auth()->user()->id;
            $update->updated_at =  date("Y-m-d H:i:s");     
            $update->update();

            session()->forget('user_voucher_id');
            session()->forget('user_voucher_code');
            session()->forget('user_voucher_percentage');
        }

        $delete_detail = CartDetailModel::where('user_id', $user_id)->delete();
        $delete_cart = CartModel::where('user_id', $user_id)->delete();

        session([
            'last_order_id' => $order_id
        ]);

        return redirect(url('frontend/checkout/confirmation'));
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

    public function confirmation()
    {
        $order_id = session()->get('last_order_id');
        $data['order'] = OrderModel::with('payment_method')->find($order_id);
        $data['order_detail'] = OrderDetailModel::with('product')->where('order_id', $order_id)->get();

        $data['languange'] = LanguangeModel::where('status', 1)->get();
        $data['currency'] = CurrencyModel::where('status', 1)->get();
        $data['social_media'] = SocialMediaModel::where('status', 1)->get();
        $data['product_category'] = ProductCategoryModel::where('status', 1)->get();
        $data['partner'] = PartnerModel::where('status', 1)->get();
        $data['shop_information'] = ShopInformationModel::where('status', 1)->first();
        $data['payment_method'] = PaymentMethodModel::where('status', 1)->get();

        return view('frontend.checkout.confirmation', $data);
    }
}
