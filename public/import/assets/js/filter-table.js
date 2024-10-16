function applyFilters() {
    var categoryValue = document.getElementById('categoryFilter').value.toLowerCase();
    var stockValue = document.getElementById('stockFilter').value.toLowerCase();
    var rows = document.querySelectorAll('#datatable tbody tr');
  
    rows.forEach(function(row) {
        var category = row.cells[2].textContent.toLowerCase();
        var stockStatus = row.querySelector('td:nth-child(7) .badge').textContent.toLowerCase();
  
        var categoryMatch = categoryValue === 'all' || category === categoryValue;
        var stockMatch = stockValue === 'all' || stockStatus.includes(stockValue);
  
        if (categoryMatch && stockMatch) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
  }
  
  document.getElementById('categoryFilter').addEventListener('change', applyFilters);
  document.getElementById('stockFilter').addEventListener('change', applyFilters);
  
  function deleteRow(button) {
    
    var row = button.closest('tr');
    row.remove();
  
  }