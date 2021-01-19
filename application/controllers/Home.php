<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('user_agent');
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
            $anggota = $this->anggota->get_one("id_anggota = '" . $_SESSION['user'] . "'");
            if ($anggota->level_id == 3) {
                redirect("Home/user");
            } elseif ($anggota->level_id == 1) {
                redirect("Admin/user");
            }
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
            } elseif ($anggota->level_id == 1 || $anggota->level_id == 2) {
                redirect("Admin/user");
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
    public function produk()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        $id = $_GET['id'];
        $barang = $this->barang->get("kategori_id = '$id'");
        $data['Barang'] = $barang;
        $data['Keranjang'] = $this->pembelian->get("anggota_id = '" . $data['UserLogin']->id_anggota . "' AND status_beli_id = 1");
        $data['KategoriList'] = $this->kategori->get();
        $data['Kategori'] = $this->kategori->get_one("id_kategori = '$id'");
        $this->load->view('home/produk', $data);
    }
    public function produk_detail()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        $id = $_GET['id'];
        $barang = $this->barang->get_one("id_barang = '$id'");
        $data['Barang'] = $barang;
        $data['KategoriList'] = $this->kategori->get();
        $data['Keranjang'] = $this->pembelian->get("anggota_id = '" . $data['UserLogin']->id_anggota . "' AND status_beli_id = 1");
        $this->load->view('home/pembelian_detail', $data);
    }
    public function tambah_keranjang()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        $newpembelian = new pembelian_m();
        if ($pembelian = $this->pembelian->get("anggota_id = '" . $data['UserLogin']->id_anggota . "' AND status_beli_id = 1", "", "id_pembelian DESC", "1")) {
            $newpembelian = $pembelian[0];
        } else {
            $newpembelian->update([
                "anggota_id" => $data['UserLogin']->id_anggota,
                "status_beli_id" => 1
            ]);
            $newpembelian->write();
        }
        $newdetail_pembelian = new detail_pembelian_m();
        $data1['jumlah_beli'] = $_POST['jumlah_beli'];
        $data1['barang_id'] = $_GET['id'];
        $data1['status_beli_id'] = 1;
        $data1['pembelian_id'] = $newpembelian->id_pembelian;
        $newdetail_pembelian->update($data1);
        $newdetail_pembelian->write();
        $this->writemsg("Berhasil Ditambahkan ke Keranjang", 1);
        redirect("Home/produk_detail?id=" . $_GET['id']);
    }
    public function delete_item()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        $id = $_GET['id'];
        $keranjang = $this->detail_pembelian->get_one("id_det_pembelian = '$id'");
        $keranjang->delete();
        $this->writemsg("Delete Success", 1);
        redirect($_SERVER['HTTP_REFERER']); //kembali ke alamat yg melakukan request
    }
    public function checkout()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        $id = $_GET['id'];
        $pembelian = $this->pembelian->get_one("id_pembelian = '$id'");
        $pembelian->status_beli_id = 2;
        $pembelian->write();
        $this->writemsg("Berhasil Checkout", 1);
        redirect("Home/kuitansi/$id");
    }
    public function kuitansi($id)
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        $pembelian = $this->pembelian->get_one("id_pembelian = '$id'");
        $data['Pembelian'] = $pembelian;
        $this->load->view("home/kuitansi", $data);
    }
}
