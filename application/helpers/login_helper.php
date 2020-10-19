<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');
function cek_login() 
{ 
	$ci = get_instance(); 
	if (!$ci->session->userdata('id')) 
	{ 
		$ci->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akses ditolak. Anda belum login!! </div>'); 
		if ($ci->session->userdata('id') == true) 
		{ 
			redirect('admin/home'); 
		} 
		else 
		{ 
			redirect('admin/autentifikasi'); 
		} 
	} else 
	{   
		$id = $ci->session->userdata('id'); 
	} 
}

function activate_menu($menu)
{
	$CI =& get_instance();
	$classname = $CI->router->fetch_class();
	return $classname == $menu ?'active':'';
}


// function cek_user() 
// { 
// 	$ci = get_instance(); 
// 	$role_id = $ci->session->userdata('role_id'); 
// 	if ($role_id != 1) 
// 	{ 
// 		$ci->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akses tidak diizinkan </div>'); redirect('autentifikasi'); 
// 	} 
// }