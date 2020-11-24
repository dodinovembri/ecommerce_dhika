@extends('layouts.app')

@section('content')



<div class="page-body">

    @include('templates.backend.breadcrumb')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="card tab2-card">
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <form class="needs-validation" method="POST" action="{{ url($update, $id) }}">
                            @csrf
                            <?php foreach ($table_field as $key => $value) {
                                if ($value->Field == $field_first){
                                    $id = $value->Field;
                                    continue;
                                }                                
                                if ($value->Field == $field_break){
                                    break;
                                }                                            
                                $string = preg_replace("/[^a-zA-Z]/", " ", $value->Field); 
                                $arr_field_ori[] = $value->Field;
                                $arr_field_name[] = $string;
                                $arr_field_type[] = $value->Type;
                                $arr_field_null[] = $value->Null;
                                $count = count($arr_field_name); 
                            } ?>

                            <?php for ($i=0; $i < $count; $i++) {
                                $text_ori = $arr_field_ori[$i]; 
                                $text_name = $arr_field_name[$i]; 
                                $text_type = $arr_field_type[$i]; 
                                $text_null = $arr_field_null[$i]; 
                                $text_check = substr($text_type,0,3);                                  
                                if ($text_null == "NO") {
                                    $is_required = 1;
                                }else{
                                    $is_required = 0;
                                }                                
                                if ($text_check == "int" || $text_check == "big") { ?>
                                    <div class="form-group row">
                                        <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> {{ ucfirst($text_name) }}</label>
                                        <?php if (isset($dropdown)) { ?>
                                            <select class="form-control col-xl-8 col-md-7" name="{{ $text_ori }}" <?php if($is_required == 1) {echo "required";} ?>>
                                                <option value="{{ $table_content->$text_ori }}">{{ $table_content->$text_ori }}</option>
                                                <?php foreach ($dropdown as $key => $value) { ?>
                                                    <option value="{{$value->id}}">{{$value->$dropdown_option}}</option>
                                                <?php } ?>
                                            </select>
                                        <?php }else{ ?>
                                            <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="text" name="{{ $text_ori }}" <?php if($is_required == 1) {echo "required";} ?> >
                                        <?php } ?>
                                    </div>
                                <?php }else if ($text_check == "var" || $text_check == "nva") { ?>
                                    <div class="form-group row">
                                        <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> {{ ucfirst($text_name) }}</label>
                                        <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="text" value="{{ $table_content->$text_ori }}" name="{{ $text_ori }}" <?php if($is_required == 1) {echo "required";} ?> >
                                    </div>
                                <?php }else if ($text_check == "tex") { ?>
                                    <div class="form-group row editor-label">
                                        <label class="col-xl-3 col-md-4"><span>*</span> {{ ucfirst($text_name) }}</label>
                                        <div class="col-xl-8 col-md-7 editor-space">
                                            <textarea class="form-control" rows="5" name="{{ $text_ori }}">{{ $table_content->$text_ori }}</textarea>
                                        </div>
                                    </div>                                    
                                <?php }else if ($text_check == "tim") { ?>

                                <?php }else if ($text_check == "tin"){ ?>
                                    <div class="form-group row">
                                        <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> {{ ucfirst($text_name) }}</label>
                                        <select class="form-control col-xl-8 col-md-7" name="{{ $text_ori }}" <?php if($is_required == 1) {echo "required";} ?>>
                                            <?php if ($table_content->$text_ori == 1) { ?>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>             
                                            <?php } else{ ?>
                                                <option value="0">Inactive</option>
                                                <option value="1">Active</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                            <div class="form-group row editor-label">
                                <label class="col-xl-3 col-md-4"><span></span></label>
                                <div class="col-xl-8 col-md-7 editor-space">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{ url($index) }}"><button type="button" class="btn btn-secondary">Cancel</button></a>
                                </div>
                            </div>                     
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>

</div>


@endsection