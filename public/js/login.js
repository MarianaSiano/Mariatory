document.getElementById('olho').addEventListener('mousedown', function() {
    document.getElementById('senha').type = 'text';
  });
  
  document.getElementById('olho').addEventListener('mouseup', function() {
    document.getElementById('senha').type = 'password';
  });