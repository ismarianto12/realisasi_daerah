<center>
  <h2> PEMERINTAH KOTA TANGERANG SELATAN	</h2>
 <h3>LAPORAN REALISASI ANGGARAN PENDAPATAN DAN BELANJA PEMDA	</h3>
 <h3> PER REKENING JENIS</h3>	
   TAHUN ANGGARAN  {{ $tahun['tahun'] }}	
   PERIODE : {{ $dari }}  S/D {{ $sampai }} 
  <br /><br />
  @if ($tmsikd_satker_id)
   [{{ $kode }}] - {{  $satker_name  }}  
  @endif  
 </center>  
 <table style="border-collapse: collapse; width: 100%;" border="1" cellspacing="1">
   <thead>
   <tr>
   <td>No</td>
   <td>Uraian</td>
   <td>Pagu Anggaran</td>
   <td colspan="3">Jumlah Realisasi (Rp.)</td>
   <td colspan="2">Lebih Kurang<br /><br /></td>
   </tr>
   <tr>
   <td></td>
   <td></td>
   <td></td>
   <td>S/D Periode Lalu</td>
   <td>Periode Ini</td>
   <td>Total</td>
   <td>(Rp.)</td>
   <td>%</td>
   </tr>
   <tr>
   <td>1</td>
   <td>2</td>
   <td>3</td>
   <td>4</td>
   <td>5</td>
   <td>6</td>
   <td>7</td>
   <td>8</td>
   </tr>
   </thead> 
   <tbody>  
 
@foreach ($render->groupBy('tmrekening_akun_kelompok_jenis_objek_rincian_subs') as $list)  
      @php  
       $kelompok = $kolompokjenis->where('id',$list[0]['kd_rek_jenis'])->first(); 
       $rek_obj  = $jenisobject->where('id',$list[0]['kd_rek_obj'])->first();
       $rinacian = $objectrincian->where('id',$list[0]['kd_rek_rincian_obj'])->first();
      @endphp;
      <tr> 
        <td>{{ $list[0]['kd_rek_jenis'] }}</td>
        <td>{{ $list[0]['nm_rek_jenis'] }}</td>
        <td>{{ $list[0]['jml_rek_jenis'] }}</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>  
    </tr>
    
    <tr> 
      <td>{{ $list[0]['kd_rek_obj'] }}</td>
      <td>{{ $list[0]['nm_rek_obj'] }}</td>
      <td>{{ $list[0]['jml_rek_obj'] }}</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>  
  </tr> 

     <tr> 
      <td>{{ $list[0]['kd_rek_rincian_obj'] }}</td>
      <td>{{ $list[0]['nm_rek_rincian_obj'] }}</td>
      <td>{{ $list[0]['jml_rek_rincian_obj'] }}</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>  
  </tr>  

  <tr> 
    <td>{{ $list[0]['kd_rek_rincian_objek_sub'] }}</td>
    <td>{{ $list[0]['nm_rek_rincian_objek_sub'] }}</td>
    <td>{{ $list[0]['jumlah'] }}</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>  
</tr>
 @endforeach  


    </tbody> 
   </table>