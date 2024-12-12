$(document).ready(function(){
    $('button.thanhtoan , button.thanhtoanchung').on('click',function(){
      var diemTichLuy = $('.diemTL').text();
      var tongTienSauGiam = $('#total-sau-giamgia').text();
      var maKh = $('.maKhHang').text();
      var url = window.location.origin + '/quanLyQuanCom/controler/xyLyTichDiem.php';
      // thông báo alert(url);
      $.ajax({
        url: url, 
        type: 'POST', 
        data: {
            maKh : maKh,
            diemTichLuy: diemTichLuy, 
            tongTienSauGiam: tongTienSauGiam
        },
         dataType: 'json',  
        success: function(response) {
            console.log(response); 
        },
        // thông báo lỗi
        error: function(xhr, status, error) {
            console.error('Có lỗi khi gửi dữ liệu:', error);
        }
    });
    });
});