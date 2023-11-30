<?php
        // Koneksi ke database
        $conn = mysqli_connect("localhost:3308", "root", "", "tgswad");

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        function read($query)
        {
            global $conn;
            $result = mysqli_query($conn, $query);
            $rows = [];

            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }

            return $rows;
        }


        ?>