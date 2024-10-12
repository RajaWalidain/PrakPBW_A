<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $nama = clean_input($_POST['nama']);
    $email = clean_input($_POST['email']);
    $komentar = clean_input($_POST['komentar']);
    $gender = clean_input($_POST['gender']);

    setcookie('nama', $nama, time() + 86400, "", "", false, true);

    $data = "$nama | $email | $komentar | $gender\n";

    file_put_contents("bukutamu.txt", $data, FILE_APPEND | LOCK_EX);

    echo "Terima kasih telah mengisi buku tamu!";
    echo "<br><a href='index.php'>Kembali ke halaman utama</a>";
}
?>