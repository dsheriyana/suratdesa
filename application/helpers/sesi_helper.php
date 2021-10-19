<?php 

function is_logged_in()
{
    $ci = get_instance();
    $ci->session->userdata('nik');
    $ci->session->userdata('kk');
}