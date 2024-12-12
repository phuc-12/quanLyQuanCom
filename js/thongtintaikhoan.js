    var hoTen = localStorage.getItem('hoTen');
    var email = localStorage.getItem('email');
    var soDienThoai = localStorage.getItem('soDienThoai');
    var diaChi = localStorage.getItem('diaChi');

    // Hiển thị thông tin
    document.getElementById('hoTen').innerText += hoTen;
    document.getElementById('email').innerText += email;
    document.getElementById('soDienThoai').innerText += soDienThoai;
    document.getElementById('diaChi').innerText += diaChi;