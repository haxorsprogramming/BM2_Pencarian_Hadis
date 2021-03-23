// Route 
var routeToLogin = server + "login-proses.php";

// Vue Object  
var divUtama = new Vue({
  el :'#divUtama',
  data : {
    pengembang : 'Rizka Junaninah'
  },
  methods : {
    masukAtc : function()
    {
      prosesLogin();
    },
    daftarAtc : function()
    {
      window.location.assign('daftar.html');
    }
  }
});

// Inisialisasi 
let statusKoneksi = navigator.onLine;
document.querySelector('#txtUsername').focus();

if(statusKoneksi === true){
  $('#capCekServer').html('Terhubung');
  $('#capCekServer').addClass('badge-info');
}else{
  $('#capCekServer').html('Tidak terkoneksi');
  $('#capCekServer').addClass('badge-warning');
}

function prosesLogin()
{
  let username = document.querySelector('#txtUsername').value;
  let password = document.querySelector('#txtPassword').value;

  if(username === '' || password === ''){
    pesanUmumApp('warning', 'Isi field!!', 'Harap isi username & password');
  }else{
    let dataSend = {'username':username, 'password':password}
    $.post(routeToLogin, dataSend, function(data){
      let obj = JSON.parse(data);
      if(obj.status === 'sukses'){
        window.location.assign('mainApp/main.html');
      }else{
        pesanUmumApp('error', 'Gagal', 'Login gagal, periksa kembali username & password..');
      }
    });
  }

}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}