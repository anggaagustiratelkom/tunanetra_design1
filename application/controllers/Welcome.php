<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('body/dashboard');
		$this->load->view('footer');
	}

	public function materi_pembelajaran()
	{
		$this->load->view('header');
		$this->load->view('body/materi_pembelajaran');
		$this->load->view('footer');
	}

	public function cara_mengenali_hoaks()
	{
		$this->load->view('header');
		$this->load->view('body/cara_mengenali_hoaks');
		$this->load->view('footer');
	}

	public function identifikasi_judul()
	{
		$this->load->view('header');
		$this->load->view('body/identifikasi_judul');
		$this->load->view('footer');
	}

	public function identifikasi_situs_berita()
	{
		$this->load->view('header');
		$this->load->view('body/identifikasi_situs_berita');
		$this->load->view('footer');
	}

	public function identifikasi_konten()
	{
		$this->load->view('header');
		$this->load->view('body/identifikasi_konten');
		$this->load->view('footer');
	}

	public function identifikasi_sumber_berita()
	{
		$this->load->view('header');
		$this->load->view('body/identifikasi_sumber_berita');
		$this->load->view('footer');
	}

	public function laporan_hoax()
	{
		$this->load->view('header');
		$this->load->view('body/laporan_hoax');
		$this->load->view('footer');
	}

	public function status_laporan()
	{
		$this->load->view('header');
		$this->load->view('body/status_laporan');
		$this->load->view('footer');
	}

}
