<?php
$lang['global_title'] = 'Welcome Garuda Indonesia Whistle Blowing System';

$lang['global_home'] = 'Home';
$lang['global_confirmation'] = 'Konfirmasi';
$lang['global_save'] = 'Kirim';
$lang['global_reply'] = 'Balas';
$lang['global_cancel'] = 'Batal';
$lang['global_attachment'] = 'Lampiran';
$lang['global_subject'] = 'Subject';
$lang['global_message'] = 'Pesan';
$lang['global_action'] = 'Action';
$lang['global_email'] = 'Email';
$lang['global_status'] = 'Status';
$lang['global_click_here'] = 'klik disini';
$lang['global_print_page'] = 'Print Halaman ini';
$lang['global_invalide_captcha'] = 'Masukkan captcha dengan benar';
$lang['global_'] = '';
$lang['global_'] = '';
$lang['global_'] = '';
$lang['global_'] = '';

$lang['user_resetpasswd'] = 'Reset Password';
$lang['user_registration'] = 'Pendaftaran';
$lang['user_registration_form'] = 'Form Pendaftaran';
$lang['user_email'] = 'Alamat Email';
$lang['user_fullname'] = 'Nama Lengkap';
$lang['user_username'] = 'Username';
$lang['user_passwd'] = 'Password';
$lang['user_wtype'] = 'Jenis Perusahaan';
$lang['user_wtype_int'] = 'Internal Garuda Indonesia';
$lang['user_wtype_ext'] = 'Eksternal Garuda Indonesia';
$lang['user_work_name'] = 'Nama Perusahaan';
$lang['user_work_nip'] = 'Nomor Pegawai';
$lang['user_work_departement'] = 'Departemen';
$lang['user_work_title'] = 'Jabatan';
$lang['user_work_location'] = 'Lokasi Kerja';
$lang['user_telephone'] = 'No. Telepon';
$lang['user_handphone'] = 'No. Handphone';
$lang['user_login'] = 'Login';
$lang['user_login_form'] = 'Form Login';
$lang['user_logout'] = 'Logout';
$lang['user_chpasswd'] = 'Change Password';
$lang['user_logout_success'] = 'Success Logout';
$lang['user_dashboard'] = 'Dashboard';
$lang['user_resetpasswd_form'] = 'Form Reset Password';
$lang['user_resetpasswd'] = 'Reset Password';
$lang['user_reset_email_subject'] = 'Konfirmasi Reset Password';
$lang['user_reset_confirm_desc'] = 'Anda telah melakukan reset password. Silahkan klik link dibawah ini untuk mendapatkan password baru. Jika anda tidak melalukan reset password, abaikan email ini.';
$lang['user_reset_success_msg'] = 'Berhasil Reset Password. Silahkan cek email anda untuk konfirmasi.';
$lang['user_reset_confirm_success'] = 'Berhasil Reset Password. Silahkan cek email anda untuk konfirmasi.';
$lang['user_reset_confirm'] = 'Reset Password';
$lang['user_reset_confirm_error'] = 'Kode Reset Password sudah expire atau tidak valid.';
$lang['user_newpasswd'] = 'Password Baru';
$lang['user_'] = '';


$lang['user_reg_error_noemail'] = 'Masukkan Email';
$lang['user_reg_error_emailexists'] = 'Email sudah ada disystem kami';
$lang['user_reg_error_noemailexists'] = 'Email yang anda masukkan tidak ada disystem kami';
$lang['user_reg_error_nousernameexists'] = 'Username yang anda masukkan tidak ada disystem kami';
$lang['user_reg_error_nowtype'] = 'Pilih Jenis Perusahaan';
$lang['user_reg_error_usernameemailnotmatch'] = 'Email dan Username tidak sesuai';
$lang['user_reg_error_invalidemail'] = 'Email yang anda masukkan tidak valid';
$lang['user_reg_error_nofullname'] = 'Masukkan Nama';
$lang['user_reg_error_nousername'] = 'Masukkan Username';
$lang['user_reg_error_invalidusername'] = 'Username harus huruf(a-z) dan angka (0-9)';
$lang['user_reg_error_usernameexists'] = 'Username sudah ada disystem';
$lang['user_reg_error_nopassword'] = 'Masukkan Password';
$lang['user_registration_success'] = 'Pendaftaran Berhasil';
$lang['user_registration_success_desc'] = 'Pendaftaran Berhasil. Silahkan cek email anda untuk mengaktifkan account.';

$lang['user_registration_email_subject'] = 'Konfirmasi Pendaftaran';
$lang['user_registration_confirm'] = 'Konfirmasi Pendaftaran';
$lang['user_registration_confirm_desc'] = 'Untuk mengaktifkan account anda silahkan klik URL dibawah Ini : ';
$lang['user_registration_confirm_error'] = 'Kode Konfirmasi sudah expire atau tidak valid.';
$lang['user_registration_confirm_success'] = 'Berhasil mengaktifkan account';
$lang['user_registration_failed'] = 'Pendaftaran Gagal';


$lang['report_submit'] = 'Kirim Laporan';
$lang['report_submit_form'] = 'Form Kirim Laporan';
$lang['report_submit_form_reply'] = 'Form Balasan';
$lang['report_anonymous'] = 'Anonymous';
$lang['report_noticket'] = 'Ticket ID tidak ditemukan';
$lang['report_viewticket'] = 'Lihat Ticket';
$lang['report_view'] = 'Detail';
$lang['report_anonymous_desc'] = 'Jika Anda ingin sebagai melakukan registrasi terlebih dahulu, silakan <here>.';
$lang['report_email_anonymous_subject'] = 'Ticket ID';
$lang['report_email_anonymous_body'] = <<<EOLEMAIL

Ticket ID : %s

EOLEMAIL;

$lang['report_email_anonymous_form'] = 'Form Kirim Email';
$lang['report_email_anonymous_nodirect'] = 'No Direct Access';
$lang['report_email_anonymous_noemail'] = 'Masukkan Email';
$lang['report_email_anonymous_validemail'] = 'Email yang anda masukkan tidak valid';
$lang['report_email_anonymous_success'] = 'Berhasil kirim email';
$lang['report_email_anonymous_failed'] = 'Gagal kirim email';



$lang['ticket_anonymous_desc'] = 'Jika Anda ingin sebagai user anonymous, silakan '. anchor('wbs/ticket/submitAnonymous','disini');
$lang['ticket_nosubject'] = 'Masukkan Subject';
$lang['ticket_nocontent'] = 'Masukkan Pesan';
$lang['ticket_nowtype'] = 'Pilih Jenis Perusahaan';
$lang['ticket_submit_failed'] = 'Gagal Kirim Laporan';
$lang['ticket_submit_succes'] = 'Berhasil membuat Laporan dengan tikcet Id : <ticketid>';
$lang['ticket_reply_failed'] = 'Gagal Balas Laporan';
$lang['ticket_reply_success'] = 'Berhasil Balas Laporan';

$lang['ticket_detail'] = 'Detail Laporan';
$lang['ticket_id'] = 'Ticket ID';
$lang['ticket_submit_result'] = 'Result';
$lang['ticket_submit_result_desc'] = 'Laporan Anda berhasil di-submit berikut adalah :';
$lang['ticket_'] = '';
$lang['ticket_'] = '';
$lang['ticket_'] = '';
$lang['ticket_'] = '';
$lang['ticket_'] = '';
$lang['ticket_'] = '';
$lang['ticket_'] = '';
$lang['ticket_'] = '';

