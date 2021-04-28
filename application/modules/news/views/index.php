<?php
$this->load->view('template/v_header');
$this->load->view('dashboard/template/v_sidebar');

$this->load->view($view);

$this->load->view('template/v_footer');
