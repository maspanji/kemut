<h2>Akun Baru</h2>
<form method="POST" action="<?php echo site_url() ?>/akun/insert_akun_baru" >
    <p>Nama Akun : <input type="text" name="nama_akun" required="true"> </p>
    <p>Tipe : 
        <select name="tipe"> 
            <option value="debet">debet</option>    
            <option value="kredit">kredit</option>
        </select> 
    </p>
    <input type="submit" value="Insert !" />
</form>

<h2>Daftar Akun</h2>
<table border="1" padding="0" >
    <thead>
        <tr>
            <td>No</td>
            <td>Nama Akun</td>
            <td>Tipe</td>
        </tr>
    </thead> 
    <?php 
    $num = 1;
    foreach ($all_akun as $akun) {
    ?>
        <tr>
            <td><?php echo $num++; ?></td>
            <td><?php echo $akun->namaAkun ?></td>
            <td><?php echo $akun->tipe ?></td>
        </tr>        
<?php } ?>
</table>
