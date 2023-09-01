<?php echo form_open('flashcard/updateOne'); ?>

<label for="term">Term:</label><br>
    <input type="text" name="term" value="<?php echo $term ?>"/><br>
    <label for="definition">Definition:</label><br>
    <textarea type="text" name="definition" rows="5" cols="50"><?php echo $definition ?></textarea><br>
    <input type="hidden" name="id" value="<?php echo $id ?>"/><br>
    <input type="submit" value="Update"/>

</form>

<a href=<?php echo base_url("index.php/flashcard/disable/".$id) ?>>disable</a>
<a href=<?php echo base_url("index.php/flashcard/delete/".$id) ?>>delete</a>
