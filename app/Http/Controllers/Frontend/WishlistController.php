<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WishlistModel;
use App\Models\LanguangeModel;
use App\Models\CurrencyModel;
use App\Models\SocialMediaModel;
use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use App\Models\PartnerModel;
use App\Models\ShopInformationModel;


class WishlistController extends Controller
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
        $data['languange'] = LanguangeModel::where('status', 1)->get();
        $data['currency'] = CurrencyModel::where('status', 1)->get();
        $data['social_media'] = SocialMediaModel::where('status', 1)->get();
        $data['product_category'] = ProductCategoryModel::where('status', 1)->get();
        $data['partner'] = PartnerModel::where('status', 1)->get();
        $data['shop_information'] = ShopInformationModel::where('status', 1)->first();
        $data['product_wishlist'] = WishlistModel::with('product')->with('product_stock')->where('status', 1)->get();
                    
        return view('frontend.wishlist.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $search = session()->get('search');
        if (empty( auth()->user()->id)) {
            return redirect(url('login'));
        }else{
            $cek = WishlistModel::where('user_id', auth()->user()->id )->where('product_id', $id)->first();
            if (empty($cek)) {
                $insert = new WishlistModel();    
                $insert->user_id = auth()->user()->id;
                $insert->product_id = $id;
                $insert->created_by =  auth()->user()->id;
                $insert->created_at =  date("Y-m-d H:i:s");
                $insert->save();

                if ($search == 1) {
                    return redirect('frontend/shop/searchdirect');
                }else{
                    return redirect(url('/'));
                }
            }else{
                $update = $cek;
                $update->product_id = $id;
                $update->updated_by =  auth()->user()->id;
                $update->updated_at =  date("Y-m-d H:i:s");
                $update->update();

                if ($search == 1) {
                    return redirect('frontend/shop/searchdirect');
                }else{
                    return redirect(url('/'));
                }
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
        $delete = WishlistModel::find($id);
        $delete->delete();

        return redirect('frontend/wishlist/index');
    }
}
