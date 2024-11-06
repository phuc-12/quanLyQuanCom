$(document).ready(function(){
    function ktSDT () {
        let sdt = $("#txtSDT").val();
        let btcq = /^(03|09|08|07)[0-9]{8}$/;
        if (sdt == "") {
            $("#errSDT").html("Số điện thoại không được trống");
            return false;
        } else if (btcq.test(sdt)) {
            return true;
        } else {
            $("#errSDT").html("Số điện thoại không tồn tại!");
            return false;
        }
    }
    $("#txtSDT").blur(function(e){
        ktSDT();
    });

    function ktpw() {
        let pw = $("#txtPW").val();
        if(pw == "") {
            $("#errPW").html("Chưa nhập mật khẩu!");
            return false;
        }else {
            return true;
        } 
    }
    $("#txtPW").blur(function(){
        ktpw();
    });
});

function login() {
    var sdtDK = localStorage.getItem('soDienThoai');
    var pwDK = localStorage.getItem('pw');

    var sdtDN = document.getElementById('txtSDTDN').value;
    var pwDN = document.getElementById('txtPWDN').value;

    // Kiểm tra thông tin đăng nhập
    if (sdtDN === sdtDK && pwDN === pwDK) {
        alert("Đăng nhập thành công!");
        window.location.href = "home.html";
        return false;
    } else {
        alert("Tên người dùng hoặc mật khẩu không đúng.");
        return false;
    }
}