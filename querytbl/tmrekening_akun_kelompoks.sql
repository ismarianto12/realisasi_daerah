 
SELECT
	(
	SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akun_kelompoks,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akun_kelompoks.kd_rek_kelompok, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 1 
	) AS januari,
	(
	SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akun_kelompoks,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akun_kelompoks.kd_rek_kelompok, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 2 
	) AS februari,
	(
	SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akun_kelompoks,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akun_kelompoks.kd_rek_kelompok, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 3 
	) AS march,
	(
	SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akun_kelompoks,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akun_kelompoks.kd_rek_kelompok, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 4 
	) AS april,
	
   (SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akun_kelompoks,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akun_kelompoks.kd_rek_kelompok, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 5
	) AS mai,

    (SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akun_kelompoks,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akun_kelompoks.kd_rek_kelompok, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 6
	) AS june,
    (SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akun_kelompoks,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akun_kelompoks.kd_rek_kelompok, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 7
	) AS july,

    (SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akun_kelompoks,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akun_kelompoks.kd_rek_kelompok, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 8
	) AS agust,
    (SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akun_kelompoks,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akun_kelompoks.kd_rek_kelompok, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 9
	) AS sept,
    (SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akun_kelompoks,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akun_kelompoks.kd_rek_kelompok, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 10
	) AS nov,
    (SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akun_kelompoks,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akun_kelompoks.kd_rek_kelompok, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 11
	) AS oktober,
    (SELECT
		sum( jumlah ) 
	FROM
		tmrekening_akun_kelompoks,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akun_kelompoks.kd_rek_kelompok, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 12 
	) AS descember,
			tmrekening_akun_kelompoks.kd_rek_kelompok,
		tmrekening_akun_kelompoks.nm_rek_kelompok
FROM
	tmrekening_akun_kelompoks,
	tmpendapatan 
WHERE
	LOCATE( tmrekening_akun_kelompoks.kd_rek_kelompok, tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
	AND tanggal_lapor != "0000-00-00" 
GROUP BY
	januari ASC