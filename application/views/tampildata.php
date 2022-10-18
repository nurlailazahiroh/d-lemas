<html>
<head>
    <title>Tampilan Data Siswa</title>
</head>
<body>
<h1>DATA SISWA</h1>
<hr align=”center” size=“1” noshade> </hr>
Nama Siswa         : <?php echo $_POST["nama"];?><br>
NIS                : <?php echo $_POST["nis"];?><br>
Kelas              : <?php echo $_POST["kelas"];?><br>
Tanggal Lahir      : <?php echo $_POST["tanggal"];?><br>
Tempat Lahir       : <?php echo $_POST["tempat"];?><br>
Alamat             : <?php echo $_POST["alamat"];?><br>
Jenis Kelamin      : <?php echo $_POST["kelamin"];?><br>
Agama              : <?php echo $_POST["agama"];?><br><br><br>

<a href="form.php">INPUT DATA LAGI</a>
</body>
</html>