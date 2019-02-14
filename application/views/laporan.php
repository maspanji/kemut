<h1>Laporan Bulanan</h1>
<form method="POST" action="<?php echo site_url() ?>/laporan/tampil_laporan_bulanan">
Bulan : 
    <select name="bulan">
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
    </select> 

    Tahun : 
    <select name="tahun">
        <?php $dm = date("Y") - 1;
        $d = date("Y"); ?>
        <option value="<?php echo $dm ?>"><?php echo $dm ?></option>
        <option value="<?php echo $d; ?>" selected="true"><?php echo $d; ?></option>
    </select> 

    <input type="submit" name="submt" value=" Tampilkan !" />
</form>