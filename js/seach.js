document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input');
    const resultList = document.getElementById('result-list');
    const items = document.querySelectorAll('.result-item');
  
    searchInput.addEventListener('input', function() {
      const query = searchInput.value.toLowerCase();
  
      // Hiển thị danh sách kết quả khi có tìm kiếm
      resultList.style.display = query ? 'block' : 'none';
  
      items.forEach(function(item) {
        const text = item.textContent.toLowerCase();
        if (text.includes(query)) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });