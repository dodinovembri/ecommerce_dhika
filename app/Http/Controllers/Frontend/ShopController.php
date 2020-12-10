<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LanguangeModel;
use App\Models\CurrencyModel;
use App\Models\SocialMediaModel;
use App\Models\ProductCategoryModel;
use App\Models\ProductHomeModel;
use App\Models\AdvantageModel;
use App\Models\ProductTrendModel;
use App\Models\ProductBannerModel;
use App\Models\ProductDealModel;
use App\Models\ProductBestModel;
use App\Models\BlogModel;
use App\Models\ProductModel;
use App\Models\PartnerModel;
use App\Models\ShopInformationModel;
use App\Models\WishlistModel;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        $product_category_id = $request->product_category_id;
        $search_params = $request->search;        

        $data['languange'] = LanguangeModel::where('status', 1)->get();
        $data['currency'] = CurrencyModel::where('status', 1)->get();
        $data['social_media'] = SocialMediaModel::where('status', 1)->get();
        $data['product_category'] = ProductCategoryModel::where('status', 1)->get();
        $data['shop_information'] = ShopInformationModel::where('status', 1)->first();

        $data['search_result'] = DB::select("
            SELECT product.*, product_category_name AS product_category_name  FROM product JOIN product_category
            ON product.product_category_id = product_category.id WHERE 
            `product_category_id` = $product_category_id AND
            `product_name` LIKE '%$search_params%'
        ");        

        return view('frontend.shop.search', $data);
    }

    public function index()
    {
        $user_id = isset(auth()->user()->id) ? auth()->user()->id : '';

        $data['languange'] = LanguangeModel::where('status', 1)->get();
        $data['currency'] = CurrencyModel::where('status', 1)->get();
        $data['social_media'] = SocialMediaModel::where('status', 1)->get();
        $data['product_category'] = ProductCategoryModel::where('status', 1)->get();
        $data['product_home'] = ProductHomeModel::where('status', 1)->get();
        $data['advantage'] = AdvantageModel::where('status', 1)->get();
        $data['product_trend'] = ProductTrendModel::with('product')->with('product_category')->where('status', 1)->get();
        $data['product_banner'] = ProductBannerModel::where('status', 1)->get();
        $data['product_deal'] = ProductDealModel::with('product')->with('product_category')->where('status', 1)->get();
        $data['product_best'] = ProductBestModel::with('product')->with('product_category')->where('status', 1)->get();
        $data['blog'] = BlogModel::where('status', 1)->get();
        $data['product_featured'] = ProductModel::with('product_category')->where('status', 1)->get();
        $data['partner'] = PartnerModel::where('status', 1)->get();
        $data['shop_information'] = ShopInformationModel::where('status', 1)->first();

        return view('frontend.home', $data);
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
