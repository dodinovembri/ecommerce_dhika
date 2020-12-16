@extends('layouts.backend')

@section('content')        

        @include('templates.backend.sidebar')
        <div class="page-wrapper">
            <!-- Top Bar Start -->
            @include('templates.backend.header')
            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Dashboard</h4>
                                    </div><!--end col--> 
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-lg-3">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-dark mb-0 font-weight-semibold">Customer Orders</p>
                                                    <h3 class="m-0">{{ $total_order_created }}Processing</h3>
                                                    <p class="mb-0 text-truncate text-muted"><span class="text-success">{{ $total_order }}</span> Total Customer Orders</p>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col--> 
                                <div class="col-md-6 col-lg-3">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">                                                
                                                <div class="col">
                                                    <p class="text-dark mb-0 font-weight-semibold">Vouchers Active</p>
                                                    <h3 class="m-0">{{ $total_voucher_active }} Active</h3>
                                                    <p class="mb-0 text-truncate text-muted"><span class="text-success">{{ $total_voucher}}</span> Vouchers hass ben gived </p>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col--> 
                                <div class="col-md-6 col-lg-3">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">                                                
                                                <div class="col">
                                                    <p class="text-dark mb-0 font-weight-semibold">Customers</p>
                                                    <h3 class="m-0">{{ $total_customer_active }} Active</h3>
                                                    <p class="mb-0 text-truncate text-muted"><span class="text-danger">{{ $total_customer }}</span> Total of Customer</p>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col--> 
                                <div class="col-md-6 col-lg-3">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">  
                                                    <p class="text-dark mb-0 font-weight-semibold">Product</p>
                                                    <h3 class="m-0">{{ $total_product_active }} Active</h3>
                                                    <p class="mb-0 text-truncate text-muted"><span class="text-success">{{ $total_product }}</span> Total of Product</p>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col-->                               
                            </div><!--end row--> 
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container -->

                @include('templates.backend.footer')
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->
@endsection