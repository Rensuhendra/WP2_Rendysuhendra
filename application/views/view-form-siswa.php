<html>
<head>    
    <title> Form Input siswa </title>
</head>
<body>
    <center>
        <form action="<?= base_url('siswa/cetak'); ?>" method="post">
    <table>
        <tr>
            <th colspan="3">
                D-lemas 
</th>
</tr>
<tr>
            <th colspan="3">
        form input data siswa 
        </th>
</tr>
<tr>
    <td colspan="3">
        <hr>
</td>
</tr>
<tr>
    <th> Nama Siswa</th>
    <th>:</th>
    <td>
        <input type="text" name="nama" id="nama">
</td>
</tr>
<tr>
    <th>NIS</th>
    <th>:</th>
<td>
    <input type="text" name="nis" id="nis">
</td>
</tr>
<tr>
    <th>Kelas</th>
    <th>:</th>
    <td>
        <input type="text" name="kelas" id="kelas">
        </td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <th>:</th>
            <td>
        <input type="text" name="tgl" id="tgl">
        </td>
        </tr>
        <tr>
        <th>tempat lahir</th>
        <th>:</th>
        <td>
            <input type="text" name="tmpt" id="tmpt">
</td>
</tr>
<tr>
<th>Alamat</th>
<th>:</th>
<td>
    <input type="text" name="alamat" id="alamat">
    </td>
</tr>
<tr>
<th>Jenis Kelamin</th>
<td>:</td>
<td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki
<input type="radio" name="jk" value="Perempuan">Perempuan</td>
</tr>
<tr>
<th>agama</th>
<td>:</td>
<td>
<select name="agama" id="agama">
    <option value="">Pilih Agama</option>
    <option value="Islam">Islam</option>
    <option value="Kristen">Kristen</option>
    <option value="Katolik">Katolik</option>
    <option value="Budha">Budha</option>
    <option value="Hindu">Hindu</option>
    <option value="Protestan">Protestan</option>
    <option value="Konghucu">Konghucu</option>
</select>
</td>
</tr>
<tr>
    <td colspan="3" align="center">
        <input type="submit" value="submit">
</td>
</tr>
</table>
</form>
</center>
</body>
</html>