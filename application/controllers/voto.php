<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Voto extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('voto_model');
}
public function vista()
	{
		//$listarvotos=$this->voto_model->listarvotos();
		//$data['votos']=$listarvotos;
		$this->load->view('inc/header_view');
		//$this->load->view('votolista_view',$data);
		$this->load->view('votolista_view');
		$this->load->view('inc/foot_view');
	}
	public function vistavotada()
	{
		$this->load->view('inc/header_view');
		$this->load->view('votado_view');
		$this->load->view('inc/foot_view');
	}
public function index2()
{
	$this->load->view('login_view');
}
public function index()
{
	$this->vista();
}
function check_default($post_string)
{
  return $post_string == '0' ? FALSE : TRUE;
}

public function agregarbd()
{
		$data['voto']=$_POST['voto'];
 	$data['departamento']=$_POST['departamento'];
	$data['ip']=$this->input->ip_address();
 	//$data['f_update']=' NOW()';
	$this->voto_model->agregarvoto($data);
	$this->vistavotada();
}

public function validar()
{
	$usuario=$_POST['email'];
	$password=$_POST['password'];
	$data['infousuario']=$this->voto_model->validar($email,$password);
		redirect('voto/index','refresh');
}



public function agregarbd_ajax()
{
	$data['voto']=$this->input->post('voto');
 	$data['departamento']=$this->input->post('departamento');
	
	$id_voto = $this->voto_model->agregarvotorecuperarid($data);
	echo json_encode($id_voto); 
}
}