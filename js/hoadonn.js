
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
    const mamon = productRow.cells[0].textContent;
    const productPrice = parseFloat(productRow.cells[2].textContent.replace(' VND', '').replace(',', ''));

    const existingItem = invoiceItems.find(item => item.id === id);

    if (existingItem) {
        existingItem.soLuong++;
    } else {
        invoiceItems.push({
            id,
            maMA: mamon,
            tenMA: productName,
            donGia: productPrice,
            soLuong: 1
        });
    }

    // Tính tổng số lượng sản phẩm thực tế trong giỏ hàng
    const totalQuantity = invoiceItems.reduce((total, item) => {
        if (item.id !== '21') {
            return total + item.soLuong;
        }
        return total;
    }, 0);

    // Kiểm tra nếu tổng số lượng món trong giỏ hàng >= 3 thì tặng món miễn phí tặng món "Rau câu" (mã 12)
    if (totalQuantity >= 3 && !invoiceItems.some(item => item.id === '21')) {
        // Thêm món miễn phí vào giỏ hàng
        invoiceItems.push({
            id: '21',
            maMA: '21',
            tenMA:'Rau câu truyền thống miễn phí' ,
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
        const isFree = item.id === '21' ? 'Có' : 'Không';  // Hiển thị 'Có' nếu món này miễn phí

        invoiceBody.innerHTML += `
            <tr>
                <td>${index + 1}</td>
                 <td>${item.maMA}</td>
                <td>${item.tenMA}</td>
                <td>${item.soLuong}</td>
                <td>${totalPrice.toFixed(2)} VND</td>
                <td>${isFree}</td>  <!-- Hiển thị thông báo miễn phí ở đây -->
                <td class='huy-btn'><button onclick="removeItemFromCart(${item.id})"> - </button></td>
            </tr>
        `;
    });
    
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
            if (item.id !== '21') {
                return total + item.soLuong;
            }
            return total; // Không tính món miễn phí vào tổng số lượng
        }, 0);

        // Kiểm tra nếu tổng số lượng món trong giỏ hàng < 3 thì xóa món miễn phí
        if (totalQuantity < 3) {
            // Nếu món miễn phí có trong giỏ hàng, xóa nó
            invoiceItems = invoiceItems.filter(item => item.id !== '21');
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
// // Hàm hủy hóa đơn và quay lại trang quản lý đơn hàng
// Hàm xử lý khi nhấn nút Hủy
document.querySelector('.huy').addEventListener('click', function () {
    // Hiển thị xác nhận trước khi hủy
    const confirmCancel = confirm('Bạn có chắc chắn muốn hủy ko?');
    const employee = document.getElementById('employee').value;
    if (confirmCancel) {
        // Xóa toàn bộ sản phẩm trong hóa đơn
        const invoiceBody = document.getElementById('invoiceBody');
        while (invoiceBody.firstChild) {
            invoiceBody.removeChild(invoiceBody.firstChild);

        }

        // Đặt lại các trường dữ liệu về mặc định
        document.getElementById('employee').value = '';
        localStorage.removeItem('invoiceItems');
        alert('Hóa đơn đã được hủy !');
        window.location.href = `Quanlidonhang.php?id=${employee}`;
    }
});

function confirmOrder() {
    
    const invoiceCode = document.getElementById('invoice-code').value;
    const employee = document.getElementById('employee').value;
    const customerCode = document.getElementById('customerCode').value;
    // Kiểm tra mã nhân viên đã được nhập
    if (!customerCode) {
        alert('Thông tin khách hàng còn thiếu. Nhập "111" nếu khách hàng chưa có mã khách hàng.');
        return;
    }
    if (!employee) {
        alert('Bạn không có quyền tạo đơn hàng!');
        return;
    }

    let products = [];
    let uudai = 0;
    let rows = document.querySelectorAll("#invoiceBody tr");

    rows.forEach((row, index) => {
        let maMA = row.querySelector("td:nth-child(2)").innerText;
        let productName = row.querySelector("td:nth-child(3)").innerText;
        let quantity = row.querySelector("td:nth-child(4)").innerText;
        let total = row.querySelector("td:nth-child(5)").innerText;
           // Kiểm tra món ưu đãi 
           if (parseInt(maMA)=='21') {
            uudai = 1;
        }
        products.push({
            maMA: parseInt(maMA),
            productName: productName,
            quantity: parseInt(quantity),
            total: parseFloat(total)
        });
    });
    // Kiểm tra nếu danh sách sản phẩm rỗng
    if (products.length === 0) {
        alert('Đơn hàng rỗng. Chưa thể tạo đơn hàng.');
        return;
    }
    const orderDetails = {
        invoiceCode: invoiceCode,
        employee: parseInt(employee), 
        customerCode: parseInt(customerCode),
        uudai:uudai,
        products: products
    };
    
    fetch('themhoadon.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(orderDetails)
    }).then(response => response.text())
       .then(result => console.log(result));
       localStorage.removeItem('invoiceItems');
       loadCartFromLocalStorage();  // Gọi hàm này để render lại giỏ hàng
       alert('Đơn hàng đã được thêm thàng công.');
       window.location.href = `Quanlidonhang.php?id=${employee}`;
}
