<?php
    require_once './controller/TransaksiController.php';
?>
<br>
<table border="1" cellpadding="5" cellspacing="0" width="12%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>        
        <?php
            $trc = new TransaksiController();
            $trc->showAll();
                //echo var_dump($trc);
                // while ($trc) {
                //     echo "<tr>";
                //     echo "<td>".$trc['jml']."</td>";
                //     echo "</tr>";
                // }
        ?>        
    </tbody>

</table>