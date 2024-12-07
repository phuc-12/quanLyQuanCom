$(document).ready(function(){
    // Kiểm tra thông tin người dùng khi blur ra khỏi trường input


    function ktTDN() {
        let TDN = $("#username").val();
        let btcq = /^[a-zA-Z0-9]{6,}$/;
        if (TDN == "") {
            $("#errTDN").html("Tài khoản không được trống");
            return false;
        } else if (!btcq.test(TDN)) {
            $("#errTDN").html("Tài khoản phải chứa ít nhất 6 ký tự");
            return false;
        } else {
            $("#errTDN").html("");
            return true;
        }
    }
    $("#username").blur(function() {
        ktTDN();
    });

    function ktemail() {
        let email = $("#email").val().trim();
        let btcq = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if(email.length == 0) {
            $("#errEmail").html("Email không được để trống");
            $("#email").focus();
            return false;
        } else if (!btcq.test(email)) {
            $("#errEmail").html("Email không hợp lệ");
            $("#email").focus();
            return false;
        } else {
            $("#errEmail").html("");
            return true;
        }
    }
    $("#email").blur(function(){
        ktemail();
    });
    function ktPassword() {
        let pw = $("input[name='password']").val();
        if (pw == "") {
            $("#errPW").html("Mật khẩu không được để trống");
            return false;
        } else if (pw.length < 6) {
            $("#errPW").html("Mật khẩu phải chứa ít nhất 6 ký tự");
            return false;
        } else {
            $("#errPW").html("");
            return true;
        }
    }
    
    $("input[name='password']").blur(function () {
        ktPassword();
    });
    
    function ktSDT() {
        let sdt = $("#sdt").val();
        let btcq = /^(03|09|08|07)[0-9]{8}$/;
        if (sdt == "") {
            $("#errSDT").html("Số điện thoại không được trống");
            return false;
        } else if (!btcq.test(sdt)) {
            $("#errSDT").html("Số điện thoại có định dạng là 10 con số trong đó luôn bắt đầu 09, 03, 08, 07.");
            return false;
        } else {
            $("#errSDT").html("");
            return true;
        }
    }
    $("#sdt").blur(function(){
        ktSDT();
    });
    $("#btnsua").click(function(){
        if(!ktSDT() || !ktemail() || !ktTDN() || !ktPassword()){
            alert("Bạn phải nhập đầy đủ thông tin")
            return false;
        }
    })

});
