
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
            <h1>Update a Flashcard</h1>
        </div>
    
        <div class="text-father">
            <div class="text-child">      
                
            <?php echo form_open('flashcard/updateOne'); ?>

                <label for="term">Term:</label><br>
                    <input type="text" name="term" value="<?php echo $user_data["term"] ?>"/><br>
                    <label for="definition">Definition:</label><br>
                    <textarea type="text" name="definition" rows="5" cols="50"><?php echo $user_data["definition"] ?></textarea><br>
                    <select name="category_id">
                        <option value="" 
                        <?php  
                        if(empty($user_data["category_id"])) echo "selected";
                        ?>
                        >No Category</option>
                        <?php foreach($fcs_data as $d){ ?>
                            <option value="<?php echo $d["id"] ?>" <?php if($user_data["category_id"]==$d["id"]) echo"selected";?>><?php echo $d["name"] ?></option>
                        <?php } ?>
                    </select>
                    <input type="hidden" name="id" value="<?php echo $user_data["id"] ?>"/><br>
                    <input type="submit" value="Update"/>

                </form>
                <?php echo anchor("flashcard/disable/".strval($user_data["id"]),"disable"); ?>
                <br>
                <?php echo anchor("flashcard/delete/".strval($user_data["id"]),"delete"); ?>


                
            </div>
        </div>
    </div>
</div>



