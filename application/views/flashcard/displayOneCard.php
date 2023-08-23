<html>
    <ul>
        <li><?php echo $term ?></li>
        <li><?php echo $definition ?></li>
    </ul>

    <a title="Go Previous Page" href='<?php echo base_url ('index.php/flashcard/onecardview/'.strval($offset-1)); ?>'>Previous One</a>
    <a title="Go Next Page" href='<?php echo base_url ('index.php/flashcard/onecardview/'.strval($offset+1)); ?>'>Next One</a>

</html>
