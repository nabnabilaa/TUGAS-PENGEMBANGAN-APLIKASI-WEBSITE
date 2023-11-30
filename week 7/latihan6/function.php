<?php
$conn = mysqli_connect("localhost","root","","carwash");$conn = mysqli_connect("localhost:3308", "root", "", "tgswad");
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

function ubah($data){
    global $conn;
    $gambar = $data ["gambar"];
    $nama_prod = $data ["nama_prod"];
    $keterangan = $data ["keterangan"];
    $kode_prod = $data ["kode_prod"];
    $harga = $data ["harga"];

    

    $query = "UPDATE data_mobil SET
                
                gambar = '$gambar',
                nama_prod = '$nama_prod',
                keterangan = '$keterangan',
                harga = '$harga'
            WHERE kode_prod = '$kode_prod'
    ";

    mysqli_query($conn,$query) or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);
    
}

?>