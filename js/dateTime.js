function updateDate() {
    const today = new Date(); // Lấy ngày hiện tại
    const options = { year: 'numeric', month: '2-digit', day: '2-digit' }; // Định dạng ngày tháng năm
    const formattedDate = today.toLocaleDateString('vi-VN', options); // Định dạng theo ngôn ngữ Việt Nam
    document.getElementById('currentDate').textContent = formattedDate; // Hiển thị lên giao diện
}

// Gọi hàm khi trang được tải
window.onload = updateDate;
