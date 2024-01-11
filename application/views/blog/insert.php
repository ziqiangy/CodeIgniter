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
            <h1>Insert a Blog</h1>
        </div>
        <div class="text-father">
            <div class="text-child">            
                <?php echo form_open("blog/insert") ?>
                    <label for="title">Blog title:</label><br>
                    <input type="text" name="title" value=""><br>
                    <label for="content">Blog detail:</label><br>
                    <textarea id="content" name="content" rows="20" cols="35"></textarea><br>
                    <label for="date">Blog date:</label><br>
                    <input id="date" type="date" name="date"><br>
                    <br>
                <br>
                    <input type="submit" value="submit">
                </form>
            </div>
        </div>
    </div>
</div>


