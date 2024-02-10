<style>
    .box-father{
        display:flex;
        justify-content:center;
    }
    .box-child{   
        width:400px;
        /* height:600px; */
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
                
                <div class="form-group">
                <label for="task">Task:</label>
                    <input class="form-control" id="task" type="text" name="task" value="<?php echo $task ?>">
                    
                </div>
                <div class="form-group">
                <label for="desc">Description:</label>
                    <textarea class="form-control" id="desc" name="desc" rows="10" cols="35"><?php echo $desc ?></textarea>
                </div>
                <div class="form-group">
                <label for="duedate">Due Date:</label>
                    <input id="duedate" class="form-control" type="date" name="duedate" value="<?php echo $duedate ?>">
                </div>
                    
                   
                    <p>Is this Important?</p>
                    <div class="form-check">
                    <input type="radio" class="form-check-input" id="isimportant" name="isimportant" value="1" <?php echo $isimportant=="1" ? "checked":""; ?>>
                    <label for="isimportant" class="form-check-label">Yes</label>
                    
                    </div>
                    <div class="form-check">
                    <input type="radio" id="notimportant" class="form-check-input" name="isimportant" value="0" <?php echo $isimportant=="0" ? "checked":""; ?>>
                    <label for="notimportant" class="form-check-label">No</label>
                    </div>



                    <p>Is this Done?</p>
                    <div class="form-check">
                    <input type="radio" class="form-check-input" id="isdone" name="isdone" value="1" <?php echo $isdone=="1" ? "checked":""; ?>>
                    <label for="isdone" class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check">
                    <input type="radio" class="form-check-input" id="notdone" name="isdone" value="0" <?php echo $isdone=="0" ? "checked":""; ?>>
                    <label for="notdone" class="form-check-label">No</label>

                    </div>
                    
                    



                    <input type="hidden" name="id" value="<?php echo $id ?>">

                    <input class="btn btn-primary" type="submit" value="update">





            </form>
            <br>
                <?php echo anchor("todo/delete/".strval($id),"delete",array("class"=>"btn btn-danger mt-2")) ?>
            </div>
        </div>
    </div>
</div>

