<html>
    <body>
    <ul>
        <li><?php echo $term ?></li>
        <li id="display-word-trans" style="visibility:hidden"><?php echo $definition ?></li>
        <button id="show-hide-trans">show definition</button>
    </ul>

    <a title="Go Previous Page" href='<?php echo base_url ('index.php/flashcard/onecardview/'.strval(($offset+($count-1))%$count)); ?>'>&lt;&lt;Previous One&lt;&lt;</a>
    
    <?php echo strval($offset+1)?>of<?php echo $count ?>
    <a title="Go Next Page" href='<?php echo base_url ('index.php/flashcard/onecardview/'.strval(($offset+1)%$count)); ?>'>&gt;&gt;Next One&gt;&gt;</a>


    <script type="text/javascript">
        let showHideWord = document.getElementById('show-hide-trans');
        let displayWordDef = document.getElementById('display-word-trans');
        showHideWord.onclick = () => {        
        if(displayWordDef.style.visibility=='visible'){
            displayWordDef.style.visibility='hidden';
            showHideWord.innerText='show definition';
        }else{
            displayWordDef.style.visibility='visible';
            showHideWord.innerText='hide definition';
        }
    }
        
    </script>
    </body>
</html>
