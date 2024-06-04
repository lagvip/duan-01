<?php
include "../../model/pdo.php";
include "../../model/AdminModel/sanpham.php";
include "../../model/AdminModel/danhmuc.php";
include "../../model/AdminModel/hoadon.php";
include "../../model/AdminModel/baiviet.php";
include "../../model/AdminModel/lienhe.php";
include "../../model/AdminModel/chucvu.php";
include "../../model/AdminModel/user.php";
include "../../model/AdminModel/binhluan.php";
include "../../model/AdminModel/thongke.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        case 'home':
            $Sum_total = Sum_total();
            $count_bill = count_bill();
            $count_account = count_account();
            $loadAll_bill_home = loadAll_bill_home(0);

            include "../../views/Admin/layout/home/trangchu.php";
            break;


        case 'listthongke':
            $date = [];
            $doanhthu = [];
            $luotmua = [];
            $data = [];
            $statistical = statistical('2023-12-1', '2023-12-31');
            if (isset($_POST['loc'])) {
                $statistical = statistical($_POST['from'], $_POST['to']);

            }
            foreach ($statistical as $key => $value) {
                if ($value['revenue'] == null) {
                    $statistical[$key]['revenue'] = 0;
                }

            }
            $date = array_column($statistical, 'date');
            $doanhthu = array_column($statistical, 'revenue');
            $luotmua = array_column($statistical, 'num_bil');

            $data['date'] = $date;
            $data['doanhthu'] = $doanhthu;
            $data['luotmua'] = $luotmua;

            $data = json_encode($data);
            // echo "<pre>";
            // print_r($data);

            // $Sum_total_by = Sum_total_by();
            include "../../views/Admin/layout/Thongke/thongkedoanhthu.php";
            break;
        case 'listcv':
            $list_chuc_vu = loadAll_chuc_vu();
            include "../../views/Admin/layout/chucvu/list.php";
            break;
        case 'formaddcv':
            include "../../views/Admin/layout/chucvu/add.php";
            break;
        case 'addcv':
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $tencv = $_POST["tencv"];
                $mota = $_POST["mota"];
                $trangthai = $_POST["status"];
                insert_chuc_vu($tencv, $mota, $trangthai);
            }
            $list_chuc_vu = loadAll_chuc_vu();
            include "../../views/Admin/layout/chucvu/list.php";
            break;
        case 'suacv':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $one_chuc_vu = loadOne_chuc_vu($id);
            }
            $list_chuc_vu = loadAll_chuc_vu();
            include "../../views/Admin/layout/chucvu/sua.php";
            break;
        case 'updatecv';
            if (isset($_POST["sua"]) && ($_POST["sua"])) {
                $id = $_POST['id'];
                $tencv = $_POST['tencv'];
                $mota = $_POST['mota'];
                $trangthai = $_POST['trangthai'];
                update_chuc_vu($id, $tencv, $mota, $trangthai);
            }
            $list_chuc_vu = loadAll_chuc_vu();
            include "../../views/Admin/layout/chucvu/list.php";
            break;
        case 'xoacv':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_chuc_vu($id);
            }
            $list_chuc_vu = loadAll_chuc_vu();
            include "../../views/Admin/layout/chucvu/list.php";
            break;
        case 'listhd':
            $list_hoa_don = loadAll_hoa_don();
            include "../../views/Admin/layout/hoadon/list.php";
            break;
        case 'listhdct':
            if(isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            }
            $one_hoa_don = loadOne_hoa_don($id);
            $list_hoa_don_ct = loadAll_hoa_don_ct($id);
            include "../../views/Admin/layout/hoadon/hoadonct.php";
            break;
            case 'suahd':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $one_hoa_don = loadOne_hoa_don($id);
                }
                include "../../views/Admin/layout/hoadon/sua.php";
                break;
            case 'updatett';
                if (isset($_POST["sua"]) && ($_POST["sua"])) {
                    $status = $_POST['status'];
                    $id = $_POST['id'];
                    update_hoa_don($id, $status);
                }
                $list_hoa_don = loadAll_hoa_don();
                include "../../views/Admin/layout/hoadon/list.php";
                break;
        case 'xoahd':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_hoa_don($id);
            }
            $list_hoa_don = loadAll_hoa_don();
            include "../../views/Admin/layout/hoadon/list.php";
            break;
        case 'listbv':
            $list_bai_viet = loadAll_bai_viet();
            include "../../views/Admin/layout/baiviet/list.php";
            break;
        case 'suabv':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $one_bai_viet = loadOne_bai_viet($id);
            }
            include "../../views/Admin/layout/baiviet/sua.php";
            break;
        case 'updatebv';
            if (isset($_POST["sua"]) && ($_POST["sua"])) {
                $tieude = $_POST['tieude'];
                $noidung = $_POST['noidung'];
                $ngaydang = $_POST['ngaydang'];
                $trangthai = $_POST['trangthai'];
                $id = $_POST['id'];
                update_bai_viet($id, $tieude, $noidung, $ngaydang, $trangthai);
            }
            $list_bai_viet = loadAll_bai_viet();
            include "../../views/Admin/layout/baiviet/list.php";
            break;
        case 'xoabv':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_bai_viet($id);
            }
            $list_bai_viet = loadAll_bai_viet();
            include "../../views/Admin/layout/baiviet/list.php";
            break;
        case 'formaddbv':
            include "../../views/Admin/layout/baiviet/add.php";
            break;
        case 'addbv':
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $tieude = $_POST["tieude"];
                $noidung = $_POST["noidung"];
                $ngaydang = date("Y-m-d");
                insert_bai_viet($tieude, $noidung, $ngaydang);
            }
            $list_bai_viet = loadAll_bai_viet();
            include "../../views/Admin/layout/baiviet/list.php";
            break;
        case 'listlh':
            $list_lien_he = loadAll_lien_he();
            include "../../views/Admin/layout/lienhe/list.php";
            break;
        case 'xoalh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_lien_he($id);
            }
            $list_lien_he = loadAll_lien_he();
            include "../../views/Admin/layout/lienhe/list.php";
            break;
        case 'listnd':
            $listnguoidung = loadall_nguoidung();
            include "../../views/Admin/layout/user/list.php";
            break;
        case 'suand':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            //$listnguoidung = loadall_nguoidung();
            $list_chuc_vu = loadall_chucvu();
            $nguoidung = loadone_nguoidung($id);
            include "../../views/Admin/layout/user/update.php";
            break;
        case 'updatend':
            if (isset($_POST["sua"])) {
                $id = $_POST["id"];
                $role = $_POST['role'];
                $trangthai = $_POST['status'];
                update_user($id, $role, $trangthai);
            }

            $listnguoidung = loadall_nguoidung();
            include "../../views/Admin/layout/user/list.php";
            break;
        case 'formaddnd':
            $list_chuc_vu = loadall_chucvu();
            $listnguoidung = loadall_nguoidung();
            include "../../views/Admin/layout/user/add.php";
            break;
        case 'addnd':
            if (isset($_POST["themnguoidung"])) {
                $tendangnhap = $_POST['tendangnhap'];
                $matkhau = $_POST['matkhau'];
                $hoten = $_POST['hoten'];
                $ngaysinh = $_POST['ngaysinh'];
                $sodienthoai = $_POST['sodienthoai'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $role = $_POST['role'];
                insert_user($tendangnhap, $matkhau, $hoten, $ngaysinh, $sodienthoai, $email, $diachi, $role);
            }
            $listnguoidung = loadall_nguoidung();
            include "../../views/Admin/layout/user/list.php";
            break;
        case 'xoand':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_user($id);
            }
            $listnguoidung = loadall_nguoidung();
            include "../../views/Admin/layout/user/list.php";
            break;
        case 'listdm':
            $list_danh_muc = loadAll_danh_muc();
            include "../../views/Admin/layout/danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $one_danh_muc = loadOne_danh_muc($id);
            }
            include "../../views/Admin/layout/danhmuc/sua.php";
            break;
        case 'updatedm';
            if (isset($_POST["sua"]) && ($_POST["sua"])) {
                $tendm = $_POST['tendm'];
                $mota = $_POST['mota'];
                $trangthai = $_POST['trangthai'];
                $id = $_POST['id'];
                $image = $_FILES['img'];
                if (isset($image)) {
                    // thư mục chứa ảnh sau khi upload
                    $target_dir = "../../img/";
                    // lấy ra tên của ảnh đẩy từ form
                    $anh = $image['name'];
                    // tạo một đường dẫn đầy đủ của ảnh trên máy chủ
                    $target_file = $target_dir . $anh;
                    // echo $target_file;
                    // di chuyển ảnh tới thư mục đã tạo
                    move_uploaded_file($image['tmp_name'], $target_file);
                }
                update_danh_muc($id, $tendm, $mota,$trangthai, $anh);
            }
            $list_danh_muc = loadAll_danh_muc();
            include "../../views/Admin/layout/danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_danh_muc($id);
            }
            $list_danh_muc = loadAll_danh_muc();
            include "../../views/Admin/layout/danhmuc/list.php";
            break;
        case 'formadddm':
            include "../../views/Admin/layout/danhmuc/add.php";
            break;
        case 'adddm':
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $tendm = $_POST["tendm"];
                $mota = $_POST["mota"];
                $image = $_FILES['img'];
                if (isset($image)) {
                    // thư mục chứa ảnh sau khi upload
                    $target_dir = "../../img/";
                    // lấy ra tên của ảnh đẩy từ form
                    $anh = $image['name'];
                    // tạo một đường dẫn đầy đủ của ảnh trên máy chủ
                    $target_file = $target_dir . $anh;
                    // echo $target_file;
                    // di chuyển ảnh tới thư mục đã tạo
                    move_uploaded_file($image['tmp_name'], $target_file);
                }
                insert_danh_muc($tendm, $mota, $anh);
            }
            $list_danh_muc = loadAll_danh_muc();
            include "../../views/Admin/layout/danhmuc/list.php";
        case 'listsp':
            if (isset($_POST["btn"]) && ($_POST["btn"])) {
                $kyw = $_POST["keyword"];
                $iddm = $_POST["iddm"];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $list_san_pham = loadAll_sanpham($kyw, $iddm);
            $listdmuc = loadAll_danh_muc();
            include "../../views/Admin/layout/sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $one_san_pham = loadOne_san_pham($id);
                $list_danh_muc = loadAll_danh_muc();
                $load_all_pro_detail = load_all_pro_detail($_GET['id']);
            }
            include "../../views/Admin/layout/sanpham/sua.php";
            break;
        case 'updatesp';
            if (isset($_POST["sua"]) && ($_POST["sua"])) {
                $tensp = $_POST['tensp'];
                $gia = $_POST['gia'];
                $mota = $_POST['mota'];
                $image = $_FILES['img'];
                $id_danh_muc = $_POST['iddm'];
                $id = $_POST['id'];
                $ram = $_POST['ram'];
                $soluong = $_POST['soluong'];
                if (isset($image)) {
                    // thư mục chứa ảnh sau khi upload
                    $target_dir = "../../img/";
                    // lấy ra tên của ảnh đẩy từ form
                    $anh = $image['name'];
                    // tạo một đường dẫn đầy đủ của ảnh trên máy chủ
                    $target_file = $target_dir . $anh;
                    // echo $target_file;
                    // di chuyển ảnh tới thư mục đã tạo
                    move_uploaded_file($image['tmp_name'], $target_file);
                }

                update_san_pham($id, $tensp, $gia, $anh, $mota, $id_danh_muc ,$ram ,$soluong);
            }
            $list_san_pham = loadAll_san_pham();
            include "../../views/Admin/layout/sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_san_pham($id);
            }
            $list_san_pham = loadAll_san_pham();
            include "../../views/Admin/layout/sanpham/list.php";
            break;
        case 'listbinhluan':
            $listBinhluan = load__all__binhluanadmin();
            include "../../views/Admin/layout/binhluan/list.php";
            break;
        case 'deletebl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $idkhachhang = $_GET['id'];
                delete_binhluan($idkhachhang);
            }

            $listBinhluan = load__all__binhluanadmin();
            include "../../views/Admin/layout/binhluan/list.php";

            break;

        case 'formaddsp':
            $list_danh_muc = loadAll_danh_muc();
            include "../../views/Admin/layout/sanpham/add.php";
            break;
        case 'addsp':
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $tensp = $_POST['tensp'];
                $gia = $_POST['gia'];
                $mota = $_POST['mota'];
                $image = $_FILES['img'];
                $id_danh_muc = $_POST['iddm'];
                $ram = $_POST['ram'];
                $soluong = $_POST['soluong'];
                if (isset($image)) {
                    // thư mục chứa ảnh sau khi upload
                    $target_dir = "../../img/";
                    // lấy ra tên của ảnh đẩy từ form
                    $anh = $image['name'];
                    // tạo một đường dẫn đầy đủ của ảnh trên máy chủ
                    $target_file = $target_dir . $anh;
                    // echo $target_file;
                    // di chuyển ảnh tới thư mục đã tạo
                    move_uploaded_file($image['tmp_name'], $target_file);
                }
                
                insert_san_pham($tensp, $gia, $anh, $mota, $id_danh_muc, $ram ,$soluong);
            }
            
            $list_san_pham = loadAll_san_pham();
            include "../../views/Admin/layout/sanpham/list.php";
            break;
        default:
            # code...
            break;
    }
}
