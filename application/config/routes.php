<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'dashboard';
$route['maintenance'] = 'Dashboard/servis';
$route['mahasiswa'] = 'Mahasiswa';
$route['profil_mhs'] = 'Mahasiswa/profil';
$route['edit_profil_mhs'] = "Mahasiswa/edit_profil";
$route['ubah_password_mhs'] = "Mahasiswa/ubah_password";
$route['404_override'] = 'Dashboard/service';
$route['translate_uri_dashes'] = FALSE;
$route['kirim_saran'] = "Mahasiswa/saran";
$route['ruangan'] = "Dosen/ruangan";
$route['matkul/(:any)'] = 'mhs_new/Matkul/list_matkul/$1';
// mahasiswa tugas
$route['tugas/(:any)'] = "mhs_new/Tugas/list_tugas/$1";
// dosen
$route['profil_dsn'] = "Dosen/profil";
$route['edit_profil_dsn'] = "Dosen/edit_profil";
$route['ubah_password_dsn'] = "Dosen/ubah_password";
$route['pelatihan_dsn'] = "dsn/Pelatihan_dsn";
$route['dosen_krs'] = "dsn/Dsn_krs";
// auth
$route['login'] = 'Auth';
$route['registrasi'] = 'Auth/registrasi';
$route['registrasi_mhs'] = 'Auth/registrasi_mhs';
$route['registrasi_dsn'] = 'Auth/registrasi_dsn';
$route['logout'] = 'Auth/logout';
$route['ubah_password'] = 'Auth/ubah_password';
// belajar
$route['pemograman'] = "Belajar/pemograman";
// pelatihan
$route['p_web'] = "Mahasiswa/p_web";
// kelas
$route['kelas'] = "Kelas";
// penugasan dosen semester1
$route['penugasan_dsn'] = "dsn/Penugasan_dsn";
$route['dp/(:any)'] = "dsn/Data/table/$1";
$route['t_semester1'] = "tugas/D_semester1/semester1";
$route['data_algo1'] = "tugas/D_semester1/data_algo1";
$route['algoritma1'] = "tugas/D_semester1/t_algoritma";
// penugasan mhs semester 1
$route['detail_materi/(:any)/'] = "mhs/Matkul_mhs/detail_materi/$1";
$route['mks/(:any)'] = "mhs/Matkul_mhs/matkul/$1";
$route['m/(:any)'] = "mhs/Matkul_mhs/materi_mk/$1";
$route['tmk/(:any)'] = "mhs/Penugasan_mhs/semester1/$1";
$route['t/(:any)'] = "mhs/Tugas/tugas_mk/$1";
$route['m_semester1'] = "tugas/M_semester1";
$route['kelas1'] = "tugas/Kelas/semester1";
$route['semester1'] = "tugas/Kelas/semester1";
$route['semester2'] = "tugas/Kelas/semester2";
$route['semester3'] = "tugas/Kelas/semester3";
$route['semester4'] = "tugas/Kelas/semester4";
$route['semester5'] = "tugas/Kelas/semester5";
$route['semester6'] = "tugas/Kelas/semester6";
$route['mhs_edaran'] = "Mahasiswa/edaran";
// $route['komen_telat']="tugas/M_semester1/komen_telat";
// $route['m_algoritma1']="tugas/M_semester1/m_algoritma1";
// $route['m_algoDetail']="tugas/M_semester1/m_algoritma1_detail";
// penugasn mhs semester 2
$route['m_semester2'] = "tugas/M_semester2";
// admin
$route['profil_adm'] = "admin/Admin/profil";
$route['adm_setting'] = "admin/Setting";
$route['edit_profil_adm'] = "admin/Admin/edit_profil";
$route['ubah_password_adm'] = "admin/Admin/ubah_password";
$route['admin'] = "admin/Admin";
$route['A_user'] = "admin/Admin/user";
$route['A_matkul'] = "admin/Matkul_a";
$route['add_dosen'] = "admin/Admin/add_dosen";
$route['add_admin'] = "admin/Admin/add_admin";
$route['adm_tutorial'] = "Belajar/tutorial";
$route['ganti_kampus'] = "admin/Admin/ganti_kampus";
$route['warna_dosen'] = "admin/Setting/warna_dosen";
$route['warna_mahasiswa'] = "admin/Setting/warna_mahasiswa";
$route['ganti_thumbnail'] = "admin/Admin/ganti_thumbnail";
$route['A_pelatihan'] = "pelatihan/Pelatihan/adm_pelatihan";
$route['add_pelatihan'] = "pelatihan/Pelatihan/add_pelatihan";
$route['A_ruangan'] = "admin/Admin/ruangan";
$route['data_mhs'] = "admin/Data_user/data_mhs";
$route['data_dsn'] = "admin/Data_user/data_dsn";
$route['data_adm'] = "admin/Data_user/data_adm";
$route['A_krs'] = "admin/A_krs";
$route['A_surat_edaran'] = "admin/Admin/suratEdaran";

// pelatihan
$route['pelatihan'] = "pelatihan/Pelatihan";
$route['c/(:any)'] = 'pelatihan/Categories/index/$1';
$route['d/(:any)'] = 'pelatihan/Categories/dosen_pelatihan/$1';
$route['data_pelatihan'] = 'pelatihan/Categories/data_pelatihan';

// matkul
$route['matkul_1'] = "dsn/Matkul";
$route['matkul_2'] = "dsn/Matkul/semester2";
$route['matkul_3'] = "dsn/Matkul/semester3";
$route['matkul_4'] = "dsn/Matkul/semester4";
$route['matkul_5'] = "dsn/Matkul/semester5";
$route['matkul_6'] = "dsn/Matkul/semester6";
$route['mk/(:any)'] = 'dsn/Matkul/materi/$1';

// KRS Mhs
$route['krs']="mhs/Krs";
// super_admin
$route['super_admin']="Auth/super_admin";

