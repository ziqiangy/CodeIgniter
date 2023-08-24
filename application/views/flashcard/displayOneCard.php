
<style>
        /* 整体结构 */
.flex-container{
    display:flex;
    flex-direction:column;
    flex-wrap:wrap;
    justify-content:center;
    
}
.page-header{
    width:100%;
}

.header-frame{
    text-align: center;
    margin:0 auto;
    border: 3px solid black;
    background-color:#fff7d1;
    /* height:120px; */
    max-width:500px;
    border-top-left-radius:50px;
    border-top-right-radius:50px;
    border-radius:10px;

}

.frame{
    /* text-align: csenter; */
    margin:0 auto;
    height:400px;
    max-width:500px;
    background-color: #fff7d1;
    border:3px solid black;
    border-radius:10px;
}

.footer-frame{
    text-align: center;
    margin:0 auto;
    border:3px solid black;
    background-color: #fff7d1;
    /* height:40px; */
    max-width:500px;
    border-bottom-left-radius:50px;
    border-bottom-right-radius:50px;
    border-radius:10px;
}

.page-footer{
    width:100%;
}

.box{
    width:100%;
}


.dots{
    width:100%;
    text-align:center;
    margin:10px 0;
}


.logo-img{
    vertical-align: middle;
    display:inline-block;
}
.logo-text{
    vertical-align: middle;
    display:inline-block;
    font-size:2em;
}

/* wordlist plugin */
.wordlist-header{
    height:30px;
    border-bottom:1px solid gray;
    display:flex;
    justify-content:space-around;
}

.wordlist-word-board{
    height:280px;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;

}


.wordlist-footer{
    height:30px;
    border-top:1px solid gray;
    display:flex;
    justify-content:space-around;
    align-items:center;
}
</style>


    <div class="flex-container">
        <div class="box">
            <div class="frame">
                <div class="box-header">
                    <div style="display:flex;align-items:center;justify-content:center;height:50px;">
                        <div style="font-size:2em;font-weight:600;">Flashcards</div>
                    </div>
                </div>
                
    
                <div id="box-contents" class="box-content">
                    <div id="wordlist-display">
                        <div class="wordlist-header">

                            <div id="show-hide-trans">show def</div>
                            <a title="Go Previous Page" href='<?php echo base_url ('index.php/flashcard/onecardview/'.strval(($offset+($count-1))%$count)); ?>'>&lt;&lt;Previous&lt;&lt;</a>
                            <?php echo strval($offset+1)?>of<?php echo $count ?>
                            <a title="Go Next Page" href='<?php echo base_url ('index.php/flashcard/onecardview/'.strval(($offset+1)%$count)); ?>'>&gt;&gt;Next&gt;&gt;</a>
                            
                        </div>

                        <div class="wordlist-word-board">
                            <div style="font-size:18px;padding:20px;font-weight:600;"><?php echo $term ?></div>
                            <div id="display-word-trans" style="visibility:hidden;font-size:16px;padding:0 20px;"><?php echo $definition ?></div>
                            
                        </div>
                    </div>

                    
                    <div class="wordlist-footer">
                        <img id="add-word" style="height:30px;" src="/pictures/yjfw/words/plus-circle-solid.svg" alt="">
                        <img id="remove-word" style="height:30px;" src="/pictures/yjfw/words/minus-circle-solid.svg" alt="">
                        <img id="edit-word" style="height:30px;" src="/pictures/yjfw/words/edit-solid.svg" alt="">
                        <img id="list-wordlist" style="height:30px;" src="/pictures/yjfw/words/list-alt-regular.svg" alt="">
                        <div id="display-wordlist-index" style="height:30px; font-size:25px;" class="wordlist-index-item">1</div>
                    </div>
                </div>            
            </div>
        </div>
    </div>



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