@extends('layouts.app')

@section('content')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<div class="content">
  @include('templates.content_header')
  <div class="content-header">
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>      
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
      </nav>
      <h4 class="content-title content-title-xs">Dashboard</h4>
    </div>
  </div><!-- content-header -->
  <div class="content-body">
    <div class="row row-sm">
      <div class="col-xl-12">
        <div class="row row-sm">
          <div class="col-sm-4 col-md-4 mg-t-2 mg-sm-t-2">
            <div class="card card-hover card-chart-one">
              <div class="card-header bg-transparent pd-b-0 bd-b-0">
                <form method="POST" action="{{ route('saldo') }}">
                  @csrf
                  <select class="form-control select2" name="akun_id" onchange="window.location.href=this.value;">
                    <?php if (isset($current)) { ?>
                      <option value="{{ url('admin/saldo_sess/'.$current->akun_child_code) }}">{{ $current->akun_child_code }} - {{ $current->akun_child_name }}</option>
                    <?php }else{ ?>
                      <option value=""></option>
                    <?php } ?>
                    <?php foreach ($akun_detail as $key => $value) {  ?>
                      <?php if (isset($current)) {
                        if ($current->akun_child_code == $value->akun_child_code) {
                          continue;
                        }
                      } ?>
                      <option value="{{ url('admin/saldo_sess/'.$value->akun_child_code) }}">{{$value->akun_child_code}} - {{ $value->akun_child_name }}</option>
                    <?php } ?>
                  </select>
                </form>
              </div>
              <div class="card-body pd-t-9">
                <div>            
                  <?php if (!isset($saldo)) {
                    $saldo = [];
                  } ?>      
                  <h6 class="card-value">Rp. {{ count($saldo) > 0 ? number_format($saldo[0]->total, 0, ',', '.') : 0 }}</h6>
                </div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-2 col-md-2 mg-t-2 mg-sm-t-2">
            <div class="card card-hover card-chart-one">
              <div class="card-header bg-transparent pd-b-0 bd-b-0">
                <h6 class="card-title mg-b-0">Pemasukan (M)</h6>
              </div>
              <div class="card-body pd-t-0">
                <div>                  
                  <?php $total_laba = 0; for ($i=0; $i < count($laba); $i++) { 
                     $total_laba = $total_laba + $laba[$i]->total;
                   } ?>
                   <?php if (strlen($total_laba) <= 11) { ?>
                      <h2 class="card-value">{{ isset($laba[0]->total) ? number_format($total_laba, 0, ',', '.') : 0 }}</h2>
                   <?php } elseif (strlen($total_laba) > 11 && strlen($total_laba) <= 13) { ?>
                      <h4 class="form" style="font-family: Oswald">{{ isset($laba[0]->total) ? number_format($total_laba, 0, ',', '.') : 0 }}</h4>
                   <?php }elseif (strlen($total_laba) > 13 && strlen($total_laba) <= 15 ) { ?>
                      <h5 class="form" style="font-family: Oswald">{{ isset($laba[0]->total) ? number_format($total_laba, 0, ',', '.') : 0 }}</h5>                     
                   <?php }else{ ?>
                      <h6 class="form" style="font-family: Oswald">{{ isset($laba[0]->total) ? number_format($total_laba, 0, ',', '.') : 0 }}</h6>                  
                   <?php } ?>                    
                </div>
                <div class="flot-chart"></div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-2 col-md-2 mg-t-2 mg-sm-t-2">
            <div class="card card-hover card-chart-one">
              <div class="card-header bg-transparent pd-b-0 bd-b-0">
                <h6 class="card-title mg-b-0">Pengeluaran (M)</h6>
              </div>
              <div class="card-body pd-t-0">
                <div>                  
                  <?php $total_pengeluaran = 0; for ($j=0; $j < count($rugi); $j++) { 
                     $total_pengeluaran = $total_pengeluaran + $rugi[$j]->total;
                   } ?>
                   <?php if (strlen($total_pengeluaran) <= 11) { ?>
                      <h2 class="card-value">{{ isset($rugi[0]->total) ? number_format($total_pengeluaran, 0, ',', '.') : 0 }}</h2>
                   <?php } elseif (strlen($total_pengeluaran) > 11 && strlen($total_pengeluaran) <= 13) { ?>
                      <h4 class="form" style="font-family: Oswald">{{ isset($rugi[0]->total) ? number_format($total_pengeluaran, 0, ',', '.') : 0 }}</h4>
                   <?php }elseif (strlen($total_pengeluaran) > 13 && strlen($total_pengeluaran) <= 15 ) { ?>
                      <h5 class="form" style="font-family: Oswald">{{ isset($rugi[0]->total) ? number_format($total_pengeluaran, 0, ',', '.') : 0 }}</h5>                     
                   <?php }else{ ?>
                      <h6 class="form" style="font-family: Oswald">{{ isset($rugi[0]->total) ? number_format($total_pengeluaran, 0, ',', '.') : 0 }}</h6>                  
                   <?php } ?>                                      
                </div>
                <div class="flot-chart"></div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-2 col-md-2 mg-t-2 mg-sm-t-2">
            <div class="card card-hover card-chart-one">
              <div class="card-header bg-transparent pd-b-0 bd-b-0">
                <h6 class="card-title mg-b-0">Pemasukan (Y)</h6>
              </div>
              <div class="card-body pd-t-0">
                <div>                  
                  <?php $incomes = 0; for ($k=0; $k < count($incomes_yearly); $k++) { 
                     $incomes = $incomes + $incomes_yearly[$k]->total;                    
                   } ?>      
                   <?php if (strlen($incomes) <= 11) { ?>
                      <h2 class="card-value">{{ isset($incomes_yearly[0]->total) ? number_format($incomes, 0, ',', '.') : 0 }}</h2>
                   <?php } elseif (strlen($incomes) > 11 && strlen($incomes) <= 13) { ?>
                      <h4 class="form" style="font-family: Oswald">{{ isset($incomes_yearly[0]->total) ? number_format($incomes, 0, ',', '.') : 0 }}</h4>
                   <?php }elseif (strlen($incomes) > 13 && strlen($incomes) <= 15 ) { ?>
                      <h5 class="form" style="font-family: Oswald">{{ isset($incomes_yearly[0]->total) ? number_format($incomes, 0, ',', '.') : 0 }}</h5>                     
                   <?php }else{ ?>
                      <h6 class="form" style="font-family: Oswald">{{ isset($incomes_yearly[0]->total) ? number_format($incomes, 0, ',', '.') : 0 }}</h6>                  
                   <?php } ?>            
                </div>
                <div class="flot-chart"></div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-2 col-md-2 mg-t-2 mg-sm-t-2">
            <div class="card card-hover card-chart-one">
              <div class="card-header bg-transparent pd-b-0 bd-b-0">
                <h6 class="card-title mg-b-0">Pengeluaran (Y)</h6>
              </div>
              <div class="card-body pd-t-0">
                <div>                  
                  <?php $expenses = 0; for ($l=0; $l < count($expense_yearly); $l++) { 
                     $expenses = $expenses + $expense_yearly[$l]->total;
                   } ?>
                   <?php if (strlen($expenses) <= 11) { ?>
                      <h2 class="card-value">{{ isset($expense_yearly[0]->total) ? number_format($expenses, 0, ',', '.') : 0 }}</h2>
                   <?php } elseif (strlen($expenses) > 11 && strlen($expenses) <= 13) { ?>
                      <h4 class="form" style="font-family: Oswald">{{ isset($expense_yearly[0]->total) ? number_format($expenses, 0, ',', '.') : 0 }}</h4>
                   <?php }elseif (strlen($expenses) > 13 && strlen($expenses) <= 15 ) { ?>
                      <h5 class="form" style="font-family: Oswald">{{ isset($expense_yearly[0]->total) ? number_format($expenses, 0, ',', '.') : 0 }}</h5>                     
                   <?php }else{ ?>
                      <h6 class="form" style="font-family: Oswald">{{ isset($expense_yearly[0]->total) ? number_format($expenses, 0, ',', '.') : 0 }}</h6>                  
                   <?php } ?>                                       
                </div>
                <div class="flot-chart"></div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->                                                 
          <div class="col-12 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-cash-flow">
              <div class="card-body pd-0">
                <div class="row no-gutters">
                  {{--                  <div class="col-sm-5 col-md-4">
                    <div class="pd-y-15 pd-sm-y-20 pd-l-15 pd-sm-l-20 ht-100p">
                      <h6 class="tx-color-01 mg-b-3">Cash Flow Summary</h6>
                      <p class="tx-11 tx-color-03">Jan 01, 2019 - Dec 31, 2019</p>

                      <label class="tx-color-03 tx-12 mg-b-5">Total Income</label>
                      <h4 class="card-value">Rp. {{ isset($laba[0]->total) ? number_format($laba[0]->total, 0, ',', '.') : 0 }}</h4>

                      <hr class="mg-y-10 op-0">

                      <label class="tx-color-03 tx-12 mg-b-5">Total Pengeluaran</label>
                      <h4 class="card-value">Rp. {{ isset($rugi[0]->total) ? number_format($rugi[0]->total, 0, ',', '.') : 0 }}</h4>
                    </div>
                  </div><!-- col --> --}}
                  <div class="col-sm-12 col-md-12">
                    <div class="pd-15 pd-t-0 pd-sm-20 bd-sm-l">
                      <div class="d-flex align-items-center justify-content-between mg-b-15">
                        <div class="chart-legend">
                        </div>
                        <div class="btn-group">
                          <a href="{{ url('dashboard/monthly') }}"><button class="btn btn-white btn-xs active">Monthly</button></a>
                          <a href="{{ url('dashboard/yearly') }}"><button class="btn btn-white btn-xs">Yearly</button></a>
                        </div><!-- btn-group -->
                      </div>
                      <?php
                      if (count($grafik_laba) > 0) {

                        foreach ($grafik_laba as $grafik) {
                          $data2[$grafik->bulan] = $grafik->total;
                        }         

                        for ($i=1; $i <= 12; $i++) {
                          $persen[] = isset($data2[$i]) ? $data2[$i] : 0;                           
                        }     
                      } 

                      if (count($grafik_rugi) > 0) {
                        foreach ($grafik_rugi as $grafik2) {
                          $data3[$grafik2->bulan] = $grafik2->total;
                        }         

                        for ($j=1; $j <= 12; $j++) {
                          $persen2[] = isset($data3[$j]) ? $data3[$j] : 0;                           
                        }                                                  
                      }

                      ?>
                      <div class="card-body">       
                        <div class="component">
                 
                          <div class="table table-responsive">
                                    <figure class="highcharts-figure">
                                      <div id="container"></div>
                                    </figure>
                          </div>
                        </div><!-- component-section -->
                      </div>                      

                    </div>
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- content-body -->
</div>

