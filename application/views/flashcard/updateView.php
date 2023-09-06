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

<a href=<?php echo base_url("index.php/flashcard/disable/".$user_data["id"]) ?>>disable</a>
<a href=<?php echo base_url("index.php/flashcard/delete/".$user_data["id"]) ?>>delete</a>
