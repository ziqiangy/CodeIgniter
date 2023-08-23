<table>
    <tr>
        <th>id</th>
        <th>term</th>
        <th>definition</th>
        <th>options</th>
    </tr>
    <?php foreach($data as $d) { ?>
            <tr class="">
                <td><?php echo $d['id'] ?></td>
                <td><?php echo $d['term'] ?></td>
                <td><?php echo $d['definition'] ?></td>
                <td><a href=<?php echo base_url("index.php/flashcard/updateView/".$d['id']) ?>>update</a></td>
            </tr>
        <?php } ?>
</table>



