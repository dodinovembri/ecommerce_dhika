<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\FrontEndGeneralInfoModel;

class FrontEndGeneralInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $table = "frontend_general_info";

    // routing or url
    public $index = "admin/frontend_general_info/index";
    public $create = "admin/frontend_general_info/create";
    public $store = "admin/frontend_general_info/store";
    public $show = "admin/frontend_general_info/show";
    public $edit = "admin/frontend_general_info/edit";
    public $update = "admin/frontend_general_info/update";
    public $destroy = "admin/frontend_general_info/destroy";

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
            "general_information"=>array(
                "text"=>"General Information", 
                "link"=>"", 
                "is_active"=>"active"
            )
        );
        $data['title'] = "General Information";

        // for route link
        $data['edit'] = $this->edit;

        $table = $this->table;
        $data['table_field'] = DB::select("DESCRIBE $table");
        $data['field_break'] = "created_at";
        $data['text_add'] = "Add New";
        $data['table_data'] = FrontEndGeneralInfoModel::all();

        return view('admin.single_page.index', $data);
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
        // for breadcrumb
        $data['breadcrumb'] = array(
            "home"=>array(
                "text"=>"Dashboard", 
                "link"=>"admin", 
                "is_active"=>"inactive"
            ),
            "general_information"=>array(
                "text"=>"General Information", 
                "link"=>$this->index, 
                "is_active"=>"inactive"
            ),
            "edit_general_information"=>array(
                "text"=>"Edit General Information", 
                "link"=>"", 
                "is_active"=>"active"
            )            
        );
        $data['title'] = "Edit General Information";
        $data['update'] = $this->update;
        $data['index'] = $this->index;

        $data['id'] = $id;
        $table = $this->table;
        $data['table_field'] = DB::select("DESCRIBE $table");
        $data['field_first'] = "id";
        $data['field_break'] = "created_at";
        $data['field_'] = "created_at";

        $data['table_content'] = FrontEndGeneralInfoModel::find($id);

        return view('admin.single_page.edit', $data);
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
            $count = count($arr_field); 
        }

        $update = FrontEndGeneralInfoModel::find($id);
        for ($i=0; $i < $count; $i++) { 
            $field_db = $arr_field[$i];            
            $update->$field_db = $request->$field_db;            
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
        $findtodelete = FrontEndGeneralInfoModel::find($id);
        $findtodelete->delete();

        $result = preg_replace("/[^a-zA-Z]/", " ", $this->table); 
        return redirect(url($this->index))->with("info", "Success deleted $result !");  
    }
}
