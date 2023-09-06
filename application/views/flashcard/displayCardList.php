<style>
    td:nth-child(1) {
        max-width:100px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow:ellipsis;
    }
    td:nth-child(2) {
        max-width:500px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow:ellipsis;
    }
</style>

<table>
    <tr>
        <th>term</th>
        <th>definition</th>
    </tr>
    <?php foreach($data as $d) { ?>
            <tr class="">
            <td><?php echo anchor("flashcard/updateView/".$d['id'],$d['term']) ?></td>
                <td><?php echo $d['definition'] ?></td>

            </tr>
        <?php } ?>
</table>



