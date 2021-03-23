<div class="row" style="margin-top: 20px" id="divPencarian">
    <label>Masukkan ID</label>
    <input type="text" class="form-control" id="txtIdKitab">
    <a href="#!" class="waves-effect waves-light btn" @click="cariAtc">Cari</a>
    <div id="divNass"></div>
    <div id="divTerjemahan"></div>
</div>

<script>
    var divPencarian = new Vue({
        el: '#divPencarian',
        data: {

        },
        methods: {
            cariAtc: function () {
                let idKitab = document.querySelector('#txtIdKitab').value;
                let url = "http://localhost/API_Hadis_BM25/get_hadis_data.php?idKitab="+idKitab;
                axios.get(url).then(function (res) {
                    let dr = res.data.data['1'];
                    let nass = dr.nass;
                    let terjemahan = dr.terjemah;
                    document.querySelector('#divNass').innerHTML = nass;
                    document.querySelector('#divTerjemahan').innerHTML = terjemahan;
                });
            }
        }
    });
</script>