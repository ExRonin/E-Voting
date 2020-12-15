<!-- Load File jquery.min.js yang ada difolder js -->
<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>

<script>
    $(document).ready(function() {
        // Sembunyikan alert validasi kosong
        $("#kosong").hide();
    });
</script>
<a href="<?php echo base_url("excel/format.xlsx"); ?>">Download Format</a>
<br>
<br>

<!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
<form method="post" action="<?php echo base_url("index.php/Siswa/form"); ?>" enctype="multipart/form-data">
    <!-- 
    -- Buat sebuah input type file
    -- class pull-left berfungsi agar file input berada di sebelah kiri
    -->
    <input type="file" name="file">

    <!--
    -- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
    -->
    <input type="submit" name="preview" value="Preview">
</form>

<?php
if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form 
    if (isset($upload_error)) { // Jika proses upload gagal
        echo "<div style='color: red;'>" . $upload_error . "</div>"; // Muncul pesan error upload
        die; // stop skrip
    }

    // Buat sebuah tag form untuk proses import data ke database
    echo "<form method='post' action='" . base_url("index.php/Siswa/import") . "'>";

    // Buat sebuah div untuk alert validasi kosong
    echo "<div style='color: red;' id='kosong'>
    </span> data yang belum diisi Berwarna merah
    </div>";

    echo "<table border='1' cellpadding='8'>
    <tr>
      <th colspan='5'>Preview Data</th>
    </tr>
    <tr>
      <th>NIS</th>
      <th>Password</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Kode Kelas</th>
    </tr>";

    $numrow = 1;
    $kosong = 0;

    // Lakukan perulangan dari data yang ada di excel
    // $sheet adalah variabel yang dikirim dari controller
    foreach ($sheet as $row) {
        // Ambil data pada excel sesuai Kolom
        $username = $row['A']; // Ambil data NIS
        $password = $row['B']; // Ambil data nama
        $nama = $row['C']; // Ambil data jenis kelamin
        $jeniskelamin = $row['D'];
        $kode = $row['E'];

        // Cek jika semua data tidak diisi
        if ($username == "" && $password == "" && $nama == "" && $jeniskelamin == "" && $kode == "")
            continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

        // Cek $numrow apakah lebih dari 1
        // Artinya karena baris pertama adalah nama-nama kolom
        // Jadi dilewat saja, tidak usah diimport
        if ($numrow > 1) {
            // Validasi apakah semua data telah diisi
            $username_td = (!empty($username)) ? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
            $password_td = (!empty($password)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
            $nama_td = (!empty($nama)) ? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
            $jeniskelamin_td = (!empty($jeniskelamin)) ? "" : " style='background: #E07171;'";
            $kode_td = (!empty($kode)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah

            // Jika salah satu data ada yang kosong
            if ($username == "" or $password == "" or $nama == "" or $jeniskelamin == "" or $kode == "") {
                $kosong++; // Tambah 1 variabel $kosong
            }

            echo "<tr>";
            echo "<td" . $username_td . ">" . $username . "</td>";
            echo "<td" . $password_td . ">" . $password . "</td>";
            echo "<td" . $nama_td . ">" . $nama . "</td>";
            echo "<td" . $jeniskelamin_td . ">" . $jeniskelamin . "</td>";
            echo "<td" . $kode_td . ">" . $kode . "</td>";
            echo "</tr>";
        }

        $numrow++; // Tambah 1 setiap kali looping
    }

    echo "</table>";

    // Cek apakah variabel kosong lebih dari 0
    // Jika lebih dari 0, berarti ada data yang masih kosong
    if ($kosong > 0) {
?>
        <script>
            $(document).ready(function() {
                // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                $("#jumlah_kosong").html('<?php echo $kosong; ?>');

                $("#kosong").show(); // Munculkan alert validasi kosong
            });
        </script>
<?php
    } else { // Jika semua data sudah diisi
        echo "<hr>";

        // Buat sebuah tombol untuk mengimport data ke database
        echo "<button type='submit' name='import'>Import</button>";
        echo "<a href='" . base_url("index.php/admin/datadpt") . "'>Cancel</a>";
    }

    echo "</form>";
}
?>