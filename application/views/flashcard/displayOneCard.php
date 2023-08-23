<html>
    <body>
    <ul>
        <li><?php echo $term ?></li>
        <li id="display-word-trans" style="display:none"><?php echo $definition ?></li>
    </ul>

    <a title="Go Previous Page" href='<?php echo base_url ('index.php/flashcard/onecardview/'.strval($offset-1)); ?>'>Previous One</a>
    <button id="show-hide-trans">show definition</button>
    <a title="Go Next Page" href='<?php echo base_url ('index.php/flashcard/onecardview/'.strval($offset+1)); ?>'>Next One</a>


    <script type="text/javascript">
        let showHideWord = document.getElementById('show-hide-trans');
        let displayWordDef = document.getElementById('display-word-trans');
        showHideWord.onclick = () => {        
        if(displayWordDef.style.display=='block'){
            displayWordDef.style.display='none';
            showHideWord.innerText='show definition';
        }else{
            displayWordDef.style.display='block';
            showHideWord.innerText='hide definition';
        }
    }
        
    </script>
    </body>
</html>
