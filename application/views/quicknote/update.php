<style>
    .box-father{
        display:flex;
        justify-content:center;
    }
    .box-child{   
        width:400px;
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
            <h3>Update Quick note</h3>
        </div>


    
        <div class="text-father">
            <div class="text-child">            
                

            <?php echo form_open("quicknote/update") ?>
            <div class="form-group">
            <label for="content">Note:</label>
<textarea class="form-control" id="content" name="content" cols="30" rows="10"><?php echo $content ?></textarea>

            </div>


<input type="hidden" name="id" value="<?php echo $id ?>">
<input class="btn btn-primary mt-2" type="submit" value="submit">
</form>

<?php echo anchor("quicknote/delete/".strval($id),"delete", array("class"=>"btn btn-danger mt-2")) ?>
            


            </div>
        </div>
    </div>
</div>

