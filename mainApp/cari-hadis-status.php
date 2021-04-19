<div class="row" style="margin-top: 20px;text-align:center;" id="divPencarian">
    Cari hadis berdasarkan status
    <div style="margin-top:30px;">
        <a href="#!" @click="cariHadisAtc('SHAHIH')" class="btn btn-lg">Shahih</a><br/><br/>
        <a href="#!" @click="cariHadisAtc('MAUDHU')" class="btn btn-lg">Maudhu</a><br/><br/>
        <a href="#!" @click="cariHadisAtc('DHAIF')" class="btn btn-lg">Dhaif</a><br/><br/>
        <a href="#!" @click="cariHadisAtc('HASAN')" class="btn btn-lg">Hasan</a><br/><br/>
    </div>

    <div id="divHasilPencarian">
    
    </div>
</div>

<script>
    var rToCariHadis = "proses-cari-hadis-status.php";

    var pencarianApps = new Vue({
        el : '#divPencarian',
        data : {

        },
        methods : {
            cariHadisAtc : function(status)
            {
                let ds = { 'status':status }
                $.post(rToCariHadis, ds, function(data){
                    document.querySelector('#divHasilPencarian').innerHTML = data;
                });
            }
        }
    });
</script>