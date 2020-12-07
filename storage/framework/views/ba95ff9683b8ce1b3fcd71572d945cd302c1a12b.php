  
<?php $__env->startSection('title','Halaman depan aplikasi'); ?>
<?php $__env->startSection('content'); ?>
<?php
$level_id = Properti_app::getlevel();
$username = Auth::user()->username;
?>
<?php if($level_id == 3): ?>
<script>
    $(function(){
            $.confirm({title : 'Hy <?php echo e($username); ?> silahkan laporkan pendpatan hari ini',
                       content : 'Pendapatan yang belum di laporkan : Pada <?php echo e(date('Y-m-d')); ?>'});
        }) 
</script>
<?php endif; ?>


<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                <h5 class="text-white op-7 mb-2"><?php echo Properti_app::getsatker(); echo str_replace('_','
                    ',env('app_instansi')) ?></h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-white btn-border btn-round mr-2">Hy <?php echo e(Auth::user()->username); ?></a>
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
                    <div id="pad_chart_graph"></div>
                    <hr />
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title">Pertumbuhan Pendapatan tahun <?php echo e(Properti_app::getTahun()); ?>.</div>
                    <div class="row py-3">
                        <div class="col-md-12">
                            
                            <div id="chart-container">
                            <div id="canvas"></div>                            
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-card-no-pd">
        <div class="col-sm-6">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-chart-pie text-warning"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">TOTAL PAD TAHUN <?php echo e(Properti_app::getTahun()); ?></p>
                                <h4 class="card-title tpadtahun"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-coins text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">PENDAPATAN DAERAH HARI INI </p>
                                <h4 class="card-title tpadharini"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->startSection('script'); ?>


<script src="<?php echo e(asset('assets/plugins/hight-cart')); ?>/highcharts.js"></script>
<script src="<?php echo e(asset('assets/plugins/hight-cart')); ?>/exporting.js"></script>
<script src="<?php echo e(asset('assets/plugins/hight-cart')); ?>/export-data.js"></script>
<script src="<?php echo e(asset('assets/plugins/hight-cart')); ?>/accessibility.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>



<script>
var labelsarr = [<?php echo e($namarekening); ?>];
                 
var values = [<?php echo e($jumlahpad); ?>];

var ctx = document.getElementById('canvas').getContext('2d');
var chart = new Chart(ctx, {
   type: 'bar',
   data: {
      labels: labelsarr,
      datasets: [
     {
         label: 'Amount',
         data: values,
         backgroundColor: 'rgba(0, 119, 204, 0.8)',
      }
]
   },
   options: {
      tooltips: {
         callbacks: {
            label: function(t, d) {
               var xLabel = d.datasets[t.datasetIndex].label;
               var yLabel = t.yLabel >= 1000 ? '$' + t.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") : '$' + t.yLabel;
               return xLabel + ': ' + yLabel;
            }
         }
      },
      scales: {
         yAxes: [{
            ticks: {
               callback: function(value, index, values) {
                  if (parseInt(value) >= 1000) {
                     return '$' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                  } else {
                     return '$' + value;
                  }
               }
            }
         }]
      }
   }
});   

</script>

<script>
    $(function(){     
        //jumlah tahun ini
        $.getJSON('<?php echo e(Url("api_grafik/total_pad")); ?>',function(data){
            $('.tpadtahun').text(data.total);
        }); 
        
        //jumlmah hari ini
     })
    
    $.getJSON('<?php echo e(Url("api_grafik/jumlah_rek?jenis=3")); ?>',function(data){
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
            text: 'Grafik PAD Tahun <?php echo e($tahun); ?>'
        },
        xAxis: {
            categories: [ 
            <?php $__currentLoopData = $graf_pad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              '<?php echo e($item['nm_rek']['nil']); ?>',
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ]
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Pendapatan Daerah Tangaerang Selatan Tahun <?php echo e($tahun); ?>'
            }
        },
        legend: {
            reversed: true
        },
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
        series: [ 
        <?php $__currentLoopData = $graf_pad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        {
            name: "<?php echo $item['kd_rek']['nil'] ?> - <?php echo $item['nm_rek']['nil'] ?>",
            data: [<?php echo $item['jumlah']['nil'] ?>]
        },  
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ]
    });
    
 
        $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: '#ffa534',
            fillColor: 'rgba(255, 165, 52, .14)'
        });
     
</script>

<script>
    Highcharts.chart('pad_chart_graph', {
    chart: {
      type: 'line'
    },
    title: {
      text: 'PERTUMBUHAN PENDAPATAN DAERAH TAHUN 2020'
    },
    subtitle: {
      text: 'BADAN PENDAPATAN DAERAH KOTA TANGGERANG SELATAN'
    },
    xAxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
      title: {
        text: 'Jumlah Pendaptan Dalam Rupiah (Rp)'
      }
    },
    plotOptions: {
      line: {
        dataLabels: {
          enabled: true
        },
        enableMouseTracking: false
      }
    },
    series: [
    <?php $__currentLoopData = $pad_months; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        {
          name: '<?php echo e($list['kd_pad']['nil']); ?> - <?php echo e($list['nama_pad']['nil']); ?>',
          data: [<?php echo e($list['data_pad']['nil']); ?>]
        }, 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
    ]
  });

    document.getElementById('small').addEventListener('click', function () {
        chart.setSize(400);
    });
    
    document.getElementById('large').addEventListener('click', function () {
        chart.setSize(600);
    });
    
    document.getElementById('auto').addEventListener('click', function () {
        chart.setSize(null);
    });
    

</script>




<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\realisasi_daerah\resources\views/dashboard/home.blade.php ENDPATH**/ ?>