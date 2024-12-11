$(document).ready(function(){
    //kiem tra maKM
    function ktmaKM() {
        let maKM = $("#maKM").val();
        let regex = /^\d+$/; //chi được điền số
        if (maKM == "") {
            $("#errMa").html("Không được để trống");
            return false;
        }else if (!regex.test(maKM)){
            $("#errMa").html("Mã không hợp lệ - chỉ được điền số");
            return false;
        }
        else {
            $("#errMa").html("<b style='font-size: 20px;'>*</b>");
            return true;
        }
    }
    $("#maKM").blur(function(e){
        ktmaKM();
    });
    
    //kiem tra ten
    function ktTenCTKM() {
        let tenMA = $("#tenKM").val().trim();
        let btcq = /^[A-Za-zÀ-ỹà-ỹ0-9\s%]+$/; // Cho phép chữ cái có và không dấu trong tiếng Việt. [0-9]: Cho phép số (0-9). \s: Cho phép khoảng trắng. %: Cho phép dấu phần trăm (%).
        if(tenMA.length == 0) {
            $("#errTen").html("Không được để trống");
            $("#tenKM").focus();
            return false;
        } else if (btcq.test(tenMA)==false) {
            $("#errTen").html("Tên không hợp lệ");
            $("#tenKM").focus();
            return false;
        } else {
            $("#errTen").html("<b style='font-size: 20px;'>*</b>");
            return true;
        } 
    }
    $("#tenKM").blur(function(){
        ktTenCTKM();
    });

    //kiem tra mo ta
    function ktMT() {
        let MT = $("#moTa").val();
        if (MT == "") {
            $("#errMoTa").html("Không được để trống");
            return false;
        } else {
            $("#errMoTa").html("<b style='font-size: 20px;'>*</b>");
            return true;
        }
    }
    $("#moTa").blur(function(e){
        ktMT();
    });

    //kiem tra trang thai
    function ktTrangThai() {
        let trangThai = $("#trangThai").val();
        if (trangThai == "") {
            $("#errTrangThai").html("Không được để trống");
            return false;
        } else if (trangThai != "1" && trangThai != "2") {
            $("#errTrangThai").html("Trạng thái chỉ được nhập 1 hoặc 2");
            return false;
        } else {
            $("#errTrangThai").html("<b style='font-size: 20px;'>*</b>");
            return true;
        }
    }
    $("#trangThai").blur(function () {
        ktTrangThai();
    });

    //kiem tra chiet khau
    function ktChietKhau() {
        let chietKhau = $("#chietKhau").val();
        let regex = /^\d+(\.\d+)?$/; //chỉ cho phép số nguyên hoặc số thập phân dương
    
        if (chietKhau == "") {
            $("#errChietKhau").html("Không được để trống");
            return false;
        } else if (!regex.test(chietKhau)) {
            $("#errChietKhau").html("Chiết khấu chỉ được chứa số và không được âm");
            return false;
        } else {
            $("#errChietKhau").html("<b style='font-size: 20px;'>*</b>");
            return true;
        }
    }
    $("#chietKhau").blur(function () {
        ktChietKhau();
    });

    //kiem tra ngay bat dau
    function ktNgayBatDau() {
        let ngayBatDau = $("#thoiGianBatDau").val();
        if (ngayBatDau == "") {
            $("#errStartDate").html("Không được để trống");
            return false;
        } else {
            $("#errStartDate").html("<b style='font-size: 20px;'>*</b>");
            return true;
        }
    }
    $("#thoiGianBatDau").blur(function (e) {
        ktNgayBatDau();
        ktNgayKetThuc(); // Kiểm tra lại ngày kết thúc khi ngày bắt đầu thay đổi
    });

    //kiem tra ngay ket thuc
    function ktNgayKetThuc() {
        let ngayBatDau = $("#thoiGianBatDau").val();
        let ngayKetThuc = $("#thoiGianKetThuc").val();
    
        if (ngayKetThuc == "") {
            $("#errEndDate").html("Không được để trống");
            return false;
        } else if (new Date(ngayKetThuc) < new Date(ngayBatDau)) {
            $("#errEndDate").html("Ngày kết thúc không được nhỏ hơn ngày bắt đầu");
            return false;
        } else {
            $("#errEndDate").html("<b style='font-size: 20px;'>*</b>");
            return true;
        }
    }
    $("#thoiGianKetThuc").blur(function (e) {
        ktNgayKetThuc();
    });
});



