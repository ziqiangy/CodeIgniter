<style>
    .box-father{
        display:flex;
        justify-content:center;
    }
    .box-child{   
        width:400px;
        height:600px;
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
            <h1>Update Todo</h1>
        </div>
        <div class="text-father">
            <div class="text-child">                            
            <?php echo form_open("todo/update") ?>
                <label for="task">Task:</label><br>
                <input type="text" name="task" value="<?php echo $task ?>"><br>
                <label for="desc">Description:</label><br>
                <textarea id="desc" name="desc" rows="10" cols="35"><?php echo $desc ?></textarea><br>
                <label for="duedate">Due Date:</label><br>
                <input id="duedate" type="date" name="duedate" value="<?php echo $duedate ?>"><br>



                <p>Is this Important?</p>
                    <input type="radio" id="isimportant" name="isimportant" value="1" <?php echo $isimportant=="1" ? "checked":""; ?>>
                    <label for="isimportant">Yes</label><br>
                    <input type="radio" id="notimportant" name="isimportant" value="0" <?php echo $isimportant=="0" ? "checked":""; ?>>
                    <label for="notimportant">No</label><br>


                    <p>Is this Done?</p>
                    <input type="radio" id="isdone" name="isdone" value="1" <?php echo $isdone=="1" ? "checked":""; ?>>
                    <label for="isdone">Yes</label><br>
                    <input type="radio" id="notdone" name="isdone" value="0" <?php echo $isdone=="0" ? "checked":""; ?>>
                    <label for="notdone">No</label><br>



                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" value="submit">
            </form>
                <?php echo anchor("todo/delete/".strval($id),"delete") ?>
            </div>
        </div>
    </div>
</div>

