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
            <h1>Insert a Todo</h1>
        </div>
        <div class="text-father">
            <div class="text-child">            
                <?php echo form_open("todo/insert") ?>
                    <label for="task">Task:</label><br>
                    <input type="text" name="task" value=""><br>
                    <label for="desc">Description:</label><br>
                    <textarea id="desc" name="desc" rows="10" cols="35"></textarea><br>
                    <label for="duedate">Due Date:</label><br>
                    <input id="duedate" type="date" name="duedate" value=""><br>


                    <p>Is this Important?</p>
                    <input type="radio" id="isimportant" name="isimportant" value="1">
                    <label for="isimportant">Yes</label><br>
                    <input type="radio" id="notimportant" name="isimportant" value="0">
                    <label for="notimportant">No</label><br>

                    <input type="hidden" name="isdone" value="0">

                    <input type="submit" value="submit">
                </form>
            </div>
        </div>
    </div>
</div>


