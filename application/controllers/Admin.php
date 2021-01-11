<?php
class Admin extends CI_Controller
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
    public function user()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        $data['Pengajuan'] = $this->pengajuan->get();
        $data['Anggota'] = $this->anggota->get();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer', $data);
    }
    public function anggota()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        $data['Anggota'] = $this->anggota->get();
        $data['Prodi'] = $this->prodi->get();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/anggota', $data);
        $this->load->view('admin/footer', $data);
    }
    public function anggota_detail()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        if (!isset($_GET['id'])) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/anggota");
            return;
        }
        $id = $_GET['id'];
        $anggota = $this->anggota->get_one("id_anggota = '$id'");
        $data['anggota'] = $anggota;
        $data['Prodi'] = $this->prodi->get();
        $data['Level'] = $this->level->get();
        $data['Gender'] = $this->gender->get();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/anggota-detail', $data);
        $this->load->view('admin/footer', $data);
    }
    public function anggota_delete()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        if (!isset($_GET['id'])) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/anggota");
            return;
        }
        $id = $_GET['id'];
        $anggota = $this->anggota->get_one("id_anggota = '$id'");
        $anggota->delete();
        $this->writemsg("Delete Success", 1);
        redirect("Admin/anggota");
    }
    public function pembelian()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        $data['Pembelian'] = $this->pembelian->get();
        $data['Anggota'] = $this->anggota->get();
        $data['Detail_Beli'] = $this->detail_pembelian->get();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/pembelian', $data);
        $this->load->view('admin/footer', $data);
    }
}
