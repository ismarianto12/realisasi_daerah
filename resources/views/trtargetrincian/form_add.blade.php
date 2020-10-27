<hr />
<div class="alert alert-info">
  <tt>Rincian data target pendapatan</tt>
</div>
<input type="hidden" name="target_id" value="{{ $targetid }}">
<div class="col-lg-12">
  <div class="col-md-6" style="float: left;">
    <table class="table table-striped">
      @for($i = 0; $i <= 11; $i++) @php $f=$i + 1; @endphp <tr>
        <td>
          <input type="text" onkeyup="gettarget()" name="bulan_{{ $i }}" id="bulan_{{ $f }}" class="form-control"
            placeholder="Bulan ke  .. {{ $f }}">
        </td>
        </tr>
        @endfor
        <tr>
          <td>Total Target Perbulan <br />
            <input type="text" name="t_target" id="pbulan_total" class="form-control">
          </td>
        </tr>
    </table>
  </div>
  <div class="col-md-6" style="float: right;">
    <table class="table table-striped">
      @for($i = 0; $i <= 11; $i++) @php $r=$i + 1; @endphp <tr>
        <td>
          <input type="text" onkeyup="getperubahan()" name="tpbulan_{{ $i }}" id="tpbulan_{{ $r }}" class="form-control"
            placeholder="Target Perubahan Bulan ke  .. {{ $r }}">
        </td>
        </tr>
        @endfor
        <tr>
          <td>Total Target Perbulan <br />
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
  @for($i = 0; $i <= 11; $i++)
   @php
      $j = $i+1;   
   @endphp
  $("#bulan_{{ $j }}").on('keyup', function(){
    var n = parseInt($(this).val().replace(/\D/g,''),10);
    $(this).val(n.toLocaleString()); 
 });
 @endfor

 @for($i = 0; $i <= 11; $i++)
 @php
   $js = $i+1;   
 @endphp
 $("#tpbulan_{{ $js }}").on('keyup', function(){
  var n = parseInt($(this).val().replace(/\D/g,''),10);
  $(this).val(n.toLocaleString()); 
});
@endfor
   
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

</script>