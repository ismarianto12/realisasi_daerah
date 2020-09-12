<center>
  <h2> PEMERINTAH KOTA TANGERANG SELATAN	</h2>
 <h3>LAPORAN REALISASI ANGGARAN PENDAPATAN DAN BELANJA PEMDA	</h3>
 <h3> PER REKENING JENIS</h3>	
   TAHUN ANGGARAN  {{ $tahun['tahun'] }}	
   PERIODE : {{ $dari }}  S/D {{ $sampai }} 
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
     @foreach ($render_data->groupBy('kd_rek_jenis') as $c) 
      @php 
          $ls = $render_data->where('tmrekening_akun_kelompok_jenis_id',$ls[0]['id']); 
      @endphp     
       <tr>
         <td>{{ $ls[0]['kd_rek_jenis'] }} </td>
         <td>{{ $ls[0]['nm_rek_jenis'] }}</td>
         <td>{{ $ls[0]['jml_rek_jenis'] }} </td>   
         <td>{{ $ls[0]['jml_rek_jenis'] }}</td>
         <td>{{ $ls[0]['jml_rek_jenis'] }}</td>
         <td>{{ $ls[0]['jml_rek_jenis'] }}</td>
         <td>{{ $ls[0]['jml_rek_jenis'] }}</td>
         <td>{{ $ls[0]['jml_rek_jenis'] }}</td>
      </tr> 
       @foreach ($ls->groupBy('kd_rek_obj') as $obj) 
       @php
         //  dd($obj)
       @endphp
       <tr>
        <td>{{ $obj[0]['kd_rek_obj'] }} </td>
        <td>{{ $obj[0]['nm_rek_obj'] }}</td>
        <td>{{ $obj[0]['jml_rek_obj'] }} </td>   
        <td>{{ $obj[0]['jml_rek_obj'] }}</td>
        <td>{{ $obj[0]['jml_rek_obj'] }}</td>
        <td>{{ $obj[0]['jml_rek_obj'] }}</td>
        <td>{{ $obj[0]['jml_rek_obj'] }}</td>
        <td>{{ $obj[0]['jml_rek_obj'] }}</td>
     </tr>  
     @endforeach  
     @foreach ($obj as $item) 
     <tr>
      <td>{{ $item->kd_rek_rincian_obj }} </td>
      <td>{{ $item['nm_rek_rincian_obj'] }}</td>
      <td>{{ $item->jml_rek_rincian_obj }} </td>   
      <td>{{ $item->jml_rek_rincian_obj }}</td>
      <td>{{ $item->jml_rek_rincian_obj }}</td>
      <td>{{ $item->jml_rek_rincian_obj }}</td>
      <td>{{ $item->jml_rek_rincian_obj }}</td>
      <td>{{ $item->jml_rek_rincian_obj }}</td>
   </tr>  
   @endforeach

   @endforeach
     
    </tbody> 
   </table>