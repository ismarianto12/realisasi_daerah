-- query untuk mencari jumlah pendapatan daerah 
  SELECT
		 kd_rek_kelompok,
		 nm_rek_kelompok,
		 sum(jumlah) as jumlah,
		 '' as break

	FROM
		tmrekening_akun_kelompoks,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akun_kelompoks.kd_rek_kelompok, tmpendapatan.  tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 1  
         GROUP BY kd_rek_kelompok
UNION 

SELECT
		 kd_rek_jenis,
		 nm_rek_jenis,
		 sum(jumlah) as bulan_keljenis,
		 	  '-' as break
	FROM
		tmrekening_akun_kelompok_jenis,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akun_kelompok_jenis.kd_rek_jenis, tmpendapatan.  tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 1  
	GROUP BY kd_rek_jenis
    UNION  
	SELECT
		 kd_rek_obj,
		 nm_rek_obj,
		 sum(jumlah) as jenis_obj_bulan,
		 	  '--' as break
	FROM
		tmrekening_akun_kelompok_jenis_objeks, 
		tmpendapatan 

	WHERE
		LOCATE( tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj, tmpendapatan.  tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 1  
	GROUP BY kd_rek_obj

    UNION 

    SELECT
		 kd_rek_rincian_obj,
		 nm_rek_rincian_obj,
		 sum(jumlah) as rincian,
		 	  '---' as break
	FROM
		tmrekening_akun_kelompok_jenis_objek_rincians,
		tmpendapatan 
	WHERE
		LOCATE( tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj, tmpendapatan.  tmrekening_akun_kelompok_jenis_objek_rincian_id ) = 1 
		AND MONTH ( tanggal_lapor ) = 1  
	GROUP BY kd_rek_rincian_obj 
	ORDER BY kd_rek_kelompok 
  