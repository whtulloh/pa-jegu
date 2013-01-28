<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->helper('date');
	}

	function getAll(){
		$query=$this->db->get('barang');
		return $query->result();
	}

	function viewBeanAll(){
		$this->db->select('barang.id_barang,barang.nama,thumbnail,harga,total_harga,diskon,rating,rated_by')
				 ->from('barang')
				 ->join('gambar','barang.id_barang=gambar.id_barang','inner')
				 ->where('primary','1')
				 ->group_by('barang.id_barang');
		$query=$this->db->get();
		return $query->result();
	}

	function getBeanAll(){
		$this->db->select('barang.id_barang,barang.nama,thumbnail')
				 ->from('barang')
				 ->join('gambar','barang.id_barang=barang.id_barang','inner')
				 ->where('primary','1')
				 ->group_by('barang.id_barang');
		$query = $this->db->get();
		return $query->result();
	}

	function cekID($id){
		$query=$this->db->get_where('barang', array('id_barang'=>$id));
		return $query->result();
	}

	function detailBarang($id){
		$this->db->select('barang.id_barang,barang.nama,thumbnail,harga,total_harga,diskon,rating,rated_by')
				 ->from('barang')
				 ->join('gambar','barang.id_barang=gambar.id_barang')
				 ->where('barang.id_barang',$id);
		$query=$this->db->get();
		return $query->result();
	}

	function getKat(){
		$query = $this->db->get('kategori');
		return $query->result();
	}

	function getParentKat(){
		$this->db->select();
		$this->db->from('kategori');
		$this->db->where('parent_id =','0');
		$query = $this->db->get();

		return $query->result();
	}

	function getChildKat(){
		$this->db->select();
		$this->db->from('kategori');
		$this->db->where('parent_id !=','0');
		$query = $this->db->get();

		return $query->result();
	}

	function getByKat($id_kat){
		$this->db->select('kategori.nama,barang.id_barang,barang.nama,diskon,sell_count,harga,total_harga,stok,rating');
		$this->db->from('barang');
		$this->db->join('barang_kategori','barang.id_barang = barang_kategori.id_barang');
		$this->db->join('kategori','barang_kategori.id_kategori = kategori.id_kategori');
		$this->db->where('barang_kategori.id_kategori',$id_kat);
		$query = $this->db->get();
		return $query->result();
	}
	/*==========INPUT KATEGORI=========*/
	function insertKategori(){
		$data['nama'] = $this->input->post('nama');
		$data['parent_id'] = $this->input->post('parent');
		$data['deskripsi'] = $this->input->post('deskripsi');
		$format = 'DATE_W3C';
		$time = time();
		$now = standard_date($format, $time);
		$data['created_date'] = $now;
		$data['updated_date'] = $now;
		$this->db->insert('kategori',$data);
	}

	/*==========INPUT BARANG===========*/

	private function getLastId(){
		$query = $this->db->query('SELECT LAST(id_barang) FROM barang ORDER BY id_barang ASC');
		return $query->result();
	}

	function insertBarang(){
		$this->load->helper('string');
		$data['id_barang'] = increment_string($this->getLastId());
		$data['nama']	= $this->input->post('namaBarang');
		$data['stok']		= $this->input->post('stok');
		$data['diskon']		= $this->input->post('diskon');
		$data['publish'] = 1;
		$diskon = $data['diskon'];
		$data['harga']= str_replace('.','',$this->input->post('hargaBarang'));
		$harga = $data['harga'];
		if ($diskon > 0) {
			$data['total_harga'] = $harga-$diskon*$harga/100;
		}else{
			$data['total_harga'] = $harga;
		}
		$data['deskripsi']	= $this->input->post('deskripsi');
		$format = 'DATE_W3C';
		$time = time();
		$now = standard_date($format, $time);
		$data['created_date'] = $now;
		$data['updated_date'] = $now; 

		$this->db->insert('barang',$data);

		/* Untuk mengambil ID Barang yang barusan diinput*/
		$this->db->select('id_barang');
		$this->db->from('barang');
		$this->db->where(array('nama'=> $data['nama'],'created_date'=>$now));
		$query = $this->db->get();
		foreach ($query->result() as $q) {
			$data2['id_barang'] = $q->id_barang;
		}
		
		/* Untuk memasukkan kategori dari barang */
		$kategori	= $this->input->post('kategori');
		foreach ($kategori as $kat) {
			$data2['id_kategori'] = $kat;
			$this->db->insert('barang_kategori',$data2);
		}
		return $data2['id_barang'];

	}

	function insertImages($id_barang,$imageData,$i){
		$data['id_barang'] = $id_barang;
		$data['nama'] = $imageData['raw_name'].$imageData['file_ext'];
		$data['thumbnail'] = $imageData['raw_name'].'_thumb'.$imageData['file_ext'];
		$format = 'DATE_W3C';
		$time = time();
		$now = standard_date($format, $time);
		$data['created_date'] = $now;
		$data['updated_date'] = $now;
		if($i==1){
			$data['primary'] = 1;
		}else{
			$data['primary'] = 0;
		}
		$this->db->insert('gambar',$data);
	}
}