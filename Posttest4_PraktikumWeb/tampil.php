<h2> Login Berhasil</h2>
<?php
        if(isset($_POST['kirim'])){
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $password = $_POST['pwd'];
            $usia = $_POST['usia'];

            echo"<br>Nama: $nama";
            echo"<br>Email: $email";
            echo"<br>Umur: $usia tahun";
            
            echo"<br> <h3> selamat datang!<p>$nama</h3>";
            
        }
    ?> 