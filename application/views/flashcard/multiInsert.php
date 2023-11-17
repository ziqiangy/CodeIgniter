
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
            <h1>Insert a New Flashcard</h1>
        </div>


    
        <div class="text-father">
            <div class="text-child">            
                

            <?php echo form_open('flashcard/insertOne'); ?>

            <div id="insertList">

                <div class="insertItem" id="insertItem">
                    
                    <label for="term">Term:</label><br>
                    <input type="text" name="term" id="term" value=""/><br>
                    <label for="definition">Definition:</label><br>
                    <textarea name="definition" id="definition" rows="5" cols="35"></textarea><br>
                    <label for="category_id">Flashcard Categories</label>
                    <select name="category_id" id="category_id">
                        <option value="">No Category</option>
                        <?php foreach($data as $d){ ?>
                            <option value="<?php echo $d["id"] ?>"><?php echo $d["name"] ?></option>
                        <?php } ?>
                    </select>
                    
                </div>

            </div>
            
            <div id="addBtn">add</div>






    <input type="submit" value="Submit"/>
</form>


            </div>
        </div>
    </div>
</div>


<script>
    

    var i = 0;
    $("#addBtn").click(function () {
        ++i;
        $("#insertList").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
            '][subject]" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });

</script>