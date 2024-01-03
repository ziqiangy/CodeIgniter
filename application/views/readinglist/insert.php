<style>
    .box-father{
        display:flex;
        justify-content:center;
    }
    .box-child{   
        width:400px;
        height:400px;
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
            <h1>Insert a Play</h1>
        </div>


    
        <div class="text-father">
            <div class="text-child">            
                

            <?php echo form_open("Readinglist/insert") ?>
<label for="text">Play Title:</label><br>
<input type="text" name="name" value=""><br>
<label for="detail">Play Detail:</label><br>
<textarea id="detail" name="detail" rows="10" cols="35"></textarea><br>
<input type="submit" value="submit">
</form>
            


            </div>
        </div>
    </div>
</div>


