$(document).ready(function(){
    function ktTDN () {
        let TDN = $("#txtTND").val();
        let btcq = /^[a-zA-Z0-9]{6,}$/;
        if (TDN == "") {
            $("#errTDN").html("Tài Khoản không được trống");
            return false;
        } else if (btcq.test(TDN)) {
            return true;
        } else {
            $("#errTDN").html("Tài khoản tồn tại không tồn tại!");
            return false;
        }
    }
    $("#txtTDN").blur(function(e){
        ktTDN();
    });

    function ktpw() {
        let pw = $("#txtMK").val();
        if(pw == "") {
            $("#errPW").html("Chưa nhập mật khẩu!");
            return false;
        }else {
            return true;
        } 
    }
    $("#txtMK").blur(function(){
        ktpw();
    });
});

function login() {
    var TKDK = localStorage.getItem('username');
    var pwDK = localStorage.getItem('pw');

    var TKDN = document.getElementById('txtTKDN').value;
    var pwDN = document.getElementById('txtPWDN').value;

    // Kiểm tra thông tin đăng nhập
    if (TKDN === TKDK && pwDN === pwDK) {
        alert("Đăng nhập thành công!");
        return false;
    } else {
        alert("Tài khoản người dùng hoặc mật khẩu không đúng.");
        return false;
    }
}