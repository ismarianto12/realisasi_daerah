<hr />
<div class="alert alert-info">
  <tt>Rincian data target pendapatan</tt>
</div>
<input type="hidden" name="target_id" value="<?php echo e($targetid); ?>">
<div class="col-lg-12">
  <div class="col-md-6" style="float: left;">
    <table class="table table-striped">
      <?php for($i = 0; $i <= 11; $i++): ?> <?php $f=$i + 1; ?> <tr>
        <td>
          Bulan Ke - <?php echo e($f); ?>

        </td>
        <td>
          <input type="text" onkeyup="gettarget()" name="bulan_<?php echo e($i); ?>" id="bulan_<?php echo e($f); ?>" class="form-control"
            placeholder="Bulan ke  .. <?php echo e($f); ?>" value="0">
        </td>
        </tr>
        <?php endfor; ?>
        <tr>
          <td colspan="2">Total Target Perbulan <br />
            <input type="text" name="t_target" id="pbulan_total" class="form-control">
          </td>
        </tr>
    </table>
  </div>
  <div class="col-md-6" style="float: right;">
    <table class="table table-striped">
      <?php for($i = 0; $i <= 11; $i++): ?> <?php $r=$i + 1; ?> <tr>

        <td>
          Perubahan Bulan ke - <?php echo e($r); ?>

        </td>

        <td>
          <input type="text" onkeyup="getperubahan()" name="tpbulan_<?php echo e($i); ?>" id="tpbulan_<?php echo e($r); ?>" class="form-control"
            placeholder="Target Perubahan Bulan ke  .. <?php echo e($r); ?>" value="0">
        </td>
        </tr>
        <?php endfor; ?>
        <tr>
          <td colspan="2">Total Target Perbulan Perubahan <br />
            <input type="text" name="tperubahan" id="tperubahan" class="form-control" value="">
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
     jnilai = (isNaN(rnilaib) ? 0 : rnilaib);

     total = total + Number(jnilai);
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
  fjnilai = (isNaN(rsnilaib) ? 0 : rsnilaib);

  total_perubahan = total_perubahan + Number(fjnilai);
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

</script><?php /**PATH C:\xampp\htdocs\realisasi_daerah\resources\views/trtargetrincian/form_add.blade.php ENDPATH**/ ?>