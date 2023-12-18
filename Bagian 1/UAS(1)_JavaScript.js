document.addEventListener('DOMContentLoaded', function () {
    
    document.getElementById('dataForm').addEventListener('submit', function (event) {
      event.preventDefault(); 
  
      if (validateForm()) {
        processData();
      }
    });
  
    document.getElementById('hobi').addEventListener('change', function () {
      alert('Hobi terpilih');
    });
  
    function validateForm() {
      var name = document.getElementById('name').value;
      var umur = document.getElementById('umur').value;
  
      if (name === '' || umur === '') {
        alert('Name and Umur harus dipilih');
        return false;
      }
      return true;
    }
  
    function processData() {
      var name = document.getElementById('name').value;
      var umur = document.getElementById('umur').value;
      var hobi = document.getElementById('hobi').checked ? 'Membaca' : 'Menulis';
      var jeniskelamin = document.querySelector('input[name="kelas"]:checked').value;
  
      var newRow = document.createElement('tr');
  
      newRow.innerHTML = `
        <td>${name}</td>
        <td>${umur}</td>
        <td>${hobi}</td>
        <td>${jeniskelamin}</td>
      `;
  
      document.getElementById('dataTable').getElementsByTagName('tbody')[0].appendChild(newRow);
      document.getElementById('dataForm').reset();
    }
});
  
