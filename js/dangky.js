$(document).ready(function(){
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

    function ktemail() {
        let email = $("#txtEmail").val().trim();
        let btcq = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if(email.length == 0) {
            $("#errEmail").html("Email không được để trống");
            $("#txtEmail").focus();
            return false;
        } else if (btcq.test(email)==false) {
            $("#errEmail").html("Email không hợp lệ");
            $("#txtEmail").focus();
            return false;
        } else {
            $("#errEmail").html("(*)");
            return true;
        } 
    }
    $("#txtEmail").blur(function(){
        ktemail();
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

    function ktpw() {
        let pw = $("#txtPW").val();
        if(pw == "") {
            $("#errPW").html("Mật khẩu không được để trống");
            return false;
        }else {
            $("#errPW").html("(*)");
            return true;
        } 
    }
    $("#txtPW").blur(function(){
        ktpw();
    });

    function ktpwa() {
        let pwa = $("#txtPWA").val();
        let pw = $("#txtPW").val();
        if(pwa == "") {
            $("#errPWA").html("Nhập lại mật khẩu");
            return false;
        } else if (pwa !== pw) {
            $("#errPWA").html("Mật khẩu không trùng khớp");
            return false;
        } else {
            $("#errPWA").html("(*)");
            return true;
        } 
    }
    $("#txtPWA").blur(function(){
        ktpwa();
    });

    $("#btnDangky").click(function(e){
        if (ktHoTen() && ktemail() && ktSDT() && ktpw() && ktpwa()) {
            register();
        } else {
            alert("Thông tin không hợp lệ");
        }
    })
});

function register() {
    var hoTen = document.getElementById('txtHoTen').value;
    var email = document.getElementById('txtEmail').value;
    var soDienThoai = document.getElementById('txtSDT').value;
    var diaChi = document.getElementById('txtDiaChi').value;
    var pw = document.getElementById('txtPW').value;

    // Lưu thông tin đăng ký vào local storage
    localStorage.setItem('hoTen', hoTen);
    localStorage.setItem('email', email);
    localStorage.setItem('soDienThoai', soDienThoai);
    localStorage.setItem('diaChi', diaChi);
    localStorage.setItem('pw', pw);

    alert("Đăng ký thành công!");
    window.location.href = "dangnhap.html";
    return false;
}