<style type="text/css">
  .highcharts-figure, .highcharts-data-table table {
    min-width: 360px; 
    max-width: 800px;
    margin: 1em auto;
  }

  .highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
  }
  .highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
  }
  .highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
  }
  .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
  }
  .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
  }
  .highcharts-data-table tr:hover {
    background: #f1f7ff;
  }
</style>


<script type="text/javascript">
  Highcharts.chart('container', {
    chart: {
      zoomType: 'xy'
    },
    title: {
      text: 'Cash Flow Summary'
    },
    xAxis: [{
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
      'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      crosshair: true
    }],
  yAxis: [{ // Primary yAxis
    title: {
      text: 'Jumlah',
      style: {
        color: Highcharts.getOptions().colors[1]
      }
    }
  }, { // Secondary yAxis
    title: {
      text: 'Jumlah',
      style: {
        color: Highcharts.getOptions().colors[0]
      }
    },
    opposite: true
  }],
  tooltip: {
    shared: true
  },
  legend: {
    layout: 'vertical',
    align: 'left',
    x: 120,
    verticalAlign: 'top',
    y: 100,
    floating: true,
    backgroundColor:
      Highcharts.defaultOptions.legend.backgroundColor || // theme
      'rgba(255,255,255,0.25)'
    },
    series: [{
      name: 'Pemasukan',
      type: 'column',
      yAxis: 1,
      data: <?php echo isset($persen) ? json_encode($persen) : 0 ?>,
      tooltip: {
        valuePrefix: 'Rp. '
      }

    },{
      name: 'Pengeluaran',
      type: 'column',
      yAxis: 1,
    // data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
    data: <?php echo isset($persen2) ? json_encode($persen2) : 0 ?>,

    tooltip: {
      valuePrefix: 'Rp. '
    }

  }, {
    name: 'Pemasukan',
    type: 'spline',
    data: <?php echo isset($persen) ? json_encode($persen) : 0 ?>,
    tooltip: {
      valuePrefix: 'Rp. '
    }
  }, {
    name: 'Pengeluaran',
    type: 'spline',
    data: <?php echo isset($persen2) ? json_encode($persen2) : 0 ?>,
    tooltip: {
      valuePrefix: 'Rp. '
    }
  }]
});
</script>
@endsection
