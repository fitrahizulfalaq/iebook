<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		check_not_login();
	}

	public function index()
	{
		redirect("dashboard");
	}

	public function pendahuluan()
	{
		$data['menu'] = "المقدمة";
		$this->templateadmin->load('template/detail','page/pendahuluan',$data);
	}

	public function petunjuk()
	{
		$data['menu'] = "دليل استخدام الكتاب";
		$this->templateadmin->load('template/detail','page/petunjuk',$data);
	}

	public function pengembang()
	{
		$data['menu'] = "دليل استخدام الكتاب";
		$this->templateadmin->load('template/detail','page/pengembang',$data);
	}

	public function materi($url = null)
	{
		$url = $this->uri->segment("3");
		if (!isset($url)) {
			$data['menu'] = "المحتويات";
			$this->templateadmin->load('template/dashboard','page/materi/list',$data);
		} else {
			$data['menu'] = "المحتويات";
			$this->templateadmin->load('template/detail','page/materi/'.$url,$data);
		}
	}

	public function video($url = null)
	{
		$url = $this->uri->segment("3");
		if (!isset($url)) {
			$data['menu'] = "الفيديوهات";
			$data['link'] = include(FCPATH . 'settings/linkVideo.php');
			$this->templateadmin->load('template/dashboard','page/video/list',$data);
		} else {
			$data['link'] = include(FCPATH . 'settings/linkVideo.php');
			$data['menu'] = "الفيديوهات";
			$this->templateadmin->load('template/detail','page/video/'.$url,$data);
		}
	}
	
	public function playVideo()
	{
		$url = $this->uri->segment("3");
		$data['menu'] = "الفيديوهات";
		$data['link'] = include(FCPATH . 'settings/linkVideo.php');
		$this->templateadmin->load('template/detail','page/video/playvideo',$data);
	}
	
	public function profil()
	{
		$data['menu'] = "Profil";
		$this->templateadmin->load('template/detail','page/profil',$data);
	}

	public function latihan($url = null)
	{
		$url = $this->uri->segment("3");
		$link = include(FCPATH . 'settings/linkLatihan.php');
		if (!isset($url)) {
			$data['menu'] = "التدريبات";
			$this->templateadmin->load('template/dashboard','page/latihan/list',$data);
		} else {
			$data['menu'] = $link["judul-".substr($this->uri->segment("3"),"0","1")];
			$this->templateadmin->load('template/detail','page/latihan/isi',$data);
		}
	}

	public function openLatihan()
	{
		$url = $this->uri->segment("3");
		$data['menu'] = "التدريبات";
		$data['link'] = include(FCPATH . 'settings/linkLatihan.php');
		$this->templateadmin->load('template/detail','page/latihan/openLatihan',$data);
	}

	public function pembuat()
	{
		$data['menu'] = "Profil Pengembang";
		$this->templateadmin->load('template/detail','page/pembuat',$data);
	}


	public function menu($id = null)
	{
		$data['menu'] = "Halaman Statis";
		$id = $this->uri->segment("3");
		$this->templateadmin->load('template/dashboard', 'page/menu/'.$id, $data);
	}
}


