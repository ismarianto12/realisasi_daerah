<?php $__env->startSection('title','Grafik Pendapatan'); ?>

<?php $__env->startSection('content'); ?>

<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Grafik Pendapatan</h2>
                <h5 class="text-white op-7 mb-2">Pendapatan asli daerah </h5>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Realisasi Pendapatan Daerah </div>
                        <div class="card-tools">
                            <a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                <span class="btn-label">
                                    <i class="fa fa-pencil"></i>
                                </span>
                                Export
                            </a>
                            <a href="#" class="btn btn-info btn-border btn-round btn-sm">
                                <span class="btn-label">
                                    <i class="fa fa-print"></i>
                                </span>
                                Print
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <figure class="highcharts-figure">
                        <div id="container"></div>
                        <p class="highcharts-description">
                        </p>
                    </figure>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card-header">
                    <div class="card-title">Total Pendapatan Daerah </div>
                    <div class="card-category">Per <?php
                        echo Properti_app::tahun_sekarang()
                        ?>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div class="mb-4 mt-2">
                        <h1>
                            <div class="tpadtahun"></div>
                        </h1>
                    </div>
                    <div class="pull-in">
                        <canvas id="dailySalesChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body pb-0">
                    <div class="h1 fw-bold float-right text-warning">+7%</div>
                    <h2 class="mb-2">213</h2>
                    <p class="text-muted">Transactions</p>
                    <div class="pull-in sparkline-fix">
                        <div id="lineChart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title">Overall statistics</div>
                    <div class="card-category">Persentase PAD Berdasarkan besaran target dan jumlah pendapatan.</div>


                    <figure class="highcharts-figure">
                        <div id="pad_graph"></div>

                    </figure>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title">Total income & spend statistics</div>
                    <div class="row py-3">
                         <div class="col-md-8">
                            <div id="chart-container">
                                <canvas id="totalIncomeChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php $__env->startSection('script'); ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
    $(function(){     
        //jumlah tahun ini
        $.getJSON('<?php echo e(Url("api_grafik/total_pad")); ?>',function(data){
            $('.tpadtahun').text(data.total);
        }); 
    }); 
</script>

<script>
    Highcharts.chart('container', {

        title: {
            text: 'Pertumbuhan pendapatan daerah tahun <?php echo e(Properti_app::tahun_sekarang()); ?>'
        },
    
        subtitle: {
            text: 'Badan Pendapatan Daerah.'
        },
    
        yAxis: {
            title: {
                text: 'Number of Employees'
            }
        },
    
        xAxis: {
            accessibility: {
                rangeDescription: 'Tahun : <?php echo e(Properti_app::tahun_sekarang()); ?>'
            }
        },
    
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
    
        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                pointStart: <?php echo e(Properti_app::tahun_sekarang()); ?>

            }
        }, 
        series: [
        <?php $__currentLoopData = $rekening; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
          <?php
              $jumlah = $tmpendapatan::where('tmrekening_akun_kelompok_jenis_objek_rincian_id',$key['id_rek_rincians'])->first();
          ?>
        {   
            name: '<?php echo e($key["nm_rek_jenis"]); ?>',
            data:  [<?php echo e($jumlah['jumlah']); ?>]
        },
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ],
    
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    
    });
 
</script>
<script>
    Highcharts.chart('pad_graph', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Pertumbuhan Pendapatan Daerah tahun <?php echo e(Properti_app::getTahun()); ?>'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            name: 'Jumlah Pad',
            colorByPoint: true,
            data: <?php echo $rpadtype ?> 
        }]
    });



</script>




<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\realisasi_daerah\resources\views/grafik/index.blade.php ENDPATH**/ ?>