<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tmpegawai extends Model
{
  protected $primarykey   = 'pegawaiid';
  protected $table        = 'tmpegawai';
  protected $guarded      = [];
  public    $incrementing = false;

  function Tmdinas()
  {
    return $this->belongsTo(Tmdinas::class, 'dinasid', 'dinasid');
  }

  function Tmbidang()
  {
    return $this->belongsTo(Tmbidang::class, 'bidangid');
  }

  function Tmjabatan()
  {
    return $this->belongsTo(Tmjabatan::class, 'jabatanid', 'jabatanid');
  }
}
