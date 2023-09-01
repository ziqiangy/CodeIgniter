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



