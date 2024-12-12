<?php

    include_once("ketnoi.php");
    class MMonAnTrangChu {
        public function SelectAllMonMan() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from monan where maLoaiMA = 1 limit 5";
                $tblMA = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblMA;
            }else{
                return false;
            }
        }
        public function SelectAllMonChay() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from monan where maLoaiMA = 2 limit 5";
                $tblMA = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblMA;
            }else{
                return false;
            }
        }
        public function SelectAllDoUong() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from monan where maLoaiMA = 3 limit 5";
                $tblMA = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblMA;
            }else{
                return false;
            }
        }
        public function SelectAllTrangMieng() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from monan where maLoaiMA = 4 limit 5";
                $tblMA = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblMA;
            }else{
                return false;
            }
        }
        public function SelectFoodDetail() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from monan where ";
                $tblMA = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblMA;
            }else{
                return false;
            }
        }
        public function SelectAllTenMonAnTheoLoai($idLoai) {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select tenMA from monan where maLoaiMA = $idLoai";
                $tblMA = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblMA;
            }else{
                return false;
            }
        }

        public function searchMonAn($searchTerm)
    {
        // Create a new database connection object
        $p = new clsKetNoi();
        $conn = $p->moketnoi();
        $conn->set_charset('utf8'); // Set the charset for the connection

        // If the connection is established
        if ($conn) {
            // Create a SQL query to search for dishes with the given search term
            $str = "SELECT * FROM monan WHERE tenMA LIKE '%$searchTerm%'";

            $result = $conn->query($str);
            // Close the connection
            $p->dongketnoi($conn);

            // Return the result as an associative array
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false; // Return false if connection fails
        }
    }
    }
?>