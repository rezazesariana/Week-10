<?php
include_once("koneksi.php");
$result = mysqli_query($koneklink, "SELECT * FROM t_fakultas");
?>

<table border=1 width=60%>
    <tr>
        <td>Kode</td>
        <td>Nama</td>
    </tr>
    <?php
        while($data=mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$data['kode_fakultas']."</td>";
            echo "<td>".$data['nama_fakultas']."</td>";
            echo "</tr>";
        }
    ?>
</table>