<?php
    if(isset($_GET['ThemMonAn']))
    {
        include("controler/cLoaiMon.php");
        $p = new CLoaiMon();
        $tblLM = $p->GetLM();
        if(!$tblLM)
        {
            echo 'Khong ket noi duoc';
        }
        elseif($tblLM==-1)
        {
            echo 'chua co du lieu';
        }
        else
        {
            echo '  ';
        

        }
    }
    if(isset($_POST["btnThem"])){
        $maMon=$_POST["maMon"];
        $tenMon=$_POST["tenMon"];
        $soLuong=$_POST["soLuong"];
        $donViTinh=$_POST["donViTinh"];
        $gia=$_POST["gia"];
        $maLoaiMon=$_POST["maLoaiMon"];
        $moTa=$_POST["moTa"];
        $hinhAnh=$_FILES["hinhAnh"]["name"];
        if($gia > 0)
        {
            if($_FILES["hinhAnh"]["type"]=="image/png" || $_FILES["hinhAnh"]["type"]=="image/jpeg" || $_FILES["hinhAnh"]["type"]=="image/jpg")
            {
                switch($maLoaiMon)
                {
                    case 1: {$tenLoaiMon="monman"; break;}
                    case 2: {$tenLoaiMon="monchay"; break;}
                    case 3: {$tenLoaiMon="trangmieng"; break;}
                    case 4: {$tenLoaiMon="douong"; break;}
                }
                if(move_uploaded_file($_FILES["hinhAnh"]["tmp_name"],"img/".$tenLoaiMon."/".$hinhanh))
                {
                    include_once("controler/cMonAn.php");
                    $p = new CMonAn();
        
                    $result = $p->themMA($maMon,$tenMon,$soLuong,$donViTinh,$gia,$moTa,$maLoaiMon,$hinhAnh);
                    if ($result){
                        echo "<scrip>alert('Thêm thành công');</scrip>";
                    }else{
                        echo "<scrip>alert('Thêm thất bại');</scrip>";
                    }
                    
                }else
                    echo "<scrip>alert('Upload thất bại');</scrip>";
            }
            else{
                echo "<scrip>alert('Chỉ chấp nhận loại file ảnh');</scrip>";
            }
        }
        else
            echo "<scrip>alert('Giá không được số âm');</scrip>";
    }
?>