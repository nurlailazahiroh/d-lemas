<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Digital Learning Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="form">
        <header>
            <h1>INPUT DATA SISWA</h1>
            <form method="post" action="<?php echo base_url(); ?>dilemas/output">
            <pre>
            Nama Siswa      : <input type="text" name="nama"><br>
            NIS             : <input type="text" name="nis"><br>
            Kelas           : <input type="text" name="kelas"> <br>
            Tanggal Tahir   : <input type="text" name="tanggal"> <br>
            Tempat Lahir    : <input type="text" name="tempat"> <br>
            Alamat          : <input type="text" name="alamat"> <br>
            Jenis Kelamin   : <input type="radio" name="kelamin" value="Laki-laki"> Laki-laki<br>
                              <input type="radio" name="kelamin" value="Perempuan"> Perempuan<br>
            Agama           : <select name="agama">
                              <option value=""></option>
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Katolik">Katolik</option>
                              <option value="Budha">Budha</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Protestan">Protestan</option>
                              <option value="Khonghucu">Khonghucu</option>
                              </select>
                              <br><br><br><br>

            <input type="submit" value="Submit"/><input type="reset" value="Cancel"/></td><tr>
            </pre>
            </form>
    </div>
        </header>
</body>
</html>