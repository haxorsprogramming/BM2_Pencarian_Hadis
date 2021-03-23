<?php 
include("../config/db.php");

$qDaftarKitab = $link -> query("SELECT * FROM tbl_kitab LIMIT 0, 5");

?>
<div class="row" style="margin-top: 20px" id="divDaftarKitab">

    <table class="highlight">
        <thead>
            <tr>
                <th>Kode</th><th>Nama Kitab</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; while($rKitab = $qDaftarKitab -> fetch_assoc()){?>
                <tr>
                    <td><?=$no; ?></td>
                    <td><?=$rKitab['nama_kitab']; ?></td>
                    <td><a href="#!" class="btn">Details</a></td>
                </tr>    
            <?php $no++; } ?>
        </tbody>
    </table>

</div>

<script>
   

</script>