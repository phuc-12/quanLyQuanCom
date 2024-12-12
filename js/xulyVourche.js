$(document).ready(function() {
    $('#khuyenMaiKH').change(function() {
        var total_price = $('#totalPrice').data('value'); 
        var makM = $('#khuyenMaiKH').val(); 
        var url = window.location.origin + '/quanLyQuanCom/controler/xulyVocher.php';
        // alert(url);
        $.ajax({
            url: url, 
            type: 'POST', 
            data: {
                total_price: total_price, 
                makM: makM
            },
             dataType: 'json',  
            success: function(response) {
                console.log(response); 
                $('#discount').text(response.discount);
                $('#total-sau-giamgia').text(response.tongTienSauGiam);
            },
            // thông báo lỗi
            error: function(xhr, status, error) {
                console.error('Có lỗi khi gửi dữ liệu:', error);
            }
        });
    });
});


