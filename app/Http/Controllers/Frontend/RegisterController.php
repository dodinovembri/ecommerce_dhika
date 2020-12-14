<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use App\Models\LanguangeModel;
use App\Models\CurrencyModel;
use App\Models\SocialMediaModel;
use App\Models\ProductCategoryModel;
use App\Models\ShopInformationModel;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $table           = "users";
    public $index   = "/";

    public function index()
    {
        $data['languange'] = LanguangeModel::where('status', 1)->get();
        $data['currency'] = CurrencyModel::where('status', 1)->get();
        $data['social_media'] = SocialMediaModel::where('status', 1)->get();
        $data['product_category'] = ProductCategoryModel::where('status', 1)->get();
        $data['shop_information'] = ShopInformationModel::where('status', 1)->first();

        return view('frontend.register.index', $data);
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
        $table = $this->table;
        $index = $this->index;
        $result = preg_replace("/[^a-zA-Z]/", " ", $table); 

        if ($request->input('password') != $request->input('password_confirm')) {
            return redirect('frontend/register/index')->with("error", "Your password doesnt match !");
        }else{
            $check = UserModel::where('email', $request->input('email'))->first();
            if (empty($check)) {
                $insert = new UserModel();
                $insert->name = $request->name;        
                $insert->email = $request->email;
                $insert->role = 2;                
                $insert->password = Hash::make($request->password);                       
                $insert->created_at = date("Y-m-d H:i:s");
                $insert->save();

                return redirect(route('login'));                    
            }else{
                return redirect(url($index))->with("error", "$result already exist !");            
            }    
        }

        $result = preg_replace("/[^a-zA-Z]/", " ", $table); 
        return redirect(url($index))->with("message", "Success created $result !");
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
        $table = $this->table;
        $data['column_hidden'] = $this->column_hidden;
        $data['breadcrumb'] = array(
            "home" => array(
                "text" => "Dashboard", 
                "link" => $this->base,
                "is_active" => "inactive"
            ),
            "user" => array(
                "text" => "User", 
                "link" => $this->index, 
                "is_active" => "inactive"
            ),
            "edit_user" => array(
                "text" => "Edit User", 
                "link" => "", 
                "is_active" => "active"
            )            
        );
        $data['title'] = "Edit User";
        $data['update'] = $this->update;
        $data['index'] = $this->index;
        $data['id'] = $id;
        $data['user'] = UserModel::find($id);

        return view('backend.user.edit', $data);
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
        $table = $this->table;
        $index = $this->index;
        $result = preg_replace("/[^a-zA-Z]/", " ", $table); 

        $column_hidden = [];
        $table_field = DB::select("DESCRIBE $table");
        $field_break = $this->field_break;
        $field_first = $this->field_first;
        $storage = $this->file_storage;

        if ($request->input('password') != $request->input('password_confirm')) {
            return redirect(url($index))->with("error", "Your password doesnt match !");
        }else{
            $check = UserModel::where('email', $request->input('email'))->first();
            if (empty($check)) {
                $update = UserModel::find($id);
                $update->name = $request->name;  
                $update->password = Hash::make($request->password);                       
                $update->updated_at = date("Y-m-d H:i:s");
                $update->update();

                return redirect(url($index))->with("message", "Success updating $result !");
            }else{
                return redirect(url($index))->with("error", "$result already exist !");            
            }    
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = $this->table;
        $index = $this->index;

        $findtodelete = UserModel::find($id);
        $findtodelete->delete();

        $result = preg_replace("/[^a-zA-Z]/", " ", $table); 
        return redirect(url($this->index))->with("info", "Success deleted $result !");        
    }
}