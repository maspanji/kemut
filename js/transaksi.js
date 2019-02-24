$(document).ready(function () {
    $("#lihat").click(function () {
        var bulan = $('#bulan').val();
        var jumlah_trx = $('#jml_transaksi').val();
        var tahun = $("#tahun").val();

        $.post(url_tampil_transaksi, {bln: bulan, jml_trx: jumlah_trx, thn: tahun})
                .done(function (data, status) {
                    $("#tampil_transaksi").html(data);
                });
    });
});