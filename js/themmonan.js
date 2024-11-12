$(document).ready(function(){
    function ktTenMA() {
        let tenMA = $("#tenMA").val().trim();
        let btcq = /^[a-zA-ZÀ-ỹ\s]+$/;
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
        if (maMA == "") {
            $("#errMa").html("Mã món ăn không được trống");
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
});



