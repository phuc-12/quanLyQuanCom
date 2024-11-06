<?php
include_once('clsupload.php');
$p = new upload();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h3 align="center"> Thêm sản phẩm mới</h3>
<form method="post" enctype="multipart/form-data" name="form1" id="form1">
  <div style="text-align: center">
    <p>Mã Sản Phẩm
      <input type="text" name="txtmasp" id="txtmasp">
    </p>
    <p>
      <label for="txttensp">Tên sản phẩm</label>
      <input type="text" name="txttensp" id="txttensp">
    </p>
    <p>
      <label for="txtgia">Giá Sản phẩm:</label>
      <input type="text" name="txtgia" id="txtgia">
    </p>
    <p>
      <label for="fileanh">Ảnh:</label>
      <input type="file" name="fileanh" id="fileanh">
    </p>
    <p>
      <label for="txtMaHang">Select:</label>
      <select name="txtMaHang" id="txtMaHang">
        <option value="1">1 - Cocoon</option>
        <option value="2">2 - L'oreal</option>
        <option value="3">3 - Maybeline</option>
        <option value="4">4 - La Roche-Posay</option>
		<option value="5">5 - Vaseline</option>
      </select>
    </p>
    <p>
      <input type="submit" name="btnthem" id="btnthem" value="Thêm">
      <input type="reset" name="reset" id="reset" value="Reset">
    </p>
	<?php
	switch($_REQUEST['btnthem'])
	{
		case 'Thêm':
		{
			$MaSP=$_REQUEST['txtmasp'];
			$TenSP =$_REQUEST['txttensp'];
			$Gia=$_REQUEST['txtgia'];
			$MaHang=$_REQUEST['txtMaHang'];
			if ($MaSP !='' && $TenSP !='' && $Gia!=''&& $MaHang !='')
			{
				$name=$_FILES['fileanh']['name'];
				$type=$_FILES['fileanh']['type'];
				$tmp_name=$_FILES['fileanh']['tmp_name'];
				echo $name;
				if ($name !='')
				{
					if ($type =='image/jpeg' || $type =='image/png')
					{
						if($p->uploadfile($name,$tmp_name,"view/SanPham/img",$MaSP,$MaHang))
						{	
							//$name ='AnhSanPham'.$MaSP.'.jpg';
							$conn = new mysqli('localhost','nga','123456','web_tieuluan');
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							}
								echo "Ket noi tai khoan thanh cong <br>";
							if($conn)
							{
								$tenanh=$MaHang.$MaSP.'.jpg';
								$str = "INSERT INTO sanpham (AnhSanPham,IDSanPham,TenSanPham,Gia,IDThuongHieu) VALUES ('$tenanh', '$MaSP' , N'$TenSP' , $Gia ,$MaHang)";
								if ($conn->query($str) === TRUE) {
									if ($conn->affected_rows > 0) {
										echo "<script>alert('Thêm sản phẩm thành công!');</script>";
									} else {
										echo "<script>alert('không có  sản phẩm nào được thêm!');</script>";
									}
								} 
								else 
								{
									echo "Lỗi khi thêm sản phẩm" . $conn->error;
								}
								$conn->close();
							}
						}
						else
						{
							echo 'upload hình khong thanh cong';
						}
					}
					else
					{
						echo'chỉ được upload ảnh ';
					}
				}
				else
				{
					echo'chua tai ảnh lên!';
					return 0;	
				}
			}
			else
			{
				echo"Vui lòng nhập đủ thông tin!!!";
			}
			break;
		}
	  }
	  ?>
  </div>
</form>
</body>
</html>