<?php
$conn = mysqli_connect("localhost:3308", "root", "", "tgswad");

function read($query){
    global $conn;

    $hasil = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;


}
function tambah($data){
    global $conn;
    $gambar = $_POST ["gambar"];
    $nama_prod = $_POST ["nama_prod"];
    $keterangan = $_POST ["keterangan"];
    $kode_prod = $_POST ["kode_prod"];
    $harga = $_POST ["harga"];

    $query = "INSERT INTO data_mobil VALUES ('$gambar','$nama_prod','$keterangan','$kode_prod','$harga')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}

?>