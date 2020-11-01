<hr />
<div class="alert alert-info">
  <tt>Rincian data target pendapatan</tt>
</div>
<input type="hidden" name="target_id" value="<?php echo e($targetid); ?>">
<div class="col-lg-12">
  <div class="col-md-6" style="float: left;">
    <table class="table table-striped">
      <?php
      $i = 0;
      $jumlah = 0;
      ?>
      <?php $__currentLoopData = $rincian_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fjumlah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
      $jumlah += $fjumlah['jumlah']['val'];
      $f = $i + 1;
      ?>
      <tr>
        <td>
          <input type="text" onkeyup="gettarget()" name="bulan_<?php echo e($i); ?>" id="bulan_<?php echo e($f); ?>" class="form-control"
            placeholder="Bulan ke  .. <?php echo e($f); ?>" value="<?php echo e($fjumlah['jumlah']['val']); ?>">
        </td>
      </tr>
      <?php
      $i++;
      ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td>Total Target Perbulan <br />
          <input type="text" name="t_target" id="pbulan_total" class="form-control" value="<?php echo e($jumlah); ?>">
        </td>
      </tr>
    </table>
  </div>
  <div class="col-md-6" style="float: right;">
    <table class="table table-striped">
      <?php
      $g = 0;
      $jumlah_perubahan = 0;
      ?>
      <?php $__currentLoopData = $rincian_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jumper): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
      $jumlah_perubahan += $jumper['jumlah_perubahan']['val'];
      $k = $g + 1;
      ?>

      <tr>
        <td>
          <input type="text" onkeyup="getperubahan()" name="tpbulan_<?php echo e($i); ?>" id="tpbulan_<?php echo e($k); ?>" class="form-control"
            placeholder="Target Perubahan Bulan ke  .. <?php echo e($k); ?>" value="<?php echo e($jumper['jumlah_perubahan']['val']); ?>">
        </td>
      </tr>
      <?php
      $g++;
      ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <tr>
        <td>Total Target Perbulan <br />
          <input type="text" name="tperubahan" id="tperubahan" class="form-control" value="<?php echo e($jumlah_perubahan); ?>">
        </td>
      </tr>
    </table>
  </div>
</div>



<script>
  function nformat(x) {
      return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }
  
    <?php for($i = 0; $i <= 11; $i++): ?>
    <?php
    $j = $i+1;   
  ?>
  
    $("#bulan_<?php echo e($j); ?>").on('keyup', function(){
      var n = parseInt($(this).val().replace(/\D/g,''),10);
      $(this).val(n.toLocaleString()); 
   });
   <?php endfor; ?>
  
   <?php for($i = 0; $i <= 11; $i++): ?>
   <?php
   $js = $i+1;   
  ?>
   $("#tpbulan_<?php echo e($js); ?>").on('keyup', function(){
    var n = parseInt($(this).val().replace(/\D/g,''),10);
    $(this).val(n.toLocaleString()); 
  });
  <?php endfor; ?>
     
    function gettarget(){
      hitung_bersih();
       var result = document.getElementById('pbulan_total');
       var el, i = 1, total = 0; 
       while(el = document.getElementById('bulan_'+(i++)) ) {
       el.value = el.value.replace(/\\D/,"");
       nilaib   =  el.value;
       rnilaib  = nilaib.replace(/,/g,''); 
       total = total + Number(rnilaib);
      }
       result.value = nformat(total);
        if(document.getElementById('pbulan_total').value =="" && document.getElementById('pbulan_total').value =="" && document.getElementById('pbulan_total').value =="" ){
        result.value = 0;
       }
      }
   
  //get perubahan 
  function getperubahan(){
    hitung_bersih();
    var result = document.getElementById('tperubahan');
    var el, i = 1, total_perubahan = 0; 
    while(el = document.getElementById('tpbulan_'+(i++)) ) {
    el.value  = el.value.replace(/\\D/,"");
    snilaib   =  el.value;
    rsnilaib  = snilaib.replace(/,/g,''); 
    total_perubahan = total_perubahan + Number(rsnilaib);
   }
   result.value = nformat(total_perubahan);
     if(document.getElementById('tperubahan').value =="" && document.getElementById('tperubahan').value =="" && document.getElementById('tperubahan').value =="" ){
     result.value = 0;
    }
  }
  
  
  function hitung_bersih(){ 
    $(function(){   
    var tbersih = $('#pbulan_total').val();
    var ctotal  = $('#tperubahan').val();
  
    var rtbersih = tbersih.replace(/,/g,'');
    var rctotal   = ctotal.replace(/,/g,'');
  
    var jumlahkan = Number(rtbersih) + Number(rctotal);
    $('#tpendapatan').val(jumlahkan);  
  
   }); 
   } 
  
  
</script><?php /**PATH D:\xampp64\www\retribusi\resources\views/trtargetrincian/form_edit.blade.php ENDPATH**/ ?>