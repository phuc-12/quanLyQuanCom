<?php
    include_once('ketnoi.php');
    class mThanhToan{
        public function selectKhachHang($maKH){
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
            $sql = "SELECT k.hoTen, t.diaChi, t.sdt ,k.diemTichLuy
                    FROM khachhang k
                    JOIN taikhoannguoidung t ON k.idNguoiDung = t.idNguoiDung
                    WHERE k.maKH = ?";  // ? làm placeholder cho tham số
        
            // SQL
            if ($truyvan = $con->prepare($sql)) {
                // Liên kết tham số kiểu integer
                $truyvan->bind_param("i", $maKH);
                $truyvan->execute();
        
                // Lấy kết quả
                $result = $truyvan->get_result();
                $truyvan->close();
                $p->dongKetNoi($con);
                return $result;
            } 
            else {
                // báo lỗi
                echo "Lỗi trong câu lệnh SQL: " . $con->error;
                $p->dongKetNoi($con);
                return false;
            }
        }

        // lấy mã KH từ maHD 
        public function selectMaKHByOrderId($order_id){
            $p = new clsKetNoi(); 
            $con = $p->moKetNoi();
        
            $sql = "SELECT maKH 
                    FROM hoadon 
                    WHERE maHD = ?";
        
            if ($truyvan = $con->prepare($sql)) {
                $truyvan->bind_param("i", $order_id); 
                $truyvan->execute();
                $result = $truyvan->get_result();

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();  // Lấy một hàng kết quả
                    $maKH = $row['maKH'];  // Lấy mã khách hàng
                } else {
                    $maKH = null;  // trả về null
                }
                $truyvan->close();
            } else {
                // báo lỗi
                echo "Lỗi trong câu lệnh SQL: " . $con->error;
                $maKH = null;
            }
            $p->dongKetNoi($con);
            return $maKH;
        }

        //lấy hóa đơn từ maHD
        public function selectHoaDonByOrderId($order_id){
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
            $sql = "SELECT * FROM hoadon WHERE maHD = ?";
            if ($truyvan = $con->prepare($sql)) {
                $truyvan->bind_param("i", $order_id);
                $truyvan->execute();
                $result = $truyvan->get_result();
                $truyvan->close();
                $p->dongKetNoi($con);
                return $result;
            } else {
                // báo lỗi
                echo "Lỗi trong câu lệnh SQL: " . $con->error;
                $p->dongKetNoi($con);
                return false;
            }
        }

        //lấy danh sách chi tiết hóa đơn từ maHD
        public function selectCTHDbyMaHD($order_id){
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
            $sql = "  SELECT m.tenMA, m.dongia,m.donViTinh, ctd.soLuong
                    FROM chitiethoadon ctd
                    JOIN monan m ON ctd.maMA = m.maMA
                    WHERE ctd.maHD = ?";
            if ($truyvan = $con->prepare($sql)) {
                $truyvan->bind_param("i", $order_id);
                $truyvan->execute();
                $result = $truyvan->get_result();
                $data = [];
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;  // Thêm mỗi bản ghi vào mảng $data
                }
                $truyvan->close();
                $p->dongKetNoi($con);
                return $data;
            } else {
                // báo lỗi
                echo "Lỗi trong câu lệnh SQL: " . $con->error;
                $p->dongKetNoi($con);
                return false;
            }
        }

      //Loại khách hàng 
      public function selectLoaiKH($maKH){
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
            $sql = "  SELECT  kh.hoTen, lkh.loaiKH
                    FROM khachhang kh
                    JOIN loaikhachhang lkh  ON kh.maLoaiKH = lkh.maLoaiKH
                    WHERE kh.maKH = ?";
             if ($truyvan = $con->prepare($sql)) {
                $truyvan->bind_param("i", $maKH);
                $truyvan->execute();
                $result = $truyvan->get_result();
                $data = [];
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row['loaiKH'];  // Thêm mỗi bản ghi vào mảng $data
                }
                $truyvan->close();
                $p->dongKetNoi($con);
                return $data[0];
            } else {
                // Nếu không thể chuẩn bị câu lệnh SQL, in lỗi
                echo "Lỗi trong câu lệnh SQL: " . $con->error;
                $p->dongKetNoi($con);
                return false;
            }
      }
      //lấy danh sách loại khuyến mãi
      public function selectDanhSachLoaiKH($loaiKH){
        $p = new clsKetNoi();
        $con = $p->moKetNoi();
        $sql = "SELECT * FROM ctkm WHERE loaiKH = ?";

        if ($truyvan = $con->prepare($sql)) {
            $truyvan->bind_param("s", $loaiKH);  // "s" chỉ ra rằng tham số là kiểu string (chuỗi)
            $truyvan->execute();
            $result = $truyvan->get_result();
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;  // Thêm mỗi bản ghi vào mảng $data
            }
            $truyvan->close();
            $p->dongKetNoi($con);
            return $data;
        } else {
            // báo lỗi
            echo "Lỗi trong câu lệnh SQL: " . $con->error;
            $p->dongKetNoi($con);
            return false;
        }
      }
    }
?>