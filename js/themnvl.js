

$(document).ready(function(){
    var i=1;

    var txttenNVL = $("#txttenNVL");
    var tbtenNVL = $("#tbtenNVL");
    function kiemtratenNVL() {
        var rg = /^[^\d]*$/;


        if(txttenNVL.val()==""){
            tbtenNVL.html("Vui lòng nhập tên nguyên vật liệu");
            return false;
        }
        if(!rg.test(txttenNVL.val())){
            tbtenNVL.html("Không chứa số");
            return false;
        }
        tbtenNVL.html("");
        return true;
    }
    txttenNVL.blur(kiemtratenNVL);

    var txtsoluong = $("#txtsoluong");
    var tbsoluong = $("#tbsoluong");
    function kiemtrasoluong() {
        var rgchu = /^([a-zà-ỹ]+)(\s([A-Z]{1})([a-zà-ỹ]+))*$/
        var rg= /^(0|[1-9]\d*)?$/


        if(txtsoluong.val()==""){
            tbsoluong.html("Vui lòng nhập số lượng");
            return false;
        }
        if(rgchu.test(txtsoluong.val())){
            tbsoluong.html("Vui lòng nhập số");
            return false;
        }
        if (txtsoluong.val()== "0") {
            tbsoluong.html("Vui lòng nhập số lượng lớn hơn 0");
            return false;
        }
        if(!rg.test(txtsoluong.val())){
            tbsoluong.html("Giá trị âm không hợp lệ. Hãy nhập số lớn hơn 0.");
            return false;
        }
        tbsoluong.html("");
        return true;
    }
    txtsoluong.blur(kiemtrasoluong);

    var txtdonViTinh = $("#txtdonViTinh");
    var tbdonViTinh = $("#tbdonViTinh");
    function kiemtradonViTinh() {
        var rg = /^[^\d]*$/;


        if(txtdonViTinh.val()==""){
            tbdonViTinh.html("Vui lòng nhập đơn vị tính");
            return false;
        }
        if(!rg.test(txtdonViTinh.val())){
            tbdonViTinh.html("Không chứa số");
            return false;
        }
        tbdonViTinh.html("");
        return true;
    }
    txtdonViTinh.blur(kiemtradonViTinh);
    

    var txtngayNhap = $("#txtngayNhap");
    var tbngayNhap = $("#tbngayNhap");

    function kiemtrangaynhap() {
        var today = new Date(); // Lấy ngày hiện tại
        today.setHours(0, 0, 0, 0); // Đặt giờ, phút, giây về 0 để chỉ so sánh ngày

        var inputDate = new Date(txtngayNhap.val()); // Ngày người dùng nhập

        if (txtngayNhap.val() == "") {
            tbngayNhap.html("Vui lòng nhập ngày.");
            return false;
        }

        if (inputDate <= today) {
            tbngayNhap.html("Ngày nhập phải sau ngày hiện tại.");
            return false;
        }

        tbngayNhap.html(""); // Xóa lỗi nếu hợp lệ
        return true;
    }

    //Gọi hàm kiểm tra khi rời khỏi ô nhập
    txtngayNhap.blur(kiemtrangaynhap);

    var txtngayHetHan = $("#txtngayHetHan");
    var tbngayHetHan = $("#tbngayHetHan");
    var txtngayNhap = $("#txtngayNhap");
    function kiemtrangayHetHan() {
        var today = new Date(); // Lấy ngày hiện tại
        today.setHours(0, 0, 0, 0);
        var ngayHetHan = new Date(txtngayHetHan.val());
        var ngayNhap = new Date(txtngayNhap.val());

        if(txtngayHetHan.val()==""){
            tbngayHetHan.html("Vui lòng nhập ngày");
            return false;
        }
        if (ngayHetHan <= ngayNhap) {
            tbngayHetHan.html("Ngày hết hạn phải sau ngày nhập.");
            return false;
        }
        if (ngayHetHan <= today) {
            tbngayHetHan.html("Ngày hết hạn phải sau ngày hiện tại.");
            return false;
        }
        tbngayHetHan.html("");
        return true;
    }
    txtngayHetHan.blur(kiemtrangayHetHan);

    $("#nut").click(function(){
        if(!kiemtratenNVL() || !kiemtrasoluong() || !kiemtradonViTinh()|| !kiemtrangaynhap()|| !kiemtrangayHetHan()){
            alert("Bạn phải nhập đúng và đủ thông tin")
            return false;
        }
    })
    
    // rang buoc them nvl cua quan ly //

    //kiem tra ten
    function ktTenNVL() {
        let tenNVL = $("#tenNVL").val().trim();
        let btcq = /^[^\d]*$/;
        if(tenNVL.length == 0) {
            $("#errTen").html("Không được để trống");
            $("#tenNVL").focus();
            return false;
        } else if (btcq.test(tenNVL)==false) {
            $("#errTen").html("Không được chứa số");
            $("#tenNVL").focus();
            return false;
        } else {
            $("#errTen").html("<b style='font-size: 20px;'>*</b>");
            return true;
        } 
    }
    $("#tenNVL").blur(function(){
        ktTenNVL();
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

    //kiem tra so luong
    function ktslTon() {
        let slTon = $("#slTon").val();
        let regex = /^[0-9]\d*$/; //chỉ cho phép nhập số >=0 
    
        if (slTon == "") {
            $("#errSLTon").html("Không được để trống");
            return false;
        } else if (!regex.test(slTon)) {
            $("#errSLTon").html("Số lượng chỉ được chứa số và không được âm");
            return false;
        } else {
            $("#errSLTon").html("<b style='font-size: 20px;'>*</b>");
            return true;
        }
    }
    $("#slTon").blur(function () {
        ktslTon();
    });

    //kiem tra đơn vị tính
    function ktDonViTinh() {
        let donViTinh = $("#donViTinh").val();
        let regex = /^[A-Za-zÀ-ỹà-ỹ\s]+$/; //chỉ cho phép nhập chữ và khoảng trắng
    
        if (donViTinh == "") {
            $("#errDVT").html("Không được để trống");
            return false;
        } else if (!regex.test(donViTinh)) {
            $("#errDVT").html("Không chứa số");
            return false;
        } else {
            $("#errDVT").html("<b style='font-size: 20px;'>*</b>");
            return true;
        }
    }
    $("#donViTinh").blur(function () {
        ktDonViTinh();
    });

    //kiem tra ngay het han
    function ktNgayHetHan() {
        let ngayNhap = $("#ngayNhap").val();
        let ngayHetHan = $("#ngayHetHan").val();
        var today = new Date(); // Lấy ngày hiện tại
        today.setHours(0, 0, 0, 0);
    
        if (ngayHetHan == "") {
            $("#errNgayHetHan").html("Không được để trống");
            return false;
        } else if (new Date(ngayHetHan) <= new Date(ngayNhap)) {
            $("#errNgayHetHan").html("Ngày hết hạn phải lớn hơn ngày nhập");
            return false;
        }  else {
            $("#errNgayHetHan").html("<b style='font-size: 20px;'>*</b>");
            return true;
        }
    }
    $("#ngayHetHan").blur(function (e) {
        ktNgayHetHan();
    });
})