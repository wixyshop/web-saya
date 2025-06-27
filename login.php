<?php
if (_SERVER["REQUEST_METHOD"] == "POST") {
  user =_POST['username'];
  pass =_POST['password'];
  lines = file("data.txt", FILE_IGNORE_NEW_LINES);

  foreach (lines as line) 
    list(savedUser, savedPass) = explode("|",line);
    if (user ===savedUser && pass ===savedPass) {
      header("Location: halaman.html");
      exit;
    }
  }
  echo "Username atau password salah.";
}
?>