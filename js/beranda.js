var divApps = new Vue({
  el: "#divApps",
  data: {
    developer: "Rizka Junainah",
  },
  methods: {
    cariHadis: function()
    {
      $("#divUtama").load("cari-hadis.php");
      $(".button-collapse").sideNav("hide");
    },
    daftarKitab : function()
    {
      $("#divUtama").load("daftar-kitab.php");
      $(".button-collapse").sideNav("hide"); 
    },
    cariHadisKata : function()
    {
      $("#divUtama").load("cari-hadis-kata.php");
      $(".button-collapse").sideNav("hide"); 
    },
    beranda : function()
    {
      $("#divUtama").load("beranda.php");
      $(".button-collapse").sideNav("hide");
    },
    cariHadisStatus : function()
    {
      $("#divUtama").load("cari-hadis-status.php");
      $(".button-collapse").sideNav("hide");
    }
  },
});


// Inisialisasi 
$(".materialboxed").materialbox();
$(".button-collapse").sideNav();
$("select").material_select();
var loading = "<div class='progress'><div class='indeterminate'></div></div>";
$("#divUtama").html(loading);
$("#divUtama").load("beranda.php");
$("#judulApps").html("Aplikasi Pencarian Hadist Shahih, Hasan, Dha'if, dan Maudhu'");

function updateSistem() {
  $("#divUtama").load("");
  Materialize.toast("Tak ada respon dari server", 1100);
}


