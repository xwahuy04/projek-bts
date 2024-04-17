<?php 

class Login extends CI_Controller{
 
    function __construct(){
        parent::__construct();        
        $this->load->model('m_login'); // Pastikan baris ini tidak dikomentari dan nama model sesuai dengan nama file
    }
 
    function index(){
        $this->load->view('v_login');
    }

    public function aksi_login(){
        $nis = $this->input->post('nis');
        $where = array(
            'nis' => $nis
        );
        try {
            $query = $this->m_login->cek_login("nis",$where);
            if ($query !== false) {
                $cek = $query->num_rows();
                if($cek > 0){
                    $data_session = array(
                        'nis' => $nis,
                        'status' => "login"
                    );
                    $this->session->set_userdata($data_session);
                    redirect(base_url("v_admin"));
                } else {
                    echo "nis salah !";
                }
            } else {
                // Handle the case where the query failed
                echo "Terjadi kesalahan saat mencoba untuk masuk. Silakan coba lagi";
            }
        } catch (Exception $e) {
            // Log the error message for debugging
            log_message('error', $e->getMessage());
            // Display a user-friendly error message
            echo "Terjadi kesalahan saat mencoba untuk masuk. Silakan coba lagi.";
        }
    }
    

    public function do_login() {
        $nis = $this->input->post('nis');
        
        // Lakukan validasi login sesuai kebutuhan, misalnya dengan model pengguna
        $this->load->model('User_model');
        $user = $this->User_model->login($nis,);
    
        if ($user) {
            // Jika login berhasil, atur sesi dan redirect ke halaman v_admin
            $this->session->set_userdata('nis', $nis);
            redirect('v_admin'); // Ubah admin/dashboard sesuai dengan rute yang sesuai
        } else {
            // Jika login gagal, tampilkan pesan kesalahan atau kembali ke halaman login
            redirect('login');
        }
    }
    
 
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}