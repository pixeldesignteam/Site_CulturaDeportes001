<?php

	$this->load->view('plantilla/header');
	$this->load->view('plantilla/nav');

	$this->load->view($content);
	$this->load->view('alumnos');
	$this->load->view('profesores');
	$this->load->view('horarios');
	$this->load->view('talleres');
	$this->load->view('plantilla/footer');
