<?php

class Cmodel extends CI_Model
{
  	public function GetMember($username){
		$data = $this->db->query('select * from member where username = "'.$username.'"');
		return $data->result_array();
	}

	public function getCari($cari){
		// print('<pre>');
		// print_r($cari);
		// print('</pre>');
		$data = $this->db->query('select * from posting,member where id_member = member_id AND concat(judul,harga,jenis,tipe,warna,deskripsi) regexp '."'$cari[query]'".' AND jenis = '."'$cari[jenis]'".' AND posting.kota = '."'$cari[kota]'".' AND id_posting NOT IN
(SELECT DISTINCT(ID_POSTING) FROM RESERVASI WHERE (('.$cari['awal'].' > tgl_mulai) AND (tg_akhir > '.$cari['awal'].')) AND (('.$cari['akhir'].' > tgl_mulai) AND (tg_akhir > '.$cari['akhir'].')))' );

// 		$data = $this->db->query('select * from posting where concat(judul,harga,jenis,tipe,warna,deskripsi) regexp '."'smflakndlksn'".' AND jenis = '."'Mobil'".' AND kota = '."'Surabaya'".' AND id_posting NOT IN
// (SELECT DISTINCT(ID_POSTING) FROM RESERVASI WHERE (('.$cari['awal'].' < 2016-09-05) AND (2016-09-05<'.$cari['akhir'].')) AND (('.$cari['awal'].' < 2016-09-18) AND (2016-09-18< '.$cari['akhir'].')))' );
		// return $data->result_array();
		return $data->result_array();
	}

}
?>
