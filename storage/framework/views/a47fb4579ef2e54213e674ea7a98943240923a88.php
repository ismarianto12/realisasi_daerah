<?php $__env->startSection('title','Halaman depan aplikasi'); ?>
<?php $__env->startSection('content'); ?>
<?php
$level_id = Properti_app::getlevel();
$username = Auth::user()->username;
?>
<?php if($level_id == 3): ?>
<script>
    $(function(){
            $.confirm({title :'Hy <?php echo e($username); ?> silahkan laporkan pendpatan hari ini',
                       content : 'Pendapatan yang belum di laporkan : Pada <?php echo e(date('Y-m-d')); ?>'});
        });
</script>
<?php endif; ?>
 
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Dashboard Realisasi Daerah</h2>
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
                    <div class="card-title">Realisasi <?php echo e(Properti_app::getTahun()); ?></div>
                    <div class="row py-3">
                        <div class="col-md-12">
                           <div id="Lispersentase"></div> 
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
                                <p class="card-category">PENDAPATAN HARI INI </p>
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

<script>
    $(function(){
        //jumlah tahun ini
        $.getJSON('<?php echo e(Url("api_grafik/total_pad")); ?>',function(data){
            $('.tpadtahun').text(data.total);
        });
        //jumlmah hari ini
        $.getJSON('<?php echo e(Url("pad/today")); ?>',function(data){
            $('.tpadharini').html('<b>'+data.total+'</b>');
        });


        $('#Lispersentase').html("<center><img src='https://icon-library.com/images/spinner-icon-gif/spinner-icon-gif-9.jpg' class='img-responsive'></center>").load('<?php echo e(route('homeAll')); ?>');
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

    Highcharts.setOptions({
  lang: {
    numericSymbols: ['Juta >', 'Juta > ', 'Juta > ', 'Juta >']
  }
});
 
 var colors = Highcharts.getOptions().colors,
 <?php $__currentLoopData = $kelompoks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fkelompok): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <?php $implodeKelompok[]= '\'' . $fkelompok['nm_rek_kelompok'] . '\''; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
 <?php
      $rkelompok = implode(',',$implodeKelompok);  ?>
  categories = [ <?php echo $rkelompok ?>],
    data = [
//data pendapatapan was here   
<?php $j=1; ?>     
<?php $__currentLoopData = $PadsPie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listPad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
{
            y: <?php echo e($listPad['jumlah']['nil']); ?>,
            color: colors[<?php echo e($j); ?>],
            drilldown: {
                name: '<?php echo e($listPad['nm_rek']['nil']); ?>',
                categories: [
                    '<?php echo e($listPad['nm_rek']['nil']); ?>',
                ],
                data: [
                  <?php echo e($listPad['jumlah']['nil']); ?>,
                ]
            }  
        },
<?php $j++; ?>     

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    ],
    browserData = [],
    versionsData = [],
    i,
    j,
    dataLen = data.length,
    drillDataLen,
    brightness;


// Build the data arrays
for (i = 0; i < dataLen; i += 1) {

    // add browser data
    browserData.push({
        name: categories[i],
        y: data[i].y,
        color: data[i].color
    });

    // add version data
    drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            color: Highcharts.color(data[i].color).brighten(brightness).get()
        });
    }
}
// perbandingan penpatan berbanding realisasi dan target 
var colors = Highcharts.getOptions().colors,
    categories = [
      <?php echo $frPie ?>  
    ],
    data = [
    <?php 
    $no =1;
    ?> 

    <?php $__currentLoopData = $PadsPie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $istPads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
    <?php $jn = ($no%2); ?>
        {
            y: <?php echo $istPads['jumlah']['nil'] ?>,
            color: colors[ <?php echo $jn  ?>],
            drilldown: {
                name: '<?php echo $istPads["nm_rek"]["nil"] ?>',
                categories: [
                   <?php echo '\''.$istPads['nm_rek']['nil'].'\'';  ?>,
                ],
                data: [
                    <?php echo $istPads['jumlah']['nil'] ?>
                ]
            }
        },
        <?php $no++;  ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

           
     ],
    browserData = [],
    versionsData = [],
    i,
    j,
    dataLen = data.length,
    drillDataLen,
    brightness;


// Build the data arrays
for (i = 0; i < dataLen; i += 1) {

    // add browser data
    browserData.push({
        name: categories[i],
        y: data[i].y,
        color: data[i].color
    });

    // add version data
    drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            color: Highcharts.color(data[i].color).brighten(brightness).get()
        });
    }
}

// Create the chart
Highcharts.chart('pie_persentase', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'BADAN PENDAPATAN DAERAH TANGERANG SELATAN <?php echo e(now()); ?>'
    },
    subtitle: {
        text: ''
    },
    plotOptions: {
        pie: {
            shadow: false,
            center: ['50%', '50%']
        }
    },
    tooltip: {
        valueSuffix: '%'
    },
    series: [{
        name: 'Browsers',
        data: browserData,
        size: '60%',
        dataLabels: {
            formatter: function () {
                return this.y > 5 ? this.point.name : null;
            },
            color: '#ffffff',
            distance: -30
        }
    }, {
        name: 'Versions',
        data: versionsData,
        size: '80%',
        innerSize: '60%',
        dataLabels: {
            formatter: function () {
                // display only if larger than 1
                return this.y > 1 ? '<b>' + this.point.name + ':</b> ' +
                    this.y + '%' : null;
            }
        },
        id: 'versions'
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 400
            },
            chartOptions: {
                series: [{
                }, {
                    id: 'versions',
                    dataLabels: {
                        enabled: false
                    }
                }]
            }
        }]
    }
});
// end function chart

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

Highcharts.setOptions({
  lang: {
    numericSymbols: ['Juta / lebih', 'Juta /  lebih', 'Juta /  lebih', 'Juta / lebih']
  }
});

    Highcharts.chart('pad_chart_graph', {
    chart: {
      type: 'line'
    },
    title: {
      text: 'PERTUMBUHAN PENDAPATAN DAERAH TAHUN  <?php echo e(Properti_app::getTahun()); ?>'
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
          data: [<?php echo e($list['data_pad']['nil']); ?>],
        
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\realisasi_daerah\resources\views/dashboard/home.blade.php ENDPATH**/ ?>