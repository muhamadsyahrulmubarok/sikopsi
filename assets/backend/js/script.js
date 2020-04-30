$(document).ready(function () {
    var URL = window.location.pathname;
    var arr = URL.split('/');
    // console.log(arr[2]);
    if (arr[2] == "admin") {
        $('.dripicons-user').parent().addClass("active")
    }
    else if (arr[2] == 'anggota') {
        $('.dripicons-user-group').parent().addClass("active")
    } else if (arr[2] == 'peminjaman') {
        $('.dripicons-to-do').parent().addClass("active")
    } else if (arr[2] == 'tabungan') {
        $('.dripicons-briefcase').parent().addClass("active")
    } else if (arr[2] == 'angsuran') {
        $('.dripicons-document').parent().addClass("active")
    } else if (arr[2] == 'karyawan') {
        $('.dripicons-user-id').parent().addClass("active")
    } else {
        console.log("gagal")
    }
})