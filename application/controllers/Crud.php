<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	function __construct() {
        parent::__construct(); 
        $this->load->model('M_crud'); 
    }
    public function dashboard(){
    	$this->load->view('adminBaru/headerBaru');
    	$this->load->view('adminBaru/bodyBaru');
    }
    public function readData(){
		$data = $this->M_crud->readData();
		$dataTampil = array('dataProduk'=> $data); //dataTampil adalah variabel yg berisi array $data dari db yang kemudian $data dinamakan dataProduk untuk dibawa dlm bentuk array ke view
		//$this->load->view('readProduk', $dataTampil);
		$this->load->view('adminBaru/headerBaru');
		$this->load->view('adminBaru/bodyReadData', $dataTampil);
	}

	public function readDataStyle(){
		$data = $this->M_crud->readDataStyle();
		$dataTampil = array('dataStyle'=> $data); //dataTampil adalah variabel yg berisi array $data dari db yang kemudian $data dinamakan dataProduk untuk dibawa dlm bentuk array ke view
		//$this->load->view('readProduk', $dataTampil);
		$this->load->view('adminBaru/headerBaru');
		$this->load->view('adminBaru/bodyReadData2', $dataTampil);	
	}

	public function viewAddData(){
		$this->load->view('adminBaru/headerBaru');
		$this->load->view('adminBaru/bodyAddData');
	}

	public function viewAddDataStyle(){
		$this->load->view('adminBaru/headerBaru');
		$this->load->view('adminBaru/bodyAddDataStyle');
	}

	public function addData(){		
		$target_dir 	= "upload/";
		$target_file 	= $target_dir . basename($_FILES['upload']['name']);
		$imageFileType 	= pathinfo($target_file, PATHINFO_EXTENSION);
		$image 			= basename($_FILES['upload']['name']);
		
		$data = array(
			'namaProduk' => $this->input->post('namaProduk'),
			'hargaProduk' => $this->input->post('hargaProduk'),
			'deskripsi' => $this->input->post('deskripsi'),
			'upload' => $image
			);
		$this->M_crud->tambahData($data);
		$this->viewAddData();
	}

	public function addUploadStyle(){
		    $config['upload_path']          = './uploadGaya/';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->load->library('upload', $config);
            //$config['max_size']             = 100;
            //$config['max_width']            = 1024;
            //$config['max_height']           = 768;            
            if (!$this->upload->do_upload('uploadStyle'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                    //$this->load->view('upload_form', $error);
                }
            else
                {
                    //$this->load->view('upload_success', $data);
                    //echo "berhasil";
                    $data = $this->upload->data();
                    $fileName = $data['file_name'];
                    $dataStyle = array(
						'deskripsi' => $this->input->post('deskripsi'),
						'price' 	=> $this->input->post('price'),
						'price2' 	=> $this->input->post('price2'),
						'foto' 		=> $fileName
						);
					$this->M_crud->tambahDataStyle($dataStyle);
					$this->viewAddDataStyle();                    
                }
	}

	/* public function addDataStyle(){		
		$target_dir 	= "uploadGaya/";
		$target_file 	= $target_dir . basename($_FILES['foto']['name']);
		$imageFileType 	= pathinfo($target_file, PATHINFO_EXTENSION);
		$image 			= basename($_FILES['foto']['name']);
		
		$dataStyle = array(
			'deskripsi' => $this->input->post('deskripsi'),
			'price' 	=> $this->input->post('price'),
			'price2' 	=> $this->input->post('price2'),
			//'foto' 		=> $image
			);
		$this->M_crud->tambahDataStyle($dataStyle);
		$this->viewAddDataStyle();
	} */

	public function getProduk($id){
		$barang = $this->M_crud->GetBarang("where id = '$id'");
		$data = array(
			"id"			=> $barang[0]['id'],	
			"namaProduk" 	=> $barang[0]['namaProduk'],
			"hargaProduk" 	=> $barang[0]['hargaProduk'],
			"deskripsi"	 	=> $barang[0]['deskripsi'],
			"upload" 		=> $barang[0]['upload'],
			
		);
		$this->load->view('adminBaru/headerBaru');
		$this->load->view('adminBaru/bodyEditData',$data);
		//echo "<prev>";
		//print_r($data);
		//echo "</prev>";
	}

	public function getProdukStyle($id){
		$barang = $this->M_crud->GetStyle("where id = '$id'");
		$data = array(
			"id"			=> $barang[0]['id'],	
			"deskripsi" 	=> $barang[0]['deskripsi'],
			"foto" 			=> $barang[0]['foto'],
			"price"	 		=> $barang[0]['price'],
			"price2" 		=> $barang[0]['price2'],
			
		);
		$this->load->view('adminBaru/headerBaru');
		$this->load->view('adminBaru/bodyEditDataStyle',$data);
		echo "<prev>";
		//print_r($data);
		echo "</prev>";
	}

	public function update(){
		$config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
		if(isset($_FILES['upload']) && $_FILES['upload']['size'] > 0){
        	if (!$this->upload->do_upload('upload')){
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                    //$this->load->view('upload_form', $error);
            }
        	else{
                //$this->load->view('upload_success', $data);
                //echo "berhasil";
                $data = $this->upload->data();
                $image = $data['file_name'];
                $id 			= $_POST['id'];
				$namaProduk		= $_POST['namaProduk'];
				$hargaProduk 	= $_POST['hargaProduk'];
				$deskripsi 		= $_POST['deskripsi'];
				$upload 		= $image;
				
				$data_insert 	= array(
					'namaProduk' 	=> $namaProduk,
					'hargaProduk' 	=> $hargaProduk,
					'deskripsi'	 	=> $deskripsi,
					'upload' 		=> $upload,
				);
				$where = array('id' => $id);
				$res = $this->M_crud->Update_Data('produk',$data_insert,$where);
				if($res>=1){
					//print_r($res)
					redirect('index.php/Crud/readData');
				}
			}
		}
        else{
        		$data = $this->upload->data();
                $id 			= $_POST['id'];
				$namaProduk		= $_POST['namaProduk'];
				$hargaProduk 	= $_POST['hargaProduk'];
				$deskripsi 		= $_POST['deskripsi'];
				
				$data_insert 	= array(
					'namaProduk' 	=> $namaProduk,
					'hargaProduk' 	=> $hargaProduk,
					'deskripsi'	 	=> $deskripsi,
				);
				$where = array('id' => $id);
				$res = $this->M_crud->Update_Data('produk',$data_insert,$where);
				if($res>=1){
					//print_r($res)
					redirect('index.php/Crud/readData');
				}
        }
    }

	public function updateStyle(){
		$config['upload_path']          = './uploadGaya/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
            //$config['max_size']             = 100;
            //$config['max_width']            = 1024;
            //$config['max_height']           = 768;
        if(isset($_FILES['uploadStyle']) && $_FILES['uploadStyle']['size'] > 0){
        	if (!$this->upload->do_upload('uploadStyle')){
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                    //$this->load->view('upload_form', $error);
            }
        	else{
                //$this->load->view('upload_success', $data);
                //echo "berhasil";
                $data = $this->upload->data();
                $fileName 		= $data['file_name'];
               	$id 			= $_POST['id'];
				$deskripsi		= $_POST['deskripsi'];
				$price 			= $_POST['price'];
				$price2 		= $_POST['price2'];
				$foto 			= $fileName;
		
				$data_insert 	= array(
					'deskripsi' 	=> $deskripsi,
					'price' 		=> $price,
					'price2'	 	=> $price2,
					'foto' 			=> $fileName,
				);
				$where = array('id' => $id);
				$res = $this->M_crud->Update_DataStyle('gayarambut',$data_insert,$where);
				if($res>=1){
					//print_r($res)
					redirect('index.php/Crud/readDataStyle');
				}                   
		            }

        }
        else{
        	$data = $this->upload->data();
                $fileName 		= $data['file_name'];
               	$id 			= $_POST['id'];
				$deskripsi		= $_POST['deskripsi'];
				$price 			= $_POST['price'];
				$price2 		= $_POST['price2'];
						
				$data_insert 	= array(
					'deskripsi' 	=> $deskripsi,
					'price' 		=> $price,
					'price2'	 	=> $price2,					
				);
				$where = array('id' => $id);
				$res = $this->M_crud->Update_DataStyle('gayarambut',$data_insert,$where);
				if($res>=1){
					//print_r($res)
					redirect('index.php/Crud/readDataStyle');
				}                   
		            }				
	}

	public function delete($id){
		$where = array('id'=>$id);
		$res = $this->M_crud->Delete_data('produk',$where);
		if($res<1){
			redirect('index.php/Crud/readData');
		}
		else{
			echo "Gagal Delete";
		}
	}

	public function deleteStyle($id){
		$where = array('id'=>$id);
		$res = $this->M_crud->Delete_data('gayarambut',$where);
		if($res<1){
			redirect('index.php/Crud/readDataStyle');
		}
		else{
			echo "Gagal Delete";
		}
	}



}
	