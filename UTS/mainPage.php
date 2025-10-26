<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Manajemen Stok Barang</title>
    <link rel="stylesheet" href="Asset/css/mainpage.css">
    <script src="Asset/js/jquery-3.7.1.js"></script>
    <script src="Asset/js/valid.js" defer></script>
</head>

<body>
    <div class="header">
        <div class="ikon">
            <img src="Asset/img/package.png" alt="" />
            <h2>Sistem Manajemen Stok Barang</h2>
        </div>

        <div class="logout-container">
            <button class="logout-btn" id="btn-logout">
                <img src="Asset/img/Logout.png" alt="">
                Logout
            </button>
        </div>
    </div>

    <main>
        <section class="card">
            <h3>Tambah barang baru</h3>
            <form action="" class="form-input" method="POST">
                <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" id="nama" name="nama" placeholder="Contoh: Pensil" />
                </div>

                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori">
                        <option value="ATK">ATK</option>
                        <option value="Sembako">Sembako</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="stok">Jumlah Stok</label>
                    <input type="number" id="stok" name="stok" placeholder="0" min="0" />
                </div>

                <div class="form-group">
                    <label for="harga">Harga (RP)</label>
                    <input type="number" id="harga" name="harga" placeholder="0" min="0" />
                </div>

                <button type="submit" class="btn-tambah" name="tambah" id="btn-tambah">Tambah Barang</button>
            </form>
        </section>

        <?php

        // Ambil data dari cookie jika ada
        $daftarBarang = [];
        if (isset($_COOKIE['barang'])) {
            $daftarBarang = json_decode($_COOKIE['barang'], true);
            if (!is_array($daftarBarang)) {
                $daftarBarang = [];
            }
        }

        // Jika tombol tambah ditekan
        if (isset($_POST['tambah'])) {
            $nama = trim($_POST['nama']);
            $kategori = trim($_POST['kategori']);
            $stok = $_POST['stok'];
            $harga = $_POST['harga'];
            $tanggal = date("d/m/Y");

            $errors = [];

            if (empty($nama)) {
                $errors[] = "Nama barang harus diisi!";
            }
            if (empty($kategori)) {
                $errors[] = "Kategori harus diisi!";
            }
            if ($stok === '' || $stok < 0) {
                $errors[] = "Stok harus diisi dan tidak boleh negatif!";
            }
            if ($harga === '' || $harga < 0) {
                $errors[] = "Harga harus diisi dan tidak boleh negatif!";
            }

            if (empty($errors)) {
                $barangBaru = [
                    'nama' => htmlspecialchars($nama),
                    'kategori' => htmlspecialchars($kategori),
                    'stok' => (int)$stok,
                    'harga' => (int)$harga,
                    'tanggal' => $tanggal
                ];

                // Tambahkan ke array
                $daftarBarang[] = $barangBaru;

                // Simpan ke cookie dalam bentuk JSON (kadaluarsa 7 hari)
                setcookie('barang', json_encode($daftarBarang), time() + (86400 * 7), '/');

                // Refresh halaman agar data muncul langsung
                header("Location: " . $_SERVER['PHP_SELF']);
                exit;
            } else {
                foreach ($errors as $e) {
                    echo "<p style='color:red; text-align:center;'>$e</p>";
                }
            }
        }
        ?>

        <section class="card">
            <h2>Daftar Barang</h2>
            <?php if (empty($daftarBarang)): ?>
                <p class="empty-text">
                    Belum ada barang. Silakan tambahkan barang baru.
                </p>
            <?php else: ?>
                <table class="tabel-barang">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($daftarBarang as $b): ?>
                            <tr>
                                <td><?= $b['nama'] ?></td>
                                <td><?= $b['kategori'] ?></td>
                                <td><?= $b['stok'] ?></td>
                                <td>Rp <?= number_format($b['harga'], 0, ',', '.') ?></td>
                                <td><?= $b['tanggal'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>
