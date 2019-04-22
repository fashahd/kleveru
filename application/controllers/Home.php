<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function index()
	{
		$this->load->view('index');	
	}
	function contact()
	{
		$this->load->view('contact');	
	}
	function blog()
	{
		$this->load->view('blog');	
	}
	function cart()
	{
		$this->load->view('cart');	
	}
	function product()
	{
		$this->load->view('product');	
	}
	function blogd()
	{
		$this->load->view('blogd');	
	}
	function productd()
	{
		$this->load->view('productd');	
	}
	function about()
	{
		$this->load->view('about');	
	}

    
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */