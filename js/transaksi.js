$(document).ready(function () {
    $("#lihat").click(function () {
        $.get(url_tampil_transaksi,function(data,status){
            $("#tampil_transaksi").html(data);
        });
    });
});