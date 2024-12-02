<?php
// Daftar mobil yang tersedia
$mobil = [
    ['id' => 1, 'nama' => 'Toyota Avanza', 'harga' => 300000],
    ['id' => 2, 'nama' => 'Honda Jazz', 'harga' => 400000],
    ['id' => 3, 'nama' => 'Suzuki Ertiga', 'harga' => 350000],
    ['id' => 4, 'nama' => 'Daihatsu Xenia', 'harga' => 320000],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Mobil PT Bendi Car</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="mobil.png" alt="Gambar Mobil Rental" class="header-img" />
        <h1>Sewa Mobil PT Bendi Car</h1>
    </header>
    <main>
        <h2>Daftar Mobil Tersedia</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Mobil</th>
                    <th>Harga Sewa (per hari)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mobil as $m): ?>
                <tr>
                    <td><?= htmlspecialchars($m['nama']); ?></td>
                    <td>Rp <?= number_format($m['harga'], 0, ',', '.'); ?></td>
                    <td>
                        <a href="proses_sewa.php?id=<?= urlencode($m['id']); ?>" aria-label="Sewa <?= htmlspecialchars($m['nama']); ?>">
                            Sewa
                        </a>
                    </td>
                </tr>
                <?php ?>
            </tbody>
        </table>
    </main>
</body>
</html>
