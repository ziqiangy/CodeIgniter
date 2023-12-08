<style>
    .box-father{
        display:flex;
        justify-content:center;
    }
    .box-child{   
        width:400px;
        height:300px;
        border:3px solid black;
        background-color:#fff7d1;
        border-radius:10px;
        padding:15px;
        
    }

    .h-title{
        text-align:center;
    }
    .text-father{
        display:flex;
        justify-content:center;
    }
</style>


<div class="box-father">
    <div class="box-child">
        <div class="h-title">
            <h1>Update Quick note</h1>
        </div>


    
        <div class="text-father">
            <div class="text-child">            
                

            <?php echo form_open("quicknote/update") ?>
<label for="content">Note:</label><br>
<textarea id="content" name="content" cols="30" rows="10"><?php echo $content ?></textarea><br>


<input type="hidden" name="id" value="<?php echo $id ?>">
<input type="submit" value="submit">
</form>

<?php echo anchor("quicknote/delete/".strval($id),"delete") ?>
            


            </div>
        </div>
    </div>
</div>

