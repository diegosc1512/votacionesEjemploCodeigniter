<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Voto_model extends CI_Model 
{
	public function listarvotos2()
	{
		$this->db->select('*');
		$this->db->from('voto');
		$this->db->where("estado = 1 OR estado = 2");
		return $this->db->get();
	}
		public function listarvotos()
	{
		$this->db->select('*');
		$this->db->from('voto');
		$this->db->where("estado = 1 OR estado = 2");
		return $this->db->get();
	}
	public function recuperarvoto($idvoto)
	{
		$this->db->select('*');
		$this->db->from('voto');
		$this->db->where('id_voto',$idvoto);
		return $this->db->get();
	}
		public function modificarcurso($idcurso,$data)
	{
		$this->db->where('idcurso',$idcurso);
		$this->db->update('curso',$data);
	}
	
	public function validar($usuario,$password)
	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where("estado = 1 AND email= @usuario AND password=@password");

		return $this->db->get();
	}

	public function agregarvoto($data)
	{
		$this->db->insert('voto',$data);
	}
	
	public function agregarvotorecuperarid($data)//para ajax
	{
		$this->db->insert('voto',$data);
	 	return $this->db->insert_id();
	}
	
	public function eliminarvoto($idcurso)
	{
			$this->db->where('id_voto',$idcurso);
		$this->db->delete('voto');
	}
	public function eliminarlogicovoto($idvoto,$data)
	{
		$this->db->where('id_voto',$idvoto);
		$this->db->update('voto',$data);
	}
}
