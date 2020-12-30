<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model("Anggota_m", "anggota");
        $this->load->model("Barang_m", "barang");
        $this->load->model("Detail_pembelian_m", "detail_pembelian");
        $this->load->model("Fakultas_m", "fakultas");
        $this->load->model("Gender_m", "gender");
        $this->load->model("Kategori_m", "kategori");
        $this->load->model("Level_m", "level");
        $this->load->model("Log_pembayaran_m", "log_pembayaran");
        $this->load->model("Pembelian_m", "pembelian");
        $this->load->model("Pengajuan_m", "pengajuan");
        $this->load->model("Prodi_m", "prodi");
        $this->load->model("Restock_m", "restock");
        $this->load->model("Status_beli_m", "status_beli");
        $this->load->model("Status_pembayaran_m", "status_pembayaran");
        $this->load->model("Status_pengajuan_m", "status_pengajuan");
        $this->load->model("Supplier_m", "supplier");
    }
    public function writemsg($msg, $status = 3)
    {
        // 1 = success;
        // 2 = error;
        // 3 = warning;
        if ($status == 1) {
            $stat = "alert-success";
        }

        if ($status == 2) {
            $stat = "alert-danger";
        }

        if ($status == 3) {
            $stat = "alert-warning";
        }

        $this->session->set_flashdata('msg', "<div class='alert $stat'>$msg</div>");
    }
    public function ceklogin()
    {
        if (!isset($_SESSION["user"])) {
            redirect("Home/login");
            return;
        }
    }
    public function getdatalogin()
    {
        return $this->anggota->get_one("id_anggota = '" . $_SESSION['user'] . "'");
    }
    public function login()
    {
        if (isset($_SESSION['user'])) {
            redirect("Home/user");
            return;
        }
        $this->load->view("home/login");
    }
    public function dologin()
    {
        if (!isset($_POST['email']) || !isset($_POST['password'])) {
            redirect("Home/login");
        }
        $user = $_POST['email'];
        $password = $_POST['password'];
        $anggota = $this->anggota->get_one("email = '$user' and password = '$password'");
        if ($anggota) {
            $_SESSION['user'] = $anggota->id_anggota;
            if ($anggota->level_id == 3) {
                redirect("Home/user");
            }
        } else {
            $this->writemsg("Username /  Password Salah");
            redirect("Home/login");
            return;
        }
    }
    public function logout()
    {
        session_destroy();
        redirect("Home/");
    }
    public function index()
    {
        $this->load->view('home/index');
    }
    public function registrasi()
    {
        $data['Gender'] = $this->gender->get();
        $data['Prodi'] = $this->prodi->get();
        $this->load->view('home/registrasi', $data);
    }
    public function doregistrasi()
    {
        $newAnggota = new Anggota_m();
        $newAnggota->update($_POST);
        $newAnggota->level_id = 3;
        $newAnggota->write();
        $this->writemsg("Process Registration Success", 1);
        redirect("Home/login");
    }
    public function user()
    {
        if (!isset($_SESSION["user"])) {
            redirect("Home/login");
            return;
        }
        $data['UserLogin'] = $this->getdatalogin();
        $data['Kategori'] = $this->kategori->get();
        $this->load->view('home/user', $data);
    }
}
