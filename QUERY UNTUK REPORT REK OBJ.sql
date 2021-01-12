 
SELECT
	(
	SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akuns,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akuns.kd_rek_akun, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 1 
	) AS januari,
	(
	SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akuns,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akuns.kd_rek_akun, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 2 
	) AS februari,
	(
	SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akuns,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akuns.kd_rek_akun, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 3 
	) AS march,
	(
	SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akuns,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akuns.kd_rek_akun, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 4 
	) AS april,
	
   (SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akuns,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akuns.kd_rek_akun, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 5
	) AS mai,

    (SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akuns,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akuns.kd_rek_akun, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 6
	) AS june,
    (SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akuns,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akuns.kd_rek_akun, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 7
	) AS july,

    (SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akuns,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akuns.kd_rek_akun, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 8
	) AS agust,
    (SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akuns,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akuns.kd_rek_akun, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 9
	) AS sept,
    (SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akuns,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akuns.kd_rek_akun, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 10
	) AS nov,
    (SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akuns,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akuns.kd_rek_akun, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 11
	) AS oktober,
    (SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akuns,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akuns.kd_rek_akun, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 12 
	) AS descember,
			tmrekening_akuns.kd_rek_akun,
		tmrekening_akuns.nm_rek_akun
FROM
	tmrekening_akuns,
	tmpendapatan 
WHERE
	LOCATE( tmrekening_akuns.kd_rek_akun, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
	AND tanggal_lapor != "0000-00-00" 
GROUP BY
	januari ASC