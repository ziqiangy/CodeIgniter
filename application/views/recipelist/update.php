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
            <h1>Update Recipe</h1>
        </div>
        <div class="text-father">
            <div class="text-child">                            
            <?php echo form_open("Recipelist/update") ?>
            <div class="form-group">
                <label for="text">Recipe title:</label>
                    <input class="form-control" type="text" id="text" name="name" value="<?php echo $name ?>">
                    
                </div>
                <div class="form-group">
                <label for="detail">Recipe Detail:</label>
                    <textarea class="form-control" id="detail" name="detail" rows="10" cols="35"><?php echo $detail ?></textarea>
                    
                </div>
                <input type="hidden" name="id" value="<?php echo $id ?>">

                    <input class="btn btn-primary mt-2" type="submit" value="submit">
                </form>


                <?php echo anchor("Recipelist/delete/".strval($id),"delete",array("class"=>"btn btn-danger mt-2")) ?>
            </div>
        </div>
    </div>
</div>




