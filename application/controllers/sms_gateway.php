<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sms_Gateway extends CI_Controller {

	

	public function index()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			
			$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_data');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			
			$d['tot'] = $offset;
			$tot_hal = $this->db->get("tbl_data_pegawai");
			$config['base_url'] = base_url() . 'sms_gateway/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			
			$d['status_pegawai'] = $this->db->get("tbl_data_pegawai",$limit,$offset);
			
			$this->load->view('dashboard_admin/sms_gateway/home',$d);
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	

	public function tambah()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['no_telepon'] = "";
			$d['text_sms'] = ""; 
			$d['st'] = "tambah";
			$this->load->view('dashboard_admin/sms_gateway/input',$d);
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function kirim()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$data=array(
			'no_tujuan'=>$this->input->post('no_telepon'),
			'Coding'=>'Default_No_Compression',
			'isi_sms'=>$this->input->post('text_sms'),
			'CreatorID'=>'1');
			exec('c:\xampp\htdocs\pegawai\gammu\bin\gammu-smsd-inject.exe -c c:\xampp\htdocs\pegawai\gammu\bin\smsdrc EMS '.$data['no_tujuan'].' -text "'.$data['isi_sms'].'"');
		{
			header('location:'.base_url().'');
		}
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	
}

/* End of file master_satuan_kerja.php */
/* Location: ./application/controllers/master_satuan_kerja.php */ 