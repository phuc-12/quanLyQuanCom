

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
    
})