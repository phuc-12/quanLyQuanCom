
let invoiceItems = [];

// Lưu giỏ hàng vào localStorage
function saveCartToLocalStorage() {
    localStorage.setItem('invoiceItems', JSON.stringify(invoiceItems));
}

// Tải giỏ hàng từ localStorage
function loadCartFromLocalStorage() {
    const savedItems = localStorage.getItem('invoiceItems');
    if (savedItems) {
        invoiceItems = JSON.parse(savedItems);
        renderInvoiceTable();
    }
}

// Hàm thêm sản phẩm vào giỏ hàng
function addToCart(id) {
    const productRow = document.querySelector(`tr[data-id="${id}"]`);
    const productName = productRow.cells[1].textContent;
    const productPrice = parseFloat(productRow.cells[2].textContent.replace(' VND', '').replace(',', ''));

    const existingItem = invoiceItems.find(item => item.id === id);

    if (existingItem) {
        existingItem.soLuong++;
    } else {
        invoiceItems.push({
            id,
            tenMA: productName,
            donGia: productPrice,
            soLuong: 1
        });
    }

    // Tính tổng số lượng sản phẩm thực tế trong giỏ hàng
    const totalQuantity = invoiceItems.reduce((total, item) => {
        if (item.id !== '12') {
            return total + item.soLuong;
        }
        return total;
    }, 0);

    // Kiểm tra nếu tổng số lượng món trong giỏ hàng >= 3 thì tặng món miễn phí tặng món "Rau câu" (mã 12)
    if (totalQuantity >= 3 && !invoiceItems.some(item => item.id === '12')) {
        // Thêm món miễn phí vào giỏ hàng
        invoiceItems.push({
            id: '12',
            tenMA:'Rau câu truyền thống' ,
            donGia: 0, // Giá trị của món miễn phí là 0
            soLuong: 1
        });

        alert(`Bạn đã mua đủ 3 món, món "Rau câu" được tặng miễn phí!`);
    }

    saveCartToLocalStorage();
    renderInvoiceTable();
}


// Render giỏ hàng lên bảng hóa đơn
function renderInvoiceTable() {
    const invoiceBody = document.getElementById('invoiceBody');
    invoiceBody.innerHTML = ''; // Xóa các hàng cũ

    let total = 0;
    invoiceItems.forEach((item, index) => {
        const totalPrice = item.donGia * item.soLuong;
        total += totalPrice;

        // Kiểm tra xem món này có phải là món miễn phí không
        const isFree = item.id === '12' ? 'Có' : 'Không';  // Hiển thị 'Có' nếu món này miễn phí

        invoiceBody.innerHTML += `
            <tr>
                <td>${index + 1}</td>
                <td>${item.tenMA}</td>
                <td>${item.soLuong}</td>
                <td>${totalPrice.toFixed(2)} VND</td>
                <td>${isFree}</td>  <!-- Hiển thị thông báo miễn phí ở đây -->
                <td class='huy-btn'><button onclick="removeItemFromCart(${item.id})"> - </button></td>
            </tr>
        `;
    });

    document.getElementById('total').textContent = `Tổng cộng: ${total.toFixed(2)} VND`;
}


// Hàm giảm số lượng sản phẩm trong giỏ hàng
// Hàm giảm số lượng sản phẩm trong giỏ hàng
function removeItemFromCart(id) {
    const item = invoiceItems.find(item => item.id === id);

    if (item) {
        // Giảm số lượng sản phẩm nếu số lượng lớn hơn 1
        if (item.soLuong > 1) {
            item.soLuong--;
        } else {
            // Nếu số lượng còn lại là 1, xóa sản phẩm khỏi giỏ hàng
            invoiceItems = invoiceItems.filter(item => item.id !== id);
        }

        // Tính tổng số lượng sản phẩm trong giỏ hàng sau khi thay đổi
        const totalQuantity = invoiceItems.reduce((total, item) => {
            if (item.id !== '12') {
                return total + item.soLuong;
            }
            return total; // Không tính món miễn phí vào tổng số lượng
        }, 0);

        // Kiểm tra nếu tổng số lượng món trong giỏ hàng < 3 thì xóa món miễn phí
        if (totalQuantity < 3) {
            // Nếu món miễn phí có trong giỏ hàng, xóa nó
            invoiceItems = invoiceItems.filter(item => item.id !== '12');
        }

        // Lưu giỏ hàng vào localStorage và cập nhật giao diện
        saveCartToLocalStorage();
        renderInvoiceTable();
    }
}

// Khi trang tải, hãy tải giỏ hàng từ localStorage
document.addEventListener('DOMContentLoaded', function() {
    loadCartFromLocalStorage();
});
// Hàm hủy hóa đơn và quay lại trang quản lý đơn hàng
function cancelInvoice() {
    // Xóa giỏ hàng khỏi localStorage
    localStorage.removeItem('invoiceItems');
    
    // Quay lại trang quản lý đơn hàng
    window.location.href = "quanlidonhang.php"; // Điều hướng về trang quản lý đơn hàng
}

// Thêm sự kiện cho nút "Hủy"
document.querySelector('.actions button:nth-child(2)').addEventListener('click', cancelInvoice);
