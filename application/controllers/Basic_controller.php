<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('crud_model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('clg_info');
	}

	public function login_form()
	{
		$this->load->view('login_form');

	}

	public function login_form_sub()
	{
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$data_values = array("email" =>$email,"password" =>$password);
		$data['login_data'] = $this->crud_model->select_query_new('user_login',$data_values);
		// echo implode(',', $data_values);die();
		// echo $email;
		// echo $password;
		// echo $this->db->last_query();die();
		// echo count($data['login_data']);
		if(!empty($data['login_data']) && count($data['login_data']) == 1)
		{
			// print_r($data['login_data']);
			// echo $data['login_data'][0]->student_id;
			// echo $data['login_data'][0]->name;

			$session_data = array("student_id" => $data['login_data'][0]->student_id,"name" => $data['login_data'][0]->name);
			$this->session->set_userdata($session_data);
			// print_r($this->session->userdata());
			// echo $this->db->last_query();die();
			// echo $session_data;die();
			redirect(base_url("stud_info"));
		}
		else
		{
			echo"Record Not Match please check email id and password";
		}

	}

	public function signup_form()
	{
		$this->load->view('signup_form');		
	}

	public function signup_form_sub()
	{
		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$phone_no = $this->input->post("phno");
		$password = $this->input->post("password");
		$data = array("name" =>$name,"email" =>$email,"phone_no" =>$phone_no,"password" =>$password);
		$this->crud_model->insert('user_login',$data);
		redirect(base_url("login_form"));

	}

	public function admin_login()
	{
		$this->load->view('signup_form');
	}

	public function stud_info()
	{
		$student_id =  $this->session->userdata("student_id");
			$data['subjects'] =  $this->crud_model->selecttable('subject_info');
			// print_r($data['subjects']);
			// die();
				$data_values = array("student_id" =>$student_id);
				$data['login_data'] = $this->crud_model->select_query_new('user_login',$data_values);
		if (isset($student_id)) {
			$this->load->view('stud_details',$data);	
		} else {
			redirect(base_url('login_form'));
		}
	}

	public function stud_info_sub()
	{
		$name = $this->input->post("name");
		$gender = $this->input->post("gender");
		$dob = $this->input->post("dob");
		$age = $this->input->post("age");
		$phone_no = $this->input->post("phone_no");
		$email = $this->input->post("email");
		$category = $this->input->post("category");
		$residence = $this->input->post("residence");
		$spe_category=$this->input->post("spe_category");
		$reg_no=$this->input->post("reg_no");
		$lang1=$this->input->post("lang1");
		$lang1_mark=$this->input->post("lang1_mark");
		$lang2=$this->input->post("lang2");
		$lang2_mark=$this->input->post("lang2_mark");
		$subject1=$this->input->post("subject1");
		$subject1_mark=$this->input->post("subject1_mark");
		$subject2=$this->input->post("subject2");
		$subject2_mark=$this->input->post("subject2_mark");
		$subject3=$this->input->post("subject3");
		$subject3_mark=$this->input->post("subject3_mark");
		$subject4=$this->input->post("subject4");
		$subject4_mark=$this->input->post("subject4_mark");
		$total=$this->input->post("total");
		$average=$this->input->post("average");
		$data = array("name"=>$name,"gender" =>$gender,"dob" =>$dob,"age" =>$age,"phone_no"=>$phone_no,"email" =>$email,"category" =>$category,"residence"=>$residence,"spe_category"=>$spe_category,"reg_no"=>$reg_no,"lang1"=>$lang1,"lang1_mark"=>$lang1_mark,"lang2"=>$lang2,"lang2_mark"=>$lang2_mark,"subject1"=>$subject1,"subject1_mark"=>$subject1_mark,"subject2"=>$subject2,"subject2_mark"=>$subject2_mark,"subject3"=>$subject3,"subject3_mark"=>$subject3_mark,"subject4"=>$subject4,"subject4_mark"=>$subject4_mark,"total"=>$total,"average"=>$average);
		$this->crud_model->insert('stud_info',$data);
		echo $total;die();
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login_form'));
	}

	public function clg_info()
	{
		$this->load->view('clg_info');
	}





 

























	public function registration()
	{
		// $this->load->view('user/test_page');
		$this->load->view('registration');
	}


	public function registration_sub()
	{
		$Name = $this->input->post("name");
		$email = $this->input->post("email");
		$Password = $this->input->post("password");
		$Phone_no = $this->input->post("phone_no");
		$data['email_exist'] = $this->crud_model->selectquery('user_login',"email",$email);
		// echo count($data['email_exist']);die();
		if(count($data['email_exist']) > 0)
		{
			echo"Email id already exist";
		}
		else
		{
			$datavalues = array("Name" => $Name,"email" => $email,"Password" => $Password,"Phone_no" => $Phone_no);
			$this->crud_model->insert('user_login',$datavalues);
			redirect(base_url("login"));
		}
	}


	public function sample_string()
	{
		// $this->load->view('user/test_page');
		$this->load->view('my_page');
	}




	
}
