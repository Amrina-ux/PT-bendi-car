<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Bendi Car - Sewa Mobil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<img src="mobil.png" alt="Deskripsi Foto" width="1500px;" height="400px;">
    <header>
        <h1>PT Bendi Car</h1>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#cars">Mobil Kami</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <h2>Selamat Datang di PT Bendi Car</h2>
        <p>Temukan mobil sewa terbaik untuk kebutuhan Anda!</p>
    </section>

    <section id="about">
        <h2>Tentang Kami</h2>
        <p>PT Bendi Car adalah penyedia layanan sewa mobil terpercaya.</p>
    </section>

    <section id="cars">
        <h2>Mobil Kami</h2>
        <table>
            <tr>
                <th>Nama Mobil
                    Toyota
                    Honda
                    avanza
                </th>
                <th>Harga Sewa
                    500.000
                </th>
            </tr>
            <?php
            // Ambil data mobil dari database
            $sql = "SELECT * FROM mobil";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["nama_mobil"] . "</td>
                            <td>" . $row["harga_sewa"] . "</td>
                            <td><a href='sewa.php?id=" . $row["id"] . "'>Sewa</a></td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Tidak ada mobil tersedia</td></tr>";
            }
            ?>
        </table>
    </section>

    <section id="contact">
        <h2>Kontak Kami</h2>
        <p>Email: info@bendicar.com</p>
        <p>Telepon: 123-456-7890</p>
    </section>

    <footer>
        <p>&copy; 2023 PT Bendi Car. Semua hak dilindungi.</p>
    </footer>
</body>
</html>