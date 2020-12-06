<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductStockModel;
use App\Models\ProductModel;
use App\Models\ProductCategoryModel;
use Illuminate\Support\Facades\Storage;

class ProductStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $table = "product_stock";

    public $index = "admin/product_stock/index";
    public $create = "admin/product_stock/create";
    public $store = "admin/product_stock/store";
    public $show = "admin/product_stock/show";
    public $edit = "admin/product_stock/edit";
    public $update = "admin/product_stock/update";
    public $destroy = "admin/product_stock/destroy";

    public $file_storage = "public/img/product_stock";

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // for breadcrumb
        $data['breadcrumb'] = array(
            "home"=>array(
                "text"=>"Dashboard", 
                "link"=>"admin", 
                "is_active"=>"inactive"
            ),
            "product_stock"=>array(
                "text"=>"Product Stock", 
                "link"=>"", 
                "is_active"=>"active"
            )
        );
        $data['title'] = "Product Stock";

        // for route link        
        $data['edit'] = $this->edit;
        $data['create'] = $this->create;
        $data['destroy'] = $this->destroy;
        

        $table = $this->table;
        $data['table_field'] = DB::select("DESCRIBE $table");
        $data['field_break'] = "created_at";
        $data['text_add'] = "Add New";
        $data['table_data'] = ProductStockModel::all();

        return view('backend.single_page.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // define product_stock category
        $dropdown[0] = ProductModel::where('status', 1)->get();
        $dropdown_option[0] = "product_name";

        // define product category
        // $dropdown[1] = ProductCategoryModel::where('status', 1)->get();
        // $dropdown_option[1] = "product_category_name";        

        $data['dropdown'] = $dropdown;         
        $data['dropdown_option'] = $dropdown_option;

        $data['column_hidden'] = [];

        // for breadcrumb
        $data['breadcrumb'] = array(
            "home"=>array(
                "text"=>"Dashboard", 
                "link"=>"admin", 
                "is_active"=>"inactive"
            ),
            "product_stock"=>array(
                "text"=>"Product Stock", 
                "link"=>$this->index, 
                "is_active"=>"inactive"
            ),
            "create_product_stock"=>array(
                "text"=>"Create Product Stock", 
                "link"=>"#", 
                "is_active"=>"active"
            )
        );
        $data['title'] = "Create Product Stock";

        $data['store'] = $this->store;
        $data['index'] = $this->index;
        $table = $this->table;
        $data['table_field'] = DB::select("DESCRIBE $table");
        $data['field_first'] = "id";
        $data['field_break'] = "created_at";        

        return view('backend.single_page.create', $data);
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
        $table_field = DB::select("DESCRIBE $table");
        $field_break = "created_at";
        $field_first = "id";
        foreach ($table_field as $key => $value) {
            if ($value->Field == $field_first){
                continue;
            }
            if ($value->Field == $field_break){
                break;
            }                                            
            $arr_field[] = $value->Field;
            $arr_field_type[] = $value->Type;
            $count = count($arr_field); 
        }

        $insert = new ProductStockModel();
        for ($i=0; $i < $count; $i++) { 
            $text_type = $arr_field_type[$i];
            $text_check = substr($text_type,0,3);
            if ($text_check == "cha") {
                if (!empty($request->file( $arr_field[$i]))) {
                    $file                       = $request->file($arr_field[$i]);
                    $fileName3                  = uniqid() . '.'. $file->getClientOriginalExtension();
                    $path = Storage::putFileAs($this->file_storage, $request->file($arr_field[$i]), $fileName3);
                    $field_db = $arr_field[$i]; 
                    $insert->$field_db = $fileName3;
                }                
            }else{
                $field_db = $arr_field[$i];            
                $insert->$field_db = $request->$field_db;            
            }
        }        
        $insert->save();

        $result = preg_replace("/[^a-zA-Z]/", " ", $this->table); 
        return redirect(url($this->index))->with("message", "Success created $result !");
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
        // define product_stock category
        $data['dropdown'] = ProductModel::where('status', 1)->get();
        $data['dropdown_option'] = "product_name";
                
        // for breadcrumb
        $data['breadcrumb'] = array(
            "home"=>array(
                "text"=>"Dashboard", 
                "link"=>"admin", 
                "is_active"=>"inactive"
            ),
            "general_information"=>array(
                "text"=>"Product Stock", 
                "link"=>$this->index, 
                "is_active"=>"inactive"
            ),
            "edit_general_information"=>array(
                "text"=>"Edit Product Stock", 
                "link"=>"", 
                "is_active"=>"active"
            )            
        );
        $data['title'] = "Edit Product Stock";
        $data['update'] = $this->update;
        $data['index'] = $this->index;

        $data['id'] = $id;
        $table = $this->table;
        $data['table_field'] = DB::select("DESCRIBE $table");
        $data['field_first'] = "id";
        $data['field_break'] = "created_at";
        $data['field_'] = "created_at";

        $data['table_content'] = ProductStockModel::find($id);

        return view('backend.single_page.edit', $data);
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
        $table_field = DB::select("DESCRIBE $table");
        $field_break = "created_at";
        $field_first = "id";
        foreach ($table_field as $key => $value) {
            if ($value->Field == $field_first){
                continue;
            }
            if ($value->Field == $field_break){
                break;
            }                                            
            $arr_field[] = $value->Field;
            $arr_field_type[] = $value->Type;
            $count = count($arr_field); 
        }

        $update = ProductStockModel::find($id);
        for ($i=0; $i < $count; $i++) { 
            $text_type = $arr_field_type[$i];
            $text_check = substr($text_type,0,3);
            if ($text_check == "cha") {
                if (!empty($request->file( $arr_field[$i]))) {
                    $file                       = $request->file($arr_field[$i]);
                    $fileName3                  = uniqid() . '.'. $file->getClientOriginalExtension();
                    $path = Storage::putFileAs($this->file_storage, $request->file($arr_field[$i]), $fileName3);
                    $field_db = $arr_field[$i]; 
                    $update->$field_db = $fileName3;
                }                
            }else{
                $field_db = $arr_field[$i];            
                $update->$field_db = $request->$field_db;            
            }            
        }        
        $update->update();

        $result = preg_replace("/[^a-zA-Z]/", " ", $this->table); 
        return redirect(url($this->index))->with("message", "Success updated $result !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findtodelete = ProductStockModel::find($id);
        $findtodelete->delete();

        $result = preg_replace("/[^a-zA-Z]/", " ", $this->table); 
        return redirect(url($this->index))->with("info", "Success deleted $result !");        
    }
}
