 <html>

 <head>
     <title>Rekap Pelaporan Pendapatan Daerah Tangerang Selatan Tahun anggaran {{ $tahun }}</title>


 </head>
 <style type="text/css">
     table {
         font-size: 12px;
         table-layout: auto;
         border-collapse: collapse;
         width: 100%;
     }

     td {
         border: 0.1px dotted black;
         border-collapse: collapse;
     }

 </style>

 <body>

     <div style="float : left">
         @if ($type == 'pdf')
             <img src="{{ asset('assets/template/img/tangsel.png') }}"
                 style="width: 60px;height:60px;margin-top:45px">
         @endif
     </div>

     <center>
         <h2>PEMERINTAH KOTA TANGERANG SELATAN</h2>
         <h3>REALISASI PENDAPATAN APBD {{ Properti_app::getTahun() }}</h3>
         <h4>SAMPAI DENGAN DESEMBER {{ Properti_app::getTahun() }}</h4>
     </center>

     <table style="border: 0.5px dotted #000;
                  border-collapse: collapse">
         <thead>
             <tr style="background: royalblue;color: #fff; border: 0.5px dotted #000">
                 <th>Kode</th>
                 <th>URAIAN</th>
                 <th>APBD <b> {{ $tahun }} </b> </th>
                 <th>JAN</th>
                 <th>FEB</th>
                 <th>MAR</th>
                 <th>Realisasi</th>
                 <th>Lebih/Kurang</th>
                 <th>Persentase</th>
                 <th>APR</th>
                 <th>MEI</th>
                 <th>JUN</th>
                 <th>Realisasi</th>
                 <th>Lebih/Kurang</th>
                 <th>Persentase</th>
                 <th>JUL</th>
                 <th>AGUS</th>
                 <th>SEPT</th>
                 <th>Realisasi</th>
                 <th>Lebih/Kurang</th>
                 <th>Persentase</th>
                 <th>OKT</th>
                 <th>NOV</th>
                 <th>DES</th>
                 <th>Realisasi</th>
                 <th>Lebih/Kurang</th>
                 <th>Persentase</th>
             </tr>
             <tr style="background: royalblue;color: #fff; border: 0.5px dotted #000">
                 <td></td>
                 <td></td>
                 <td></td>

                 <td>1</td>
                 <td>2</td>
                 <td>3</td>

                 <td></td>
                 <td></td>
                 <td></td>

                 <td>4</td>
                 <td>5</td>
                 <td>6</td>

                 <td></td>
                 <td></td>
                 <td></td>


                 <td>7</td>
                 <td>8</td>
                 <td>9</td>

                 <td></td>
                 <td></td>
                 <td></td>


                 <td>10</td>
                 <td>11</td>
                 <td>12</td>

                 <td></td>
                 <td></td>
                 <td></td>


             </tr>
         </thead>
         <tbody>
             @php
                 $n = 1;
             @endphp
             @foreach ($getdatayears as $list)
                 @php
                     if ($list['ganti'] == '') {
                         $bold = 'background: #d2c7c7;font-weight: bold;';
                     } elseif ($list['ganti'] == '-') {
                         $bold = 'background: #ddd;font-weight: bold;';
                     } else {
                         $bold = '';
                     }
                 @endphp
                 <tr style="@php echo $bold @endphp">
                     <td>@php echo $list['kd_rek'] @endphp</td>
                     <td>@php echo $list['nama_rek'] @endphp</td>
                     <td>@php echo $list['tot'] @endphp</td>

                     <td>
                         @php
                             echo $list['jlbulan_1'];
                         @endphp
                     </td>
                     <td>
                         @php
                             echo $list['jlbulan_2'];
                         @endphp
                     </td>
                     <td>
                         @php
                             echo $list['jlbulan_3'];
                         @endphp
                     </td>
                     <td></td>
                     <td></td>
                     <td></td>


                     <td>
                         @php
                             echo $list['jlbulan_4'];
                         @endphp
                     </td>
                     <td>
                         @php
                             echo $list['jlbulan_5'];
                         @endphp
                     </td>
                     <td>
                         @php
                             echo $list['jlbulan_6'];
                         @endphp
                     </td>
                     <td></td>
                     <td></td>
                     <td></td>


                     <td>
                         @php
                             echo $list['jlbulan_7'];
                         @endphp
                     </td>
                     <td>
                         @php
                             echo $list['jlbulan_8'];
                         @endphp
                     </td>
                     <td>
                         @php
                             echo $list['jlbulan_9'];
                         @endphp
                     </td>
                     <td></td>
                     <td></td>
                     <td></td>


                     <td>
                         @php
                             echo $list['jlbulan_10'];
                         @endphp
                     </td>
                     <td>
                         @php
                             echo $list['jlbulan_11'];
                         @endphp
                     </td>
                     <td>
                         @php
                             echo $list['jlbulan_12'];
                         @endphp
                     </td>
                     <td></td>
                     <td></td>
                     <td></td>


                     @php  $n++; @endphp
             @endforeach
         </tbody>
     </table> <b>Badan Pendaptan daerah tangerang selatan</b>

 </body>

 </html>
