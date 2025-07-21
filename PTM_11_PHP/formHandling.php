<form action="proses.php" method="POST">
    Nama: <input type="text" name="nama"><br>

    Gender: 
    <input type="radio" name="gender" value="Laki-laki">Laki-laki
    <input type="radio" name="gender" value="Perempuan">Perempuan<br>

    Hobi: 
    <input type="checkbox" name="hobi[]" value="Membaca">Membaca
    <input type="checkbox" name="hobi[]" value="Menari">Menari<br>

    Jurusan:
    <select name="jurusan">
        <option value="Informatika">Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
    </select><br>

    <input type="submit" value="Kirim">
</form>

