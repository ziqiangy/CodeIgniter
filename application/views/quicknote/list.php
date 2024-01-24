<style>
    /* .box-father{
        display:flex;
        justify-content:center;
    } */
    .box-child{   
        /* width:400px; */
        /* height:300px; */
        border:3px solid black;
        background-color:#fff7d1;
        border-radius:10px;
        padding:15px;
        
    }

    .h-title{
        text-align:center;
    }
    /* .text-father{
        display:flex;
        justify-content:center;
    } */

    
    .element{
        margin-top:20px;
        margin-bottom:20px;
        padding-top:20px;
        border-top:1px solid black;
        word-wrap:break-word;
        
    }
</style>


<div class="box-father">
    <div class="box-child">
        <div class="h-title">
            <h1>Notes</h1>
        </div>
        <div class="text-father">
            <div class="text-child">         
                
                    <?php foreach($data as $d) { ?>
                                <?php 
                                    if(strlen($d['content'])>300){
                                        $d['content']=substr($d['content'],0,300)."...";
                                        }; ?>
                                <div class="element"><?php echo anchor("quicknote/update/".$d['id'],$d['content']); ?></div>           
                            
                        <?php } ?>
                
            </div>
        </div>
    </div>
</div>
