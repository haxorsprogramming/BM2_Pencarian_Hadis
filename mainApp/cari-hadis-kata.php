<div class="row" style="margin-top: 20px" id="divPencarian">
    <label>Masukkan kata pencarian</label>
    <input type="text" class="form-control" id="txtKata" placeholder="Masukkan kata pencarian" value="">
    <a href="#!" class="waves-effect waves-light btn" @click="cariAtc">Cari</a>
    <hr/>
    <div id="divHasilHadis">
        
    </div>
</div>

<script>
    var rToProses = "http://localhost/apps_rizka/mainApp/proses-cari-hadis.php";

    var divPencarian = new Vue({
        el : '#divPencarian',
        data : {

        },
        methods : {
            cariAtc : function()
            {
                let kata = document.querySelector('#txtKata').value;
                let ds = {'kata':kata}
                $.post(rToProses, ds, function(data){
                    document.querySelector('#divHasilHadis').innerHTML = data;
                });
            }
        }
    });
</script>