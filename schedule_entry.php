<?php

include 'header.php';

$prodi = $_POST['prodi'] ?? null;
$matkul = $_POST['matkul'] ?? null;
$tanggal = $_POST['tanggal'] ?? null;
$mulai = $_POST['mulai'] ?? null;
$selesai = $_POST['selesai'] ?? null;
$materi = $_POST['materi'] ?? null;
$pengampu = $_POST['pengampu'] ?? null;

if ($prodi != null) {
  insert($prodi, $matkul, $tanggal, $mulai, $selesai, $materi, $pengampu);
}

function insert($prodi, $matkul, $tanggal, $mulai, $selesai, $materi, $pengampu) {
  echo "<script>alert('Jadwal ".$prodi." utk matakuliah ".$matkul." berhasil disimpan!');</script>";
}

?>

<main>
  <form action="">
    <table>
      <tr>
        <td>Program Studi</td>
        <td>:</td>
        <td><input type="text" name="prodi" require></td>
      </tr>
      <tr>
        <td>Mata Kuliah</td>
        <td>:</td>
        <td><input type="text" name="matkul" require></td>
      </tr>
      <tr>
        <td>Tanggal</td>
        <td>:</td>
        <td><input type="text" name="tanggal" require></td>
      </tr>
      <tr>
        <td>Mulai</td>
        <td>:</td>
        <td><input type="text" name="mulai" require></td>
      </tr>
      <tr>
        <td>Selesai</td>
        <td>:</td>
        <td><input type="text" name="selesai" require></td>
      </tr>
      <tr>
        <td>Materi</td>
        <td>:</td>
        <td><input type="text" name="materi" require></td>
      </tr>
      <tr>
        <td>Pengampu</td>
        <td>:</td>
        <td><input type="text" name="pengampu" require></td>
      </tr>
      <tr>
        <td><button type="submit">Simpan</button></td>
      </tr>
    </table>
  </form>
</main>

<?php

include 'footer.php';

?>