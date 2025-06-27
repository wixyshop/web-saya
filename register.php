<?php
if (_SERVER["REQUEST_METHOD"] == "POST")user = _POST['username'];pass = _POST['password'];data = "user|pass\n";
file_put_contents("data.txt", data, FILE_APPEND);
  echo "Registrasi berhasil. <a href='login.html'>Login disini</a>";

?>