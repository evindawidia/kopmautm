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
    public function uploadimage($formname)
    {
        $config['upload_path'] = './public/upload';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size']  = '1024';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload($formname)) {
            return "/public/upload/" . $this->upload->data("file_name");
        } else {
            $this->writemsg($this->upload->display_errors());
            return null;
        }
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
    public function anggota_add()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        $data['Level'] = $this->level->get();
        $data['Prodi'] = $this->prodi->get();
        $data['Gender'] = $this->gender->get();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/anggota-form', $data);
        $this->load->view('admin/footer', $data);
    }

    public function doaddanggota()
    {
        $this->ceklogin();
        $newanggota = new anggota_m();
        $newanggota->update($_POST);
        $newanggota->write();
        $this->writemsg("Process Success", 1);
        redirect("Admin/anggota");
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
    public function anggota_edit()
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
        $data['Gender'] = $this->gender->get();
        $data['Prodi'] = $this->prodi->get();
        $data['Level'] = $this->level->get();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/anggota-edit', $data);
        $this->load->view('admin/footer', $data);
    }

    public function doeditanggota()
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
        if (!$anggota) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/anggota");
            return;
        }
        $anggota->update($_POST);
        $anggota->write();
        $this->writemsg("Edit Success", 1);
        redirect("Admin/anggota_detail?id=$id");
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
        $data['Pembelian'] = $this->pembelian->get("", "", "id_pembelian DESC");
        $data['Anggota'] = $this->anggota->get();
        $data['Detail_Beli'] = $this->detail_pembelian->get();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/pembelian', $data);
        $this->load->view('admin/footer', $data);
    }
    public function detail_pembelian()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        if (!isset($_GET['id'])) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/pembelian");
            return;
        }
        $id = $_GET['id'];
        $pembelian = $this->pembelian->get_one("id_pembelian = '$id'");
        $data['pembelian'] = $pembelian;
        $data['Detail_Beli'] = $this->detail_pembelian->get("pembelian_id = '" . $pembelian->id_pembelian . "'");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/pembelian-detail', $data);
        $this->load->view('admin/footer', $data);
    }
    public function pembelian_edit()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        if (!isset($_GET['id'])) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/detail_pembelian");
            return;
        }
        $id = $_GET['id'];
        $detail_pembelian = $this->detail_pembelian->get_one("id_det_pembelian = '$id'");
        $data['DetailPembelian'] = $detail_pembelian;
        $data['StatusBeli'] = $this->status_beli->get();
        $data['Barang'] = $this->barang->get();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/pembelian-edit', $data);
        $this->load->view('admin/footer', $data);
    }

    public function doeditpembelian()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        if (!isset($_GET['id'])) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/detail_pembelian");
            return;
        }
        $id = $_GET['id'];
        $detail_pembelian = $this->detail_pembelian->get_one("id_det_pembelian = '$id'");
        if (!$detail_pembelian) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/detail_pembelian");
            return;
        }
        $detail_pembelian->update($_POST);
        $detail_pembelian->write();
        $this->writemsg("Edit Success", 1);
        redirect("Admin/detail_pembelian?id=$id");
    }
    public function pembelian_delete()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        if (!isset($_GET['id'])) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/pembelian");
            return;
        }
        $id = $_GET['id'];
        $pembelian = $this->pembelian->get_one("id_pembelian = '$id'");
        $pembelian->delete();
        $this->writemsg("Delete Success", 1);
        redirect("Admin/pembelian");
    }
    public function peminjaman()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        $data['Peminjaman'] = $this->pengajuan->get("", "", "id_pengajuan DESC");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/peminjaman', $data);
        $this->load->view('admin/footer', $data);
    }
    public function detail_peminjaman()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        if (!isset($_GET['id'])) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/peminjaman");
            return;
        }
        $id = $_GET['id'];
        $pengajuan = $this->pengajuan->get_one("id_pengajuan = '$id'");
        $data['peminjaman'] = $pengajuan;
        $data['Log_Bayar'] = $this->log_pembayaran->get("pengajuan_id = '" . $pengajuan->id_pengajuan . "'");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/peminjaman-detail', $data);
        $this->load->view('admin/footer', $data);
    }
    public function peminjaman_edit()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        if (!isset($_GET['id'])) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/peminjaman");
            return;
        }
        $id = $_GET['id'];
        $pengajuan = $this->pengajuan->get_one("id_pengajuan = '$id'");
        $data['Pengajuan'] = $pengajuan;
        $data['Anggota'] = $this->anggota->get();
        $data['StatusAju'] = $this->status_pengajuan->get();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/peminjaman-edit', $data);
        $this->load->view('admin/footer', $data);
    }
    public function doeditpeminjaman()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        if (!isset($_GET['id'])) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/peminjaman");
            return;
        }
        $id = $_GET['id'];
        $pengajuan = $this->pengajuan->get_one("id_pengajuan = '$id'");
        if (!$pengajuan) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/peminjaman");
            return;
        }
        $pengajuan->update($_POST);
        $pengajuan->write();
        $this->writemsg("Edit Success", 1);
        redirect("Admin/detail_peminjaman?id=$id");
    }
    public function peminjaman_delete()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        if (!isset($_GET['id'])) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/peminjaman");
            return;
        }
        $id = $_GET['id'];
        $pengajuan = $this->pengajuan->get_one("id_pengajuan = '$id'");
        $pengajuan->delete();
        $this->writemsg("Delete Success", 1);
        redirect("Admin/peminjaman");
    }
    public function barang()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        $data['Barang'] = $this->barang->get("", "", "id_barang Desc");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/barang', $data);
        $this->load->view('admin/footer', $data);
    }
    public function barang_add()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        $data['Supplier'] = $this->supplier->get();
        $data['Kategori'] = $this->kategori->get();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/barang-form', $data);
        $this->load->view('admin/footer', $data);
    }
    public function doaddbarang()
    {
        $this->ceklogin();
        $newbarang = new barang_m();
        $newbarang->update($_POST);
        if (isset($_FILES['image'])) {
            if (!empty($_FILES['image']['size'])) {
                $upload = $this->uploadimage("image");
                if ($upload == null) {
                    redirect("Admin/barang");
                } else {
                    $newbarang->image = base_url() . $upload;
                }
            }
        }
        $newbarang->write();
        $this->writemsg("Process Success", 1);
        redirect("Admin/barang");
    }
    public function detail_barang()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        if (!isset($_GET['id'])) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/barang");
            return;
        }
        $id = $_GET['id'];
        $barang = $this->barang->get_one("id_barang = '$id'");
        $data['barang'] = $barang;
        $this->load->view('admin/header', $data);
        $this->load->view('admin/barang-detail', $data);
        $this->load->view('admin/footer', $data);
    }
    public function barang_edit()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        if (!isset($_GET['id'])) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/barang");
            return;
        }
        $id = $_GET['id'];
        $barang = $this->barang->get_one("id_barang = '$id'");
        $data['barang'] = $barang;
        $data['Supplier'] = $this->supplier->get();
        $data['Kategori'] = $this->kategori->get();
        $data['id'] = $id;
        $this->load->view('admin/header', $data);
        $this->load->view('admin/barang-edit', $data);
        $this->load->view('admin/footer', $data);
    }
    public function doeditbarang()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        if (!isset($_GET['id'])) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/barang");
            return;
        }
        $id = $_GET['id'];
        $data['id'] = $id;
        $barang = $this->barang->get_one("id_barang = '$id'");
        if (!$barang) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/barang");
            return;
        }
        $barang->update($_POST);
        if (isset($_FILES['image'])) {
            if (!empty($_FILES['image']['size'])) {
                $upload = $this->uploadimage("image");
                if ($upload == null) {
                    redirect("Admin/barang_edit?id=$id");
                } else {
                    $barang->image = base_url() . $upload;
                }
            }
        }
        $barang->write();
        $this->writemsg("Edit Success", 1);
        redirect("Admin/detail_barang?id=$id");
    }
    public function barang_delete()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        if (!isset($_GET['id'])) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/barang");
            return;
        }
        $id = $_GET['id'];
        $barang = $this->barang->get_one("id_barang = '$id'");
        $barang->delete();
        $this->writemsg("Delete Success", 1);
        redirect("Admin/barang");
    }
    public function supplier()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        $data['Supplier'] = $this->supplier->get();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/supplier', $data);
        $this->load->view('admin/footer', $data);
    }
    public function supplier_add()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/supplier-form', $data);
        $this->load->view('admin/footer', $data);
    }
    public function doaddsupplier()
    {
        $this->ceklogin();
        $newsupplier = new supplier_m();
        $newsupplier->update($_POST);
        $newsupplier->write();
        $this->writemsg("Process Success", 1);
        redirect("Admin/supplier");
    }
    public function supplier_edit()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        if (!isset($_GET['id'])) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/supplier");
            return;
        }
        $id = $_GET['id'];
        $supplier = $this->supplier->get_one("id_supplier = '$id'");
        $data['supplier'] = $supplier;
        $this->load->view('admin/header', $data);
        $this->load->view('admin/supplier-edit', $data);
        $this->load->view('admin/footer', $data);
    }
    public function doeditsupplier()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        if (!isset($_GET['id'])) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/supplier");
            return;
        }
        $id = $_GET['id'];
        $supplier = $this->supplier->get_one("id_supplier = '$id'");
        if (!$supplier) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/supplier");
            return;
        }
        $supplier->update($_POST);
        $supplier->write();
        $this->writemsg("Edit Success", 1);
        redirect("Admin/supplier?id=$id");
    }
    public function supplier_delete()
    {
        $this->ceklogin();
        $data['UserLogin'] = $this->getdatalogin();
        if (!isset($_GET['id'])) {
            $this->writemsg("Data not found !!", 2);
            redirect("Admin/supplier");
            return;
        }
        $id = $_GET['id'];
        $supplier = $this->supplier->get_one("id_supplier = '$id'");
        $supplier->delete();
        $this->writemsg("Delete Success", 1);
        redirect("Admin/supplier");
    }
}
