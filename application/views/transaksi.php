<h2>Insert Transaksi Keuangan</h2>
<form method="POST" action="<?php echo site_url() ?>/transaksi/insert_transaksi_baru">
    <p>
        Tanggal : <input type="date" name="tanggal" />
    </p>
    <p>
        Keterangan : <input type="text" name="keterangan" />
    </p>
    <p>
        Jumlah : <input type="number" min="0" step="0.01" name="jumlah" />
    </p>
    <p>
        Akun : 
        <select name="akun">
            <?php foreach ($all_akun as $akun){?>
            <option value="<?php echo $akun->idAkun; ?>"><?php echo $akun->namaAkun; ?></option>
            <?php } ?>
         </select>
    </p>
    <p>
        <input type="submit" name="submit" value="Insert !"/>
    </p>
</form>