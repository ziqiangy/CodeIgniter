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
            <h3>Insert a Blog</h3>
        </div>
        <div class="text-father">
            <div class="text-child">            
                <?php echo form_open("blog/insert") ?>
                <div class="form-group">
                <label for="title">Blog title:</label>
                    <input class="form-control" type="text" id="title" name="title" value="">
                    
                </div>
                <div class="form-group">
                <label for="content">Blog detail:</label>
                    <textarea class="form-control" id="content" name="content" rows="20" cols="35"></textarea>
                    
                </div>
                <div class="form-group">
                <label for="date">Blog date:</label>
                    <input class="form-control" id="date" type="date" name="date">
                    
                </div>
                    <input class="btn btn-primary mt-2" type="submit" value="submit">
                </form>
            </div>
        </div>
    </div>
</div>


