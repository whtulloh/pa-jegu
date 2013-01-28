<?php

class Barang extends Coco_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('barang_model');
		$this->load->helper('form','url');
		$this->load->library('form_validation');
	}

	public function index(){
    $this->title= "List Barang";
    $data['listBarang'] = $this->barang_model->getAll();
    $this->_renderMimin('mimin/_barang',$data);
	}

  public function bycategory(){
    $this->title= "List Barang Berdasarkan Kategori";
    $data['listKat'] = $this->barang_model->getChildKat();
    foreach ($data['listKat'] as $kat) {
      $data['listByKat'][$kat->id_kategori] = $this->barang_model->getByKat($kat->id_kategori);  
    }
    $this->_renderMimin('mimin/_barangByKategori',$data);
  }

	public function insert(){
    $this->load->helper('error');
		$this->title= "Insert Barang Baru";
		$this->javascript = array('maskmoney/jquery.maskMoney.js','mimin/custom.js');
		//$this->javatext = array('mimin/_maskMoney');
    $data['errorImage'] = "<span class='help-inline'>Bisa Upload lebih dari satu.</span>";
    $data['errorNama'] = NULL;
    $data['errorKat'] = NULL;
    $data['errorStok'] = NULL;
    $data['errorHarga'] = NULL;
    $data['errorDiskon'] = NULL;
    $data['errorDeskripsi'] = NULL;
    $data['kategori'] = $this->barang_model->getChildKat();
		if($this->input->post('submit')){
          $this->form_validation->set_rules('namaBarang', 'Nama Barang', 'required');
          $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        	$this->form_validation->set_rules('hargaBarang', 'Harga Barang', 'number|required');
          $this->form_validation->set_rules('diskon', 'Diskon', 'number');
          $this->form_validation->set_rules('stok', 'Stok', 'number|required');
        	$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        	if($this->form_validation->run() == FALSE){
        		$data['errorImage'] = "<div class='help-inline error'> Input kembali gambar.</div>";
            $data['errorNama'] = form_error('namaBarang', '<div class="help-inline error">', '</div>');
            $data['errorKat'] = "<div class='help-inline error' style='margin-top:-25px'>Input kembali kategori.</div>";
            $data['errorStok'] = form_error('stok', '<div class="help-inline error">', '</div>');
            $data['errorHarga'] = form_error('hargaBarang', '<div class="help-inline error">', '</div>');
            $data['errorDiskon'] = form_error('diskon', '<div class="help-inline error">', '</div>');
            $data['errorDeskripsi'] = form_error('deskripsi', '<div class="help-inline error">', '</div>');
        	}else{    
            $id_barang = $this->barang_model->insertBarang();
            $this->do_upload($id_barang);
        		redirect('mimin/barang');
        	}
		}else{

		}
    $this->_renderMimin('/mimin/_insertBarang2',$data);
		
	}

  public function kategori(){
    $this->title="List Kategori";
    $data['kategori'] = $this->barang_model->getKat();
    $this->_renderMimin('/mimin/_kategori',$data);

  }

  public function insertkategori(){
    $this->load->helper('error');
    $this->title="Insert Kategori Baru";
    $data['kategori'] = $this->barang_model->getParentKat();
    $data['errorNama'] = NULL;
    $data['errorParent'] = NULL;
    $data['errorDeskripsi'] = NULL;
    if($this->input->post('submit')){
          $this->form_validation->set_rules('nama', 'Nama Kategori', 'required');
          $this->form_validation->set_rules('parent', 'Parent', 'required');
          $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

          if($this->form_validation->run() == FALSE){
            $data['errorNama'] = form_error('nama', '<div class="help-inline error">', '</div>');
            $data['errorParent'] = form_error('parent', '<div class="help-inline error">', '</div>');
            $data['errorDeskripsi'] = form_error('deskripsi', '<div class="help-inline error">', '</div>');
          }else{    
            $id_barang = $this->barang_model->insertKategori();
            redirect('mimin/barang/kategori');
          }
    }else{

    }
    $this->_renderMimin('/mimin/_insertKategori',$data);
  }


    function upload_index(){
        $this->_renderMimin('mimin/_inputImages', array('error' => ' ' ));
    }

    function do_upload($id_barang){
      $config['upload_path'] = './asset/img/barang/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
      $config['file_name'] = $id_barang;
      $config['max_size']  = '5000';
      $config['max_width']  = '1024';
      $config['max_height']  = '1024';
      $config['overwrite']   = FALSE;
      $this->load->library('upload', $config);
 
      // modifikasi disini
      // looping $_FILES dan buat array baru
      foreach($_FILES['userfile'] as $key=>$val)
      {
         $i = 1;
         foreach($val as $v)
         {
            $field_name = "file_".$i;
            $_FILES[$field_name][$key] = $v;
            $i++;
         }
      }
      // hapus array awal, karena kita sudah memiliki array baru
      unset($_FILES['userfile']);
 
      // variabel error diubah, dari string menjadi array
      $error = array();
      $success = array();
      $i=1;
      foreach($_FILES as $field_name => $file)
      {
         if ( ! $this->upload->do_upload($field_name))
         {
            $data['error'] = $this->upload->display_errors();
         }
         else
         {
            $imageData = $this->upload->data();
            $fileName = $imageData['file_name'];
            $this->_createThumbnails($fileName);
            $this->barang_model->insertImages($id_barang,$imageData,$i);
            $i++;
         }
      }
      
    }

    /* Resize gambar jadi lebih kecil untuk di load di galery */
    private function _createThumbnails($fileName){
        $config['image_library'] = 'GD2';
        $config['source_image'] = './asset/img/barang/'.$fileName;
        $config['new_image'] = './asset/img/barang/thumbnails/';
        $config['thumb_maker'] = '_thumb';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 210;
        $config['height'] = 160;

        $this->load->library('image_lib', $config);
        if (!$this->image_lib->resize()) {
            echo "error ".$fileName;
            echo $this->image_lib->display_errors();
        }
        // clear //
        $this->image_lib->clear();
    }

    public function nextstep($id_barang){
        $this->title= "Insert Barang Baru | Coco Bean Bags";
        $this->css = array('bootstrap-image-gallery.min.css','query.fileupload-ui.css','jquery.fileupload-ui-noscript.css');
        $this->javascript = array('jquery.ui.1.8.16.min.js','jquery.ui.widget.js','tmpl.js','load-image.js','canvas-to-blob.min.js','bootstrap-image-gallery.min.js','jquery.iframe-transport.js','jquery.fileupload.js','jquery.fileupload-ip.js','jquery.fileupload-ui.js','locale.js','main-local.js');
        $data['error'] = "";
        $data['id_barang'] = $id_barang;
        $this->load->view('mimin/_uploadImages');
    }

	public function upload(){
		$this->load->helper("upload.class");
        $this->load->model('barang_model');
        $upload_handler = new UploadHandler();

        header('Pragma: no-cache');
        header('Cache-Control: no-store, no-cache, must-revalidate');
        header('Content-Disposition: inline; filename="files.json"');
        header('X-Content-Type-Options: nosniff');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: OPTIONS, HEAD, GET, POST, PUT, DELETE');
        header('Access-Control-Allow-Headers: X-File-Name, X-File-Type, X-File-Size');

        switch ($_SERVER['REQUEST_METHOD']) {
            case 'OPTIONS':
                break;
            case 'HEAD':
            case 'GET':
                $upload_handler->get();
                break;
            case 'POST':
                if (isset($_REQUEST['_method']) && $_REQUEST['_method'] === 'DELETE') {
                    $upload_handler->delete();
                } else {
                    $upload_handler->post();
                }
                break;
            case 'DELETE':
                $upload_handler->delete();
                break;
            default:
                header('HTTP/1.1 405 Method Not Allowed');
        }
	}

	public function save(){
		
	}

	public function prosesInsert(){
		
	}

	public function prosesUpdate(){
		
	}


}