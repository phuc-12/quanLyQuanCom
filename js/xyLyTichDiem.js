$(document).ready(function(){
    $('button.thanhtoan , button.thanhtoanchung').on('click',function(){
      var accumulated_points = $('.accumulated-points').text();
      var total_after_calculating_discounts = $('#total-after-calculating-discounts').text();
      var maKh = $('.code-customer').text();
      var url = window.location.origin + '/quanLyQuanCom/controler/xyLyTichDiem.php';
      // thông báo alert(url);
      $.ajax({
        url: url, 
        type: 'POST', 
        data: {
            maKh : maKh,
            accumulated_points: accumulated_points, 
            total_after_calculating_discounts: total_after_calculating_discounts
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