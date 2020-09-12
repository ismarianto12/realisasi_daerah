@extends('layouts.template') 
@section('content')
<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        <div id="alert"></div>
        <div class="card">
            <div class="card-body">
                <div class="form-row form-inline">
                    <div class="col-md-12">
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Tahun :</label>
                            <label class="r-0 s-12 col-md-5 tl">{{ $tmrapbds->tmsikd_setup_tahun_anggaran->tahun }} &nbsp; {{ $tmrapbds->jenis }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">PD :</label>
                            <label class="r-0 s-12 col-md-8 tl">{{ '['.$rka->tmrka->tmsikd_satker->kode.'] '.$rka->tmrka->tmsikd_satker->nama }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Unit Kerja :</label>
                            <label class="r-0 s-12 col-md-5 tl">
                                {{ $rka->tmrka->tmsikd_sub_skpd == null ? '' : '['.$rka->tmrka->tmsikd_sub_skpd->kode.']' }} &nbsp; 
                                {{ $rka->tmrka->tmsikd_sub_skpd == null ? '' : $rka->tmrka->tmsikd_sub_skpd->nama }}
                            </label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Bidang Urusan :</label>
                            <label class="r-0 s-12 col-md-8 tl">{{ '['.$rka->tmrka->tmsikd_bidang->kd_bidang.'] '.$rka->tmrka->tmsikd_bidang->nm_bidang }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-header no-b">
                <h6><strong>Rekening Mata Anggaran Kegiatan</strong></h6>
            </div>
            <div class="card-body">
                <div class="form-row form-inline">
                    <div class="col-md-12">
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Rek Jenis :</label>
                            <label class="r-0 s-12 col-md-5 tl">[{{ $r->kd_rek_jenis }}] {{ $r->nm_rek_jenis }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Rek Objek :</label>
                            <label class="r-0 s-12 col-md-5 tl">[{{ $r->kd_rek_obj }}] {{ $r->nm_rek_obj }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Rek Objek Rincian :</label>
                            <label class="r-0 s-12 col-md-5 tl">[{{ $r->kd_rek_rincian_obj }}] {{ $r->nm_rek_rincian_obj }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Rek Objek Sub Rincian :</label>
                            <label class="r-0 s-12 col-md-5 tl">[{{ $r->kd_rek_rincian_objek_sub }}] {{ $r->nm_rek_rincian_objek_sub }}</label>
                        </div>
                    </div>
                </div>
                <table class="table mt-2 mb-0">
                    <thead>
                        <tr>
                            <th width="5%">&nbsp;</th>
                            <th width="7%">Volume</th>
                            <th width="7%">Satuan</th>
                            <th width="13%">Harga</th>
                            <th width="15%">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>{{ Html_number::decimal($r->volume) }}</td>
                            <td>{{ $r->satuan }}</td>
                            <td>{{ Html_number::decimal($r->harga) }}</td>
                            <td>{{ Html_number::decimal($r->jumlah) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{--  <div class="card mt-2 b-0">
            <div class="card-body no-p">
                <table class="table table-striped table-bordered mb-0" id="sub_mak">
                    <thead>
                        <tr>
                            <th colspan="10" class="no-b p-2">
                                <strong>Rincian Sub Mata Anggaran Kegiatan</strong>
                            </th>
                        </tr>
                        <tr class="text-center">
                            <th rowspan="2" width="4%">&nbsp;</th>
                            <th rowspan="2" width="10%">Jns Item</th>
                            <th colspan="3" class="no-b">No Item</th>
                            <th rowspan="2" width="30%">Uraian</th>
                            <th rowspan="2" width="7%">Volume</th>
                            <th rowspan="2" width="8%">Satuan</th>
                            <th rowspan="2" width="12%">Harga</th>
                            <th rowspan="2" width="18%">Jumlah</th>
                        </tr>
                        <tr>
                            <th width="5%">Header</th>
                            <th width="5%">Sub Header</th>
                            <th width="5%">Item</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rincians as $key=>$rincian)
                        <tr>
                            <td><input name="cboxHapus[]" id="list_subrincobj_cboxHapus_0" type="checkbox" value="{{ $rincian->id }}"></td>
                            <td>{{ $jnsItems[$rincian->jns_item] }}</td>
                            <td>{{ $rincian->no_item_h }}</td>
                            <td>{{ $rincian->no_item_s }}</td>
                            <td>{{ $rincian->no_item }}</td>
                            <td @if($rincian->jns_item == 'H' || $rincian->jns_item == 'S') class="font-weight-bold"@endif>{{ $rincian->uraian }}</td>
                            @if($rincian->jns_item == 'I')
                            <td align="right">{{ $rincian->volume }}</td>
                            <td class="text-center">{{ $rincian->satuan }}</td>
                            <td align="right">{{ Html_number::decimal($rincian->harga) }}</td>
                            <td align="right">{{ Html_number::decimal($rincian->jumlah) }}</td>
                            @else
                            <td></td>
                            <td></td>
                            <td></td>
                            <td align="right" class="font-weight-bold">{{ Html_number::decimal($rincian->jns_item == 'H' ? $rincian->jumlah_h : $rincian->jumlah_s) }}</td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="10" class="p-2">
                                <div class="btn-group">
                            </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>  --}}
    </div>
</div>
@endsection
 
