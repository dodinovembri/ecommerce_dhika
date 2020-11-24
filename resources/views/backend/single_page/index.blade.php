@extends('layouts.app')

@section('content')

<div class="page-body">

    @include('templates.backend.breadcrumb')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body vendor-table">
                        @include('templates.backend.flashmessage')
                        <?php if (isset($create)) { ?>
                            <a href="{{ url($create) }}"><button type="button" class="btn btn-primary">{{ $text_add }}</button></a><br><br>
                        <?php } ?>
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <?php foreach ($table_field as $key => $value) {
                                        if ($value->Field == $field_break){
                                            break;
                                        }                                            
                                        $string = preg_replace("/[^a-zA-Z]/", " ", $value->Field) ?>
                                            <th>{{ ucfirst($string) }}</th>
                                        <?php 
                                        $arr_field[] = $value->Field;
                                        $count = count($arr_field); 
                                    } ?>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($table_data as $key => $value) { ?>
                                    <tr>
                                        <?php for ($i=0; $i < $count; $i++) {
                                            $clean_string = $arr_field[$i]; 
                                        ?>   
                                            <td>{{ $value->$clean_string }}</td>
                                        <?php } ?>                                            
                                        <td>
                                            @include('templates.backend.action')
                                        </td>
                                    </tr> 
                                    @include('templates.backend.deleteconfirm')                                       
                                <?php } ?>                                   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
       </div>
    </div>
<!-- Container-fluid Ends-->

</div>


@endsection