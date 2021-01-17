<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use App\Models\Tmpendapatan;

class Rpendapatan extends Model
{

    public static function getAll($bulan)
    {
        $query = "SELECT
        kd_rek_akun,
        nm_rek_akun,
        (
        SELECT
            sum( jumlah ) AS jumlah 
        FROM
            tmpendapatan 
        WHERE
            LOCATE( tmrekening_akuns.kd_rek_akun, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
            AND MONTH ( tanggal_lapor ) = '$bulan' 
         ) AS jumlah,
        '' AS ganti 
    FROM
        tmrekening_akuns 
    GROUP BY
        kd_rek_akun 
        
        
        UNION
    SELECT
        kd_rek_kelompok as kd_rek_akun,
        nm_rek_kelompok,
        (
        SELECT
            sum( jumlah ) AS jumlah 
        FROM
            tmpendapatan 
        WHERE
            LOCATE( tmrekening_akun_kelompoks.kd_rek_kelompok, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
            AND MONTH ( tanggal_lapor ) = '$bulan' 
        GROUP BY
            kd_rek_kelompok 
        ) AS jumlah,
        '' AS ganti 
    FROM
        tmrekening_akun_kelompoks 
    GROUP BY
        kd_rek_kelompok UNION
    SELECT
        kd_rek_jenis as kd_rek_akun,
        nm_rek_jenis,
        (
        SELECT
            sum( jumlah ) AS bulan_keljenis 
        FROM
            tmpendapatan 
        WHERE
            LOCATE( tmrekening_akun_kelompok_jenis.kd_rek_jenis, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
            AND MONTH ( tanggal_lapor ) = '$bulan' 
        GROUP BY
            kd_rek_jenis 
        ) AS jum,
        '-' AS ganti 
    FROM
        tmrekening_akun_kelompok_jenis 
    GROUP BY
        kd_rek_jenis UNION
    SELECT
        kd_rek_obj as kd_rek_akun,
        nm_rek_obj,
        (
        SELECT
            sum( jumlah ) AS jenis_obj_bulan 
        FROM
            tmpendapatan 
        WHERE
            LOCATE( tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
            AND MONTH ( tanggal_lapor ) = '$bulan' 
        GROUP BY
            kd_rek_obj 
        ) AS jenis_obj_bulan,
        '--' AS ganti 
    FROM
        tmrekening_akun_kelompok_jenis_objeks 
    GROUP BY
        kd_rek_obj UNION
    SELECT
        kd_rek_rincian_obj as kd_rek_akun,
        nm_rek_rincian_obj,
        sum( jumlah ) AS rincian,
        '---' AS ganti 
    FROM
        tmrekening_akun_kelompok_jenis_objek_rincians,
        tmpendapatan 
    WHERE
        LOCATE( tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
        AND MONTH ( tanggal_lapor ) = '$bulan' 
    GROUP BY
        kd_rek_rincian_obj 
     
				 ORDER BY CASE 
    WHEN jumlah IS NOT NULL THEN jumlah
END desc 
		";
        return DB::select($query);
    }

    public static function pertahun()
    {
        return Tmpendapatan::select(
            'tmpendapatan.*.',
            'tmrekening_akun_kelompok_jenis_objek_rincian_subs.id as rek_rincian_sub_id',
            'tmrekening_akun_kelompok_jenis_objek_rincian_subs.kd_rek_rincian_objek_sub',
            'tmrekening_akun_kelompok_jenis_objek_rincian_subs.nm_rek_rincian_objek_sub',
            'tmrekening_akun_kelompok_jenis_objek_rincians.id as id_rek_rincians',
            'tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj',
            'tmrekening_akun_kelompok_jenis_objek_rincians.nm_rek_rincian_obj',
            'tmrekening_akun_kelompok_jenis_objek_rincians.id as tmrekening_akun_kelompok_jenis_objek_rincians_id',
            'tmrekening_akun_kelompok_jenis_objeks.id as id_rek_obj',
            'tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj',
            'tmrekening_akun_kelompok_jenis_objeks.nm_rek_obj',
            'tmrekening_akun_kelompok_jenis.id as id_rek_jenis',
            'tmrekening_akun_kelompok_jenis.kd_rek_jenis',
            'tmrekening_akun_kelompok_jenis.nm_rek_jenis',
            'tmrekening_akun_kelompoks.id as id_rek_kelompok',

            'tmrekening_akun_kelompoks.kd_rek_kelompok',
            'tmrekening_akun_kelompoks.nm_rek_kelompok',
            'tmrekening_akun_kelompoks.tmrekening_akun_id',

            'tmrekening_akuns.kd_rek_akun',
            'tmrekening_akuns.nm_rek_akun',
            // total income by tmrekening_akun_kelompok_jenis_objek_rincians 
            \DB::raw(
                '(
                SELECT SUM(tmpendapatan.jumlah) 
                FROM tmpendapatan 
                Where tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj = tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id) as tkd_rek_rincian_obj '
            ),
            // total income by tmrekening_akun_kelompok_jenis_objeks 
            \DB::raw(
                '(
                SELECT SUM(tmpendapatan.jumlah) 
                FROM tmpendapatan  
                Where LOCATE(tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id) = 1) as tkd_rek_obj  '
            ),
            // total income by tmrekening_akun_kelompok_jenis 
            \DB::raw(
                '(
                SELECT SUM(tmpendapatan.jumlah) 
                FROM tmpendapatan 
                Where LOCATE(tmrekening_akun_kelompok_jenis.kd_rek_jenis, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id) = 1) as tkd_rek_jenis '
            ),
            // total income by tmrekening_akun_kelompoks 
            \DB::raw(
                '(
                SELECT SUM(tmpendapatan.jumlah)  
                FROM tmpendapatan  
                Where LOCATE(tmrekening_akun_kelompoks.kd_rek_kelompok, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id) = 1) as tkd_rek_kelompok'
            ),
            // total income by tmrekening_akuns 
            \DB::raw(
                '(
                SELECT SUM(tmpendapatan.jumlah) 
                FROM tmpendapatan   
                Where LOCATE(tmrekening_akuns.kd_rek_akun,tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id) = 1) as tkd_rek_akun'
            )
        )
            ->join('tmrekening_akun_kelompok_jenis_objek_rincian_subs', 'tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.kd_rek_rincian_objek_sub', 'LEFT OUTER')
            // get twin data in one icme table 
            // ->join('tmrekening_akun_kelompok_jenis_objek_rincians', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.tmrekening_akun_kelompok_jenis_objek_rincian_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj')
            ->join('tmrekening_akun_kelompok_jenis_objek_rincians', 'tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj')

            ->join('tmrekening_akun_kelompok_jenis_objeks', 'tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj')

            ->join('tmrekening_akun_kelompok_jenis', 'tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', '=', 'tmrekening_akun_kelompok_jenis.kd_rek_jenis')

            ->join('tmrekening_akun_kelompoks', 'tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok_id', '=', 'tmrekening_akun_kelompoks.kd_rek_kelompok')

            ->join('tmrekening_akuns', 'tmrekening_akun_kelompoks.tmrekening_akun_id', '=', 'tmrekening_akuns.kd_rek_akun')

            ->orderBy('tmrekening_akun_kelompok_jenis_objek_rincian_subs.kd_rek_rincian_objek_sub')
            ->get();
    }
}
