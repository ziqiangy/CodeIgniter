<table>
    <tr>
        <th>Category names</th>
        
    </tr>
    <?php foreach($data as $d) { ?>
            <tr class="">
                <td><?php echo anchor("flashcate/update/".$d['id'],$d['name']) ?></td>
                
            </tr>
        <?php } ?>
</table>



