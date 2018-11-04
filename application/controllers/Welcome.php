<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public $viewFolder = "";
	public function __construct(){
		parent::__construct();
		$this->viewFolder = "homepage";
		$this->load->model("testimonial_model");
		$this->load->model("service_model");
		$this->load->model("slide_model");
		$this->load->model("news_model");
		$this->load->helper("text");
	}
	public function index(){
		$viewData = new stdClass();
		$viewData->services = $this->service_model->get_all(
			array(
				"isActive" => 1
			),"rank ASC", array("start" => 0, "count" => 6)
		);
		$viewData->slides = $this->slide_model->get_all(
			array(
				"isActive" => 1
			),"rank ASC",array()
		);
		$viewData->testimonials = $this->testimonial_model->get_all(
			array(
				"isActive" => 1
			),"rank ASC",array()
		);
		$viewData->news = $this->news_model->get_all(
			array(
				"isActive" => 1
			),"rank ASC", array("start" => 0, "count" => 6)
		);
		$viewData->viewFolder = "home_v";
		$viewData->page = "";
		$this->load->view($viewData->viewFolder,$viewData);
	}
	public function about(){
		$viewData = new stdClass();
		$viewData->services = $this->service_model->get_all(
			array(
				"isActive" => 1
			),"rank ASC", array("start" => 0, "count" => 6)
		);
		$viewData->page = "";
		$viewData->viewFolder = "about_v";
		$this->load->view($viewData->viewFolder,$viewData);
	}
	public function mission_vision(){
		$viewData = new stdClass();
		$viewData->services = $this->service_model->get_all(
			array(
				"isActive" => 1
			),"rank ASC", array("start" => 0, "count" => 6)
		);
		$viewData->page = "";
		$viewData->viewFolder = "mission_v";
		$this->load->view($viewData->viewFolder,$viewData);
	}
	public function contact_us(){
		$viewData = new stdClass();
		$viewData->services = $this->service_model->get_all(
			array(
				"isActive" => 1
			),"rank ASC", array("start" => 0, "count" => 6)
		);
		$viewData->page = "";
		$viewData->viewFolder = "contact_v";
		$this->load->view($viewData->viewFolder,$viewData);
	}
	public function services(){
		$viewData = new stdClass();
		$viewData->services = $this->service_model->get_all(
			array(
				"isActive" => 1
			),"rank ASC", array("start" => 0, "count" => 6)
		);
		$viewData->all_services = $this->service_model->get_all(
			array(
				"isActive" => 1
			),"rank ASC", array()
		);
		$viewData->viewFolder = "services_v";
		$viewData->page = "";
		$this->load->view($viewData->viewFolder,$viewData);
	}
	public function serviceDetail($url){
		$viewData = new stdClass();
		$viewData->services = $this->service_model->get_all(
			array(
				"isActive" => 1
			),"rank ASC", array("start" => 0, "count" => 6)
		);
		$viewData->page = $this->service_model->get(
			array(
				"isActive" => 1,
				"url" => $url
			)
		);
		$viewData->viewFolder = "serviceDetail_v";
		$this->load->view($viewData->viewFolder,$viewData);
	}
	public function blogDetail($url){
		$viewData = new stdClass();
		$viewData->services = $this->service_model->get_all(
			array(
				"isActive" => 1
			),"rank ASC", array("start" => 0, "count" => 6)
		);
		$viewData->news = $this->news_model->get(
			array(
				"isActive" => 1,
				"url" => $url
			)
		);
		$viewData->page = "";
		$viewData->viewFolder = "blogDetail_v";
		$this->load->view($viewData->viewFolder,$viewData);
	}
}