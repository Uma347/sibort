<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$data['nombresistema'] = "Sistema Boliviano de Reglamentación Técnica";
		$data['lsistema'] = "El Sistema Boliviano de Reglamentación Técnica o (SIBORT) es una herramienta que facilita la búsqueda de reglamentación técnica y descarga de documentos vigentes para su posterior revisión y consulta. <br>Este sitio tambien proporcina informacion útil sobre conceptos y enlaces relacionados a esta temática <br>Este sitio web es administrado por el Viceministerio de Producción a Pequeña y Gran Escala. <br> Crea una cuenta para poder comentar comnetar y descargar los proyectos de reglamentación técnica";
		$data['lmarcolegal'] ="A continucaion se detalla el marco legal para la publicación de reglamentos técnicos del Estado Plurinacional de Bolivia";
		$data["nrodocNormas"]=3;
		$data["docsmarcolegal"] = array(array('img'=>"can.png", "name"=>"Decision 582 de la Conunidad Andina de Naciones","ubicacion"=>"DEC582.pdf"),array('img'=>"reglamento.png", "name"=>"Reglamento de Publicacion de Reglamentos Técnicos","ubicacion"=>"gato.pdf"),array('img'=>"manual.jpg", "name"=>"Manual de operaciones del Sistema Web de Reglamentacion Técnica","ubicacion"=>"gato.pdf"));
		
		$data["enlaces"] = array(array('img'=>"eping.png", "name"=>"ePing","ubicacion"=>"https://epingalert.org/"),array('img'=>"sirt.jpg", "name"=>"SIRT","ubicacion"=>"http://extranet.comunidadandina.org/sirt/public/index.aspx"),array('img'=>"aladi.jpg", "name"=>"ALADI","ubicacion"=>"https://www.aladi.org/sitioaladi/"),array('img'=>"min.png", "name"=>"MyDPEP","ubicacion"=>"https://produccion.gob.bo/"));
		$data["nroEnlaces"]=count($data["enlaces"]);
		
		//enviar enlaces
		$this->load->view('inicio',$data);
	}
	public function glosario()
	{
		$this->load->view('glosario');
	}
	public function pregfrec()
	{
		$this->load->view('pregfrec');
	}
	public function rtecnicos()
	{
		$this->load->view('rtecnicos');
	}
	public function registrarse()
	{
		$this->load->view('reg');
	}
}
