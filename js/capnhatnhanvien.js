$(document).ready(function(){
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
            $("#errHoTen").html("");
            return true;
        } 
    }
    $("#hoTen").blur(function(){
        ktHoTen();
    });

    // function ktNS() {
    //     let ngaySinh = $("#ngaySinh").val().trim();
    //     let btcq = /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/(19|20)\d{2}$/;
    //     if(ngaySinh.length == 0) {
    //         $("#errNgaySinh").html("Ngày sinh không được để trống");
    //         $("#ngaySinh").focus();
    //         return false;
    //     } else if (btcq.test(ngaySinh)==false) {
    //         $("#errNgaySinh").html("Ngày sinh không hợp lệ");
    //         $("#ngaySinh").focus();
    //         return false;
    //     } else {
    //         $("#errNgaySinh").html("");
    //         return true;
    //     } 
    // }
    // $("#ngaySinh").blur(function(){
    //     ktNS();
    // });

    function ktmaNV() {
        let maNV = $("#maNV").val();
        if (maNV == "") {
            $("#errMa").html("Mã món ăn không được trống");
            return false;
        } else {
            $("#errMa").html("");
            return true;
        }
    }
    $("#maNV").blur(function(e){
        ktmaNV();
    });

    
});



