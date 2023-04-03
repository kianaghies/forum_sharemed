<?php
    if ($this->session->userdata('logged_in') != true) {
        redirect('login');
    } else {
        $this->load->view('home');
    }
?>