<?php
include_once("../../model/chucnangnhanvien.php");
$tmdt = new tmdt();
$conn = $tmdt->connect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orderDetails = json_decode(file_get_contents("php://input"));

    if ($orderDetails) {
        $invoiceCode = $orderDetails->invoiceCode;
        $products = $orderDetails->products;
        $maMA = $orderDetails->maMA;
        $maNV = $orderDetails-> employee;

        // Lấy thông tin đơn hàng vào bảng `hoadon`
        $sqlOrder = "INSERT INTO hoadon(maHD, maKH, trangThai,trangThaiGH, ngayThang,img) VALUES ('$invoiceCode', 111, '0','0', now(),'không có')";

        if ($conn->query($sqlOrder)) {
            foreach ($products as $product) {
                $sqlDetails = "INSERT INTO chitiethoadon( maMA,maHD,maKH,maNV, soLuong,moTa,uuDai,chietKhau) VALUES ('{$product->maMA}', '$invoiceCode',111,'{$maNV}','{$product->quantity}', ' ', 0,  0)";
                if (!$conn->query($sqlDetails)) echo "Data error!"; 
            }
            echo "Order Confirmation Successful";
        }
    }
        
}
//
?>
