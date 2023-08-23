<?php echo form_open('flashcard/updateOne'); ?>

    <input type="text" name="term" value="<?php echo $term ?>"/><br>
    <input type="text" name="definition" value="<?php echo $definition ?>"/><br>
    <input type="hidden" name="id" value="<?php echo $id ?>"/><br>
    <input type="submit" value="Update"/>

</form>

<a href=<?php echo base_url("index.php/flashcard/disable/".$id) ?>>disable</a>
<a href=<?php echo base_url("index.php/flashcard/delete/".$id) ?>>delete</a>
