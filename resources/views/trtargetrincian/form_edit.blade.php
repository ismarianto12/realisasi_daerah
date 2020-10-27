<hr />
<div class="alert alert-info">
  <tt>Rincian data target pendapatan</tt>
</div>
<input type="hidden" name="target_id" value="{{ $targetid }}">
<div class="col-lg-12">
  <div class="col-md-6" style="float: left;">
    <table class="table table-striped">
      @for($i = 0; $i <= 11; $i++) <tr>
        <td>
          <input type="text" onkeyup="gettarget()" name="bulan_{{ $i }}" id="bulan_{{ $i }}" class="form-control"
            placeholder="Bulan ke  .. {{ $i }}" value="{{ $rincian_data[$i]->jumlah }}">
        </td>
        </tr>
        @endfor
        <tr>
          <td>Total Target Perbulan <br />
            <input type="text" name="t_target" id="pbulan_total" class="form-control" value="{{ $jumlah }}">
          </td>
        </tr>
    </table>
  </div>
  <div class="col-md-6" style="float: right;">
    <table class="table table-striped">
      @for($i = 0; $i <= 11; $i++) <tr>
        <td>
          <input type="text" onkeyup="getperubahan()" name="tpbulan_{{ $i }}" id="tpbulan_{{ $i }}" class="form-control"
            placeholder="Target Perubahan Bulan ke  .. {{ $i }}" value="{{ $rincian_data[$i]->jumlah_perubahan }}">
        </td>
        </tr>
        @endfor
        <tr>
          <td>Total Target Perbulan <br />
            <input type="text" name="tperubahan" id="tperubahan" class="form-control" value="{{ $jumlah_perubahan }}">
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
     var result = document.getElementById('pbulan_total');
     var el, i = 0, total = 0; 
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
  var result = document.getElementById('tperubahan');
  var el, i = 0, total_perubahan = 0; 
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
</script>