<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

require_once 'form.php';
require_once 'bus.php';
require_once 'paket.php';
require_once 'paketVIP.php';
require_once 'tiket.php';

$host = "localhost";
$user = "root";
$password = "";
$database = "BuzzJet";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Membuat instance BusAgency dan menambahkan beberapa paket
$busAgency = new BusAgency("Agen Bus Nusantara");
$package1 = new Package("Regular", "Bali", 500000);
$package2 = new VIPPackage("VIP", "Jakarta", 1000000, "High");
$package3 = new VIPPackage("VIP", "Malang", 1200000, "High");

$busAgency->addPackage($package1);
$busAgency->addPackage($package2);
$busAgency->addPackage($package3);

// Array untuk dropdown paket
$packages = [
    "Regular Bali" => $package1->getPackageInfo(),
    "VIP Jakarta" => $package2->getPackageInfo(),
    "VIP Malang" => $package3->getPackageInfo()
];

// Proses form jika data telah di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Simpan password sebagai hash
    $gender = $_POST['gender'];
    $services = isset($_POST['services']) ? implode(", ", $_POST['services']) : "";
    $selectedPackage = $_POST['package'];
    $notes = $_POST['notes'];

    // Query untuk menyimpan data ke dalam tabel database
    $sql = "INSERT INTO ticket_orders (name, password, gender, services, package, notes) 
            VALUES ('$name', '$password', '$gender', '$services', '$selectedPackage', '$notes')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Pesanan berhasil disimpan!</h2>";
    } else {
        echo "<h2>Gagal menyimpan pesanan: " . $conn->error . "</h2>";
    }
}

$form = new Form();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tiket Bus</title>
</head>

<body>
    <h1>Pesan Tiket Bus</h1>

    <?php
    echo $form->startForm();
    echo $form->inputText('name', 'Nama');
    echo $form->inputPassword('password', 'Password');
    echo $form->inputRadio('gender', 'Jenis Kelamin', ['L' => 'Laki-laki', 'P' => 'Perempuan']);
    echo $form->inputCheckbox('services', 'Layanan Tambahan', ['meal' => 'Makan Gratis', 'wifi' => 'WiFi']);
    echo $form->selectDropdown('package', 'Pilih Paket', $packages);
    echo $form->textarea('notes', 'Catatan');
    echo $form->submitButton('Pesan Tiket');
    echo $form->endForm();
    ?>
</body>

</html>