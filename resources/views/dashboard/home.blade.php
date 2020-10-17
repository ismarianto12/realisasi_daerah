@extends('layouts.template')
@section('title','Halaman depan aplikasi')
@section('content')
@php  
    $level_id = Properti_app::getlevel();
    $username = Auth::user()->username;
@endphp
@if($level_id == 3)
    <script>
        $(function(){
            $.confirm({title : 'Hy {{ $username }} silahkan laporkan pendpatan hari ini',
                       content : 'Pendapatan yang belum di laporkan : Pada {{ date('Y-m-d') }}'});
        }) 
    </script>
    
@endif

 

<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                <h5 class="text-white op-7 mb-2">@php echo Properti_app::getsatker(); echo str_replace('_','
                    ',env('app_instansi')) @endphp</h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-white btn-border btn-round mr-2">Hy {{ Auth::user()->username }}</a>
                <a href="#" class="btn btn-secondary btn-round">Selamat datang kembali di halaman administrasi
                    pendapatan daerah .</a>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title">Statistik</div>
                    <div class="card-category"></div>
                    <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-1"></div>
                            <h6 class="fw-bold mt-3 mb-0">Jumlah Rek Obj</h6>
                        </div>
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-2"></div>
                            <h6 class="fw-bold mt-3 mb-0">Jumlah Rek Rincian</h6>
                        </div>
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-3"></div>
                            <h6 class="fw-bold mt-3 mb-0">Jumlah Rek Sub Rincian</h6>
                        </div>
                    </div>
                    <hr />
                    <div class="row">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-stats card-warning card-round">
                                    <div class="card-body">
                                        <div class="row"> 
                                            <div class="col-7 col-stats">
                                                <div class="numbers">
                                                    <p class="card-category">TOTAL PAD TAHUN {{ Properti_app::getTahun() }}</p>
                                                    <h4 class="card-title">
                                                        <div class="tpadtahun"></div>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-stats card-success card-round">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center">
                                                    <i class="flaticon-analytics"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 col-stats">
                                                <div class="numbers">
                                                    <p class="card-category">TOTAL PAD HARI INI</p>
                                                    <h4 class="card-title">
                                                        <div class="tpadharini"></div>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title">Pertumbuhan Retribusi</div>
                    <div class="row py-3">
                        <div class="col-md-12">
                            <div id="chart-container">
                                <figure class="highcharts-figure">
                                    <div id="container"></div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

 

@section('script')

<script src="{{ asset('assets/plugins/hight-cart') }}/highcharts.js"></script>
<script src="{{ asset('assets/plugins/hight-cart') }}/exporting.js"></script>
<script src="{{ asset('assets/plugins/hight-cart') }}/export-data.js"></script>
<script src="{{ asset('assets/plugins/hight-cart') }}/accessibility.js"></script>

<script>
    $(function(){     
        //jumlah tahun ini
        $.getJSON('{{ Url("api_grafik/total_pad") }}',function(data){
            $('.tpadtahun').text(data.total);
        }); 
        
        //jumlmah hari ini
        $.getJSON('{{ Url("api_grafik/total_pad?tanggal_lapor=1") }}',function(data){ 
            $('.tpadharini').text(data.total);
        });
     
        $.getJSON('{{ Url("api_grafik/jumlah_rek?jenis=1") }}',function(data){
         rek_obj = data.data;
         Circles.create({
            id: 'circles-1',
            radius: 45,
            value: rek_obj,
            maxValue: 100,
            width: 10,
            text: rek_obj,
            colors: ['#f1f1f1', '#FF9E27'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
         });
        });   

        $.getJSON('{{ Url("api_grafik/jumlah_rek?jenis=2") }}',function(data){
            rek_jenis = data.data;
       
        Circles.create({
            id: 'circles-2',
            radius: 45,
            value: rek_obj,
            maxValue: 580,
            width: 10,
            text: rek_jenis,
            colors: ['#f1f1f1', '#2BB930'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        });
    })
    
    $.getJSON('{{ Url("api_grafik/jumlah_rek?jenis=3") }}',function(data){
        rek_jenis_sub = data.data;  
        Circles.create({
            id: 'circles-3',
            radius: 45,
            value: rek_jenis_sub,
            maxValue: 100,
            width: 10,
            text: rek_jenis_sub,
            colors: ['#f1f1f1', '#F25961'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })
    });  

    Highcharts.chart('container', {
        chart: {
            type: 'bar'
        },
        title: {
            text:'Penerimaan pad daerah (Retribusi)'
        },
        subtitle: {
            text: 'Sumber : Pendapatan Asli Daerah .'
        },
        xAxis: {
            categories: ['Retribusi Jasa Umum', 'Retribusi Jasa usaha', 'Retribusi Perizinan tertentu'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Pendapatan Dalam (Jutaan)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' millions'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Year 1800',
            data: [107, 31, 635, 203, 2]
        }, {
            name: 'Year 1900',
            data: [133, 156, 947, 408, 6]
        }, {
            name: 'Year 2000',
            data: [814, 841, 3714, 727, 31]
        }]
    });

        $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: '#ffa534',
            fillColor: 'rgba(255, 165, 52, .14)'
        });
    });
</script>

@endsection
@endsection