<h1>Kelola Transaksi</h1>

Jumlah Transaksi : <input type="number" value="2" name="jml_transaksi" min="1" id="jml_transaksi" style="width: 50px"/> 
<br> 
Bulan : 
<select name="bulan" id="bulan">
    <option value="1">Januari</option>
    <option value="2"selected="true">Februari</option>
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
<br>
Tahun : 
<select name="tahun" id="tahun">
    <?php
    $dm = date("Y") - 1;
    $d = date("Y");
    ?>
    <option value="<?php echo $dm ?>"><?php echo $dm ?></option>
    <option value="<?php echo $d; ?>" selected="true"><?php echo $d; ?></option>
</select>
<br>
<button type="button" id="lihat">Lihat Transaksi</button>

<div id="tampil_transaksi">
</div>
<!-- JavaScript -->
<script>
    var url_tampil_transaksi = "<?php echo site_url() ?>/transaksi/tampilkan_transaksi";
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/transaksi.js" ></script>