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
        $sqlOrder = "INSERT INTO hoadon(maHD, maKH, trangThai, ngayThang) VALUES ('$invoiceCode', 213, '1', CURDATE())";

        if ($conn->query($sqlOrder)) {
            foreach ($products as $product) {
                $sqlDetails = "INSERT INTO chitiethoadon( maMA,maHD, soLuong,moTa,uuDai,chietKhau,maKH,trangThaiGH,maNV) VALUES ('{$product->maMA}', '$invoiceCode', '{$product->quantity}', ' ', 0, 0, 213, 0, '{$maNV}')";
                if (!$conn->query($sqlDetails)) echo "Data error!"; 
            }
            echo "Order Confirmation Successful";
        }
    }
}
?>
