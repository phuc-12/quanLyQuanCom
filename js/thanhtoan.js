$(document).ready(function(){
    var i = 1;

    function ktHoTen() {
        let hoTen = $("#txtHoTen").val().trim();
        let btcq = /^([A-Z][a-z]* )*([A-Z][a-z]*)$/;
        if(hoTen.length == 0) {
            $("#errHoTen").html("Họ tên không được để trống");
            $("#txtHoTen").focus();
            return false;
        } else if (btcq.test(hoTen)==false) {
            $("#errHoTen").html("Tên không hợp lệ");
            $("#txtHoTen").focus();
            return false;
        } else {
            $("#errHoTen").html("(*)");
            return true;
        } 
    }
    $("#txtHoTen").blur(function(){
        ktHoTen();
    });

    function ktSDT () {
        let sdt = $("#txtSDT").val();
        let btcq = /^(03|09|08|07)[0-9]{8}$/;
        if (sdt == "") {
            $("#errSDT").html("Số điện thoại không được trống");
            return false;
        } else if (btcq.test(sdt)) {
            $("#errSDT").html("(*)");
            return true;
        } else {
            $("#errSDT").html("Số điện thoại có định dạng là 10 con số trong đó luôn bắt đầu 09, 03, 08, 07.");
            return false;
        }
    }
    $("#txtSDT").blur(function(e){
        ktSDT();
    });

    function ktDiaChi() {
        let diaChi = $("#txtDiaChi").val();
        if (diaChi == "") {
            $("#errDiaChi").html("Địa chỉ không được trống");
            return false;
        } else {
            $("#errDiaChi").html("(*)");
            return true;
        }
    }
    $("#txtDiaChi").blur(function(e){
        ktDiaChi();
    });

    $("#btnThanhToan").click(function(e){
        if (ktHoTen() && ktSDT() && ktDiaChi()) {
            let hoTen = $("#txtHoTen").val();
            let sdt = $("#txtSDT").val();
            let diaChi = $("#txtDiaChi").val();
            let tdNew = "<tr><td>" + (i++) + "</td><td>" + hoTen + "</td><td>" + sdt + "</td><td>" + diaChi + "</td><td>" + "27/11/2023" + "</td><td>" + "Đang kiểm tra đơn" + "</td></tr>";
            
            $("#tableDS").append(tdNew);
            $("#modalDH").modal("hide");
        
            alert("Thanh toán thành công");
        } else {
            alert("Thông tin không hợp lệ");
        }
    })

})