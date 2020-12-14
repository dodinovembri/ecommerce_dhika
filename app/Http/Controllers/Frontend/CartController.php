<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartModel;
use App\Models\ProductModel;
use App\Models\CartDetailModel;
use App\Models\WishlistModel;

use App\Models\LanguangeModel;
use App\Models\CurrencyModel;
use App\Models\SocialMediaModel;
use App\Models\ProductCategoryModel;
use App\Models\PartnerModel;
use App\Models\ShopInformationModel;
use App\Models\VoucherModel;

class CartController extends Controller
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
        $user_id = auth()->user()->id;
        $user_voucher = VoucherModel::where('user_id', $user_id)->where('status', 1)->first();
        if (!empty($user_id)) {
            $data['user_voucher'] = $user_voucher;
        }else{
            $data['user_voucher'] = "";
        }
        $data['languange'] = LanguangeModel::where('status', 1)->get();
        $data['currency'] = CurrencyModel::where('status', 1)->get();
        $data['social_media'] = SocialMediaModel::where('status', 1)->get();
        $data['product_category'] = ProductCategoryModel::where('status', 1)->get();
        $data['partner'] = PartnerModel::where('status', 1)->get();
        $data['shop_information'] = ShopInformationModel::where('status', 1)->first();
        $data['cart_detail'] = CartDetailModel::with('product')->with('product_stock')->where('status', 1)->where('user_id', $user_id)->get();
        $data['cart'] = CartModel::where('user_id', auth()->user()->id)->first();

        return view('frontend.cart.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user_id = auth()->user()->id;
        if (empty( auth()->user()->id)) {
            return redirect(url('login'));
        }
        $cek = CartModel::where('user_id', auth()->user()->id )->first();
        if (empty($cek)) {
            $cart = new CartModel();    
            $cart->user_id = auth()->user()->id;

            $get_price_db = ProductModel::find($id);
            $get_qty_form = 1;

            $total_price = $get_price_db->price * $get_qty_form;

            $cart->total_price = $total_price;
            $cart->created_by =  auth()->user()->id;
            $cart->created_at =  date("Y-m-d H:i:s");
            $cart->save();
            $cart->id;
            if ($cart->save()) {
                $success = 1;
            }            

            if ($success == 1) {                
                $cartdetail = new CartDetailModel();                    
                $cartdetail->user_id = $user_id;
                $cartdetail->cart_id = $cart->id;
                $cartdetail->product_id = $id;
                $cartdetail->qty = 1;  
                $cartdetail->price = $get_price_db->price;
                $cartdetail->subtotal = $total_price;
                $cartdetail->created_by =  auth()->user()->id;
                $cartdetail->created_at =  date("Y-m-d H:i:s");
                $cartdetail->save();

                $delete = WishlistModel::where('product_id', $id)->first();
                if ($delete) {
                    $delete->delete();   
                } 
            }
            return redirect(url('/'));
        }else{
            $get = CartModel::where('user_id', auth()->user()->id )->first();
            $cek_cart_detail = CartDetailModel::where('cart_id', $get->id)->where('product_id', $id)->first();                 
            if (empty($cek_cart_detail)) {
                $total_price = $get->total_price;
            }else{
                $get_price_detail_all = CartDetailModel::where('cart_id', $get->id)->whereNotIn('product_id', [$id])->get();
                if (count($get_price_detail_all) < 1) {
                    $total_already = 0;
                }else{
                    $get_price_db = ProductModel::find($id);
                    $total_already = $get->total_price - $get_price_db->price;
                }
                $total_price = 0 + $total_already;
            }

            $get_price_db = ProductModel::find($id);
            $get_qty_form = 1;

            $total_price_new = $get_price_db->price * $get_qty_form;
            $total_price = $total_price_new + $total_price;

            $get->total_price = $total_price;
            $get->updated_by =  auth()->user()->id;
            $get->updated_at =  date("Y-m-d H:i:s");
            $get->update();
            $get->id;    

            if ($get->update()) {
                $updated = 1;
            }            

            if ($updated == 1) {     
                $cek_cart_detail = CartDetailModel::where('cart_id', $get->id)->where('product_id', $id)->first();     
                if (empty($cek_cart_detail)) {
                    $cartdetail = new CartDetailModel();                    
                    $cartdetail->user_id = $user_id;
                    $cartdetail->cart_id = $get->id;
                    $cartdetail->product_id = $id;
                    $cartdetail->qty = 1;            
                    $cartdetail->price = $get_price_db->price;
                    $cartdetail->subtotal = $total_price_new;
                    $cartdetail->created_by =  auth()->user()->id;
                    $cartdetail->created_at =  date("Y-m-d H:i:s");
                    $cartdetail->save();
                }else{
                    $update = $cek_cart_detail;
                    $update->product_id = $id;
                    $update->qty = 1;
                    $update->price = $get_price_db->price;
                    $update->subtotal = $total_price_new;
                    $update->updated_by =  auth()->user()->id;
                    $update->updated_at =  date("Y-m-d H:i:s");
                    $update->update();
                }
                $delete = WishlistModel::where('product_id', $id)->first();
                if ($delete) {
                    $delete->delete();   
                }
            }         

            $search = session()->get('search');
            if ($search == 1) {
                return redirect('frontend/shop/searchdirect');
            }else{
                return redirect(url('/'));
            }
        }
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
    public function update(Request $request)
    {
        $cek = CartModel::where('user_id', auth()->user()->id )->first();        
        $count = count($request->input('product_id'));

        for ($i=0; $i < $count; $i++) { 
            $value = $request->input('product_id')[$i];        
            $get_data_cart = CartDetailModel::where('product_id', $value)->where('cart_id', $cek->id)->first();
            $get_price_db = ProductModel::where('id', $value)->first();       
            $get_data_cart->qty = $request->input('qty')[$i];
            $get_data_cart->price = $get_price_db->price;
            $get_data_cart->subtotal = $request->input('qty')[$i] * $get_price_db->price;
            $get_data_cart->updated_by = auth()->user()->id;
            $get_data_cart->updated_at = date("Y-m-d H:i:s");
            $get_data_cart->update();
        }
        
        $total_price_detail = CartDetailModel::where('cart_id', $cek->id)->sum('subtotal');
        $cek->total_price = $total_price_detail;
        $cek->updated_by = auth()->user()->id;
        $cek->updated_at = date("Y-m-d H:i:s");
        $cek->update();

        return redirect(url('frontend/cart/index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // define query
        $cart_detail = CartDetailModel::find($id);
        $cart = CartModel::where('id', $cart_detail->cart_id)->first();

        // define calculate
        $total_price = $cart->total_price - $cart_detail->subtotal;

        // update cart detail
        $update_cart = $cart;
        $update_cart->total_price = $total_price;
        $update_cart->updated_at = date("Y-m-d H:i:s");
        $update_cart->updated_at = date("Y-m-d H:i:s");
        $update_cart->update();

        // delete cart detail
        $delete_cart_detail = $cart_detail;
        $delete_cart_detail->delete();

        // check cart detail, if empty delete cart
        $cart_detail = CartDetailModel::where('cart_id', $cart->id)->get();
        if (count($cart_detail) < 1) {
            $delete_cart = $cart;
            $delete_cart->delete();
        }

        return redirect('/');
    }

    public function destroy_from_cart($id)
    {
        // define query
        $cart_detail = CartDetailModel::find($id);
        $cart = CartModel::where('id', $cart_detail->cart_id)->first();

        // define calculate
        $total_price = $cart->total_price - $cart_detail->subtotal;

        // update cart detail
        $update_cart = $cart;
        $update_cart->total_price = $total_price;
        $update_cart->updated_at = date("Y-m-d H:i:s");
        $update_cart->updated_at = date("Y-m-d H:i:s");
        $update_cart->update();

        // delete cart detail
        $delete_cart_detail = $cart_detail;
        $delete_cart_detail->delete();

        // check cart detail, if empty delete cart
        $cart_detail = CartDetailModel::where('cart_id', $cart->id)->get();
        if (count($cart_detail) < 1) {
            $delete_cart = $cart;
            $delete_cart->delete();
        }

        return redirect('frontend/cart/index');
    }    
}
