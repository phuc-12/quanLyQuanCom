$(document).ready(function(){
    function ktTenMA() {
        let tenMA = $("#tenMA").val().trim();
        if(tenMA == "") {
            $("#errTen").html("Tên món không được để trống");
            return false;
        } else {
            $("#errTen").html("");
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
            $("#errSL").html("");
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
            $("#errGia").html("");
            return true;
        } 
    }
    $("#donGia").blur(function(){
        ktgia();
    });

    function kttrangThai() {
        let tt = $("#trangThai").val();
        let btcq = /^[0-1]\d*$/;
        if(tt.length == "") {
            $("#errTT").html("Trạng thái không được để trống");
            $("#trangThai").focus();
            return false;
        } else if (btcq.test(tt)==false) {
            $("#errTT").html("Trạng thái chỉ được 0/1");
            $("#trangThai").focus();
            return false;
        } else {
            $("#errTT").html("");
            return true;
        } 
    }
    $("#trangThai").blur(function(){
        kttrangThai();
    });

    function ktDVT() {
        let dvt = $("#donViTinh").val().trim();
        if (dvt == "") {
            $("#errDVT").html("Đơn vị tinh không được trống");
            return false;
        } else {
            $("#errDVT").html("");
            return true;
        }
    }
    $("#donViTinh").blur(function(e){
        ktDVT();
    });

    function ktmaMA() {
        let maMA = $("#maMA").val();
        if (maMA == "") {
            $("#errMa").html("Mã món ăn không được trống");
            return false;
        } else {
            $("#errMa").html("");
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
            $("#errNL").html("");
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
            $("#errMoTa").html("");
            return true;
        }
    }
    $("#moTa").blur(function(e){
        ktMT();
    });
});




