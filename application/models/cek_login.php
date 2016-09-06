<?php 
/*
 * pada contoh ini saya menggunakan username dan password
 * secara hardcode. Pada penerapannya anda bisa mengambil
 * data username dan password dari database.
 */
$username_benar = "faizal";
$password_benar = "admin";
 
//menangkap data dari form login yang dikirim menggunakan ajax
$username = $_POST['username'];
$password = $_POST['password'];
 
//melakukan pengecekan username dan password
 
if ($username == $username_benar && $password == $password_benar) {
    echo "username dan password benar, anda akan diredirect ke halaman utama";
    /*
     * pada praktek sebenarnya lakukan pendaftaran session 
     * di sini kemudian lakukan redirect ke halaman utama
     */
}  else {
    echo "username / password salah";
}
 
?>