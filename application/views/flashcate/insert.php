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
            <h1>Insert a Category</h1>
        </div>


    
        <div class="text-father">
            <div class="text-child">            
                

            <?php echo form_open("flashcate/insert") ?>
<label for="name">category name:</label>
<input type="text" name="name" value="">
<input type="submit" value="submit">
</form>
            


            </div>
        </div>
    </div>
</div>


