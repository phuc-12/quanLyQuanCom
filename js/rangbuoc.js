$(document).ready(function(){
    function ktTenMA() {
        let tenMA = $("#tenMA").val().trim();
        let btcq = /^[A-Za-z0-9\sÀ-ỹà-ỹ-]+(?:\s-\s[A-Za-z0-9\sÀ-ỹà-ỹ-]+)*$/;
        if(tenMA.length == 0) {
            $("#errTen").html("Tên món không được để trống");
            $("#tenMA").focus();
            return false;
        } else if (btcq.test(tenMA)==false) {
            $("#errTen").html("Tên không hợp lệ");
            $("#tenMA").focus();
            return false;
        } else {
            $("#errTen").html("<b style='font-size: 20px;'>*</b>");
            return true;
        } 
    }
    $("#tenMA").blur(function(){
        ktTenMA();
    });

    function ktsl() {
        let sl = $("#soLuong").val();
        let btcq = /^(?:100|[1-9][0-9]?)$/;
        if(sl.length == 0) {
            $("#errSL").html("Số lượng không được để trống");
            $("#soLuong").focus();
            return false;
        } else if (btcq.test(sl)==false) {
            $("#errSL").html("Số lượng không hợp lệ");
            $("#soLuong").focus();
            return false;
        } else {
            $("#errSL").html("<b style='font-size: 20px;'>*</b>");
            return true;
        } 
    }
    $("#soLuong").blur(function(){
        ktsl();
    });

    function ktgia() {
        let gia = $("#donGia").val();
        let btcq = /^[1-9]\d*$/;
        if(gia.length == "") {
            $("#errGia").html("Giá không được để trống");
            $("#donGia").focus();
            return false;
        } else if (btcq.test(gia)==false) {
            $("#errGia").html("Giá không hợp lệ");
            $("#donGia").focus();
            return false;
        } else {
            $("#errGia").html("<b style='font-size: 20px;'>*</b>");
            return true;
        } 
    }
    $("#donGia").blur(function(){
        ktgia();
    });

    

    function ktDVT() {
        let dvt = $("#donViTinh").val().trim();
        if (dvt == "") {
            $("#errDVT").html("Đơn vị tinh không được trống");
            return false;
        } else {
            $("#errDVT").html("<b style='font-size: 20px;'>*</b>");
            return true;
        }
    }
    $("#donViTinh").blur(function(e){
        ktDVT();
    });

    function ktmaMA() {
        let maMA = $("#maMA").val();
        let regex = /^\d+$/; //chi được điền số
        if (maMA == "") {
            $("#errMa").html("Mã không được trống");
            return false;
        } else if (!regex.test(maMA)) {
            $("#errMa").html("Mã không hợp lệ");
            return false;
        } else {
            $("#errMa").html("<b style='font-size: 20px;'>*</b>");
            return true;
        }

    }
    $("#maMA").blur(function(e){
        ktmaMA();
    });

    function ktNL() {
        let NL = $("#nguyenLieu").val();
        if (NL == "") {
            $("#errNL").html("Nguyên liệu không được trống");
            return false;
        } else {
            $("#errNL").html("<b style='font-size: 20px;'>*</b>");
            return true;
        }
    }
    $("#nguyenLieu").blur(function(e){
        ktNL();
    });

    function ktMT() {
        let MT = $("#moTa").val();
        if (MT == "") {
            $("#errMoTa").html("Mô tả không được trống");
            return false;
        } else {
            $("#errMoTa").html("<b style='font-size: 20px;'>*</b>");
            return true;
        }
    }
    $("#moTa").blur(function(e){
        ktMT();
    });

    function ktHoTen() {
        let hoTen = $("#hoTen").val().trim();
        let btcq = /^[a-zA-ZÀ-ỹ\s]+$/;
        if(hoTen.length == 0) {
            $("#errHoTen").html("Họ tên không được để trống");
            $("#hoTen").focus();
            return false;
        } else if (btcq.test(hoTen)==false) {
            $("#errHoTen").html("Tên không hợp lệ");
            $("#hoTen").focus();
            return false;
        } else {
            $("#errHoTen").html("<b style='font-size: 20px;'>*</b>");
            return true;
        } 
    }
    $("#hoTen").blur(function(){
        ktHoTen();
    });

    function ktNS() {
        let ngaySinh = $("#ngaySinh").val().trim();
        let btcq = /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/(19|20)\d{2}$/;
        if(ngaySinh.length == 0) {
            $("#errNgaySinh").html("Ngày sinh không được để trống");
            $("#ngaySinh").focus();
            return false;
        } else if (btcq.test(ngaySinh)==false) {
            $("#errNgaySinh").html("Ngày sinh không hợp lệ");
            $("#ngaySinh").focus();
            return false;
        } else {
            $("#errNgaySinh").html("<b style='font-size: 20px;'>*</b>");
            return true;
        } 
    }
    $("#ngaySinh").blur(function(){
        ktNS();
    });

    function ktmaNV() {
        let maNV = $("#maNV").val();
        let regex = /^\d+$/; //chi được điền số
        if (maNV == "") {
            $("#errMaNV").html("Mã không được trống");
            return false;
        } else if (!regex.test(maNV)) {
            $("#errMaNV").html("Mã không hợp lệ");
            return false;
        } else {
            $("#errMaNV").html("<b style='font-size: 20px;'>*</b>");
            return true;
        }

    }
    $("#maNV").blur(function(e){
        ktmaNV();
    });

    function ktmaKH() {
        let maKH = $("#maKH").val();
        let regex = /^\d+$/; //chi được điền số
        if (maKH == "") {
            $("#errMaKH").html("Mã không được trống");
            return false;
        } else if (!regex.test(maKH)) {
            $("#errMaKH").html("Mã không hợp lệ");
            return false;
        } else {
            $("#errMaKH").html("<b style='font-size: 20px;'>*</b>");
            return true;
        }

    }
    $("#maKH").blur(function(e){
        ktmaKH();
    });

    function ktdiemTL() {
        let diemTL = $("#diemTL").val();
        let regex = /^\d+$/; //chi được điền số
        if (diemTL == "") {
            $("#errdiemTL").html("Mã không được trống");
            return false;
        } else if (!regex.test(diemTL)) {
            $("#errdiemTL").html("Mã không hợp lệ");
            return false;
        } else {
            $("#errdiemTL").html("<b style='font-size: 20px;'>*</b>");
            return true;
        }

    }
    $("#diemTL").blur(function(e){
        ktdiemTL();
    });

    function ktTrangThai() {
        let trangThai = $("#trangThai").val();
        if (trangThai == "") {
            $("#errTrangThai").html("Không được để trống");
            return false;
        } else if (trangThai != "1" && trangThai != "0") {
            $("#errTrangThai").html("Chỉ được nhập 1 hoặc 0");
            return false;
        } else {
            $("#errTrangThai").html("<b style='font-size: 20px;'>*</b>");
            return true;
        }
    }
    $("#trangThai").blur(function () {
        ktTrangThai();
    });
});



