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
            <h1>Insert a Quick Note</h1>
        </div>


    
        <div class="text-father">
            <div class="text-child">            
                

            <?php echo form_open("Quicknote/insert") ?>
<label for="content">Quick Note:</label><br>
<textarea id="content" name="content" rows="10" cols="35"></textarea><br>
<input type="submit" value="submit">
</form>
            


            </div>
        </div>
    </div>
</div>


