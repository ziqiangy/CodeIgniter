<?php echo form_open("flashcate/update") ?>
<label for="name">Name:</label>
<input type="text" name="name" value="<?php echo $name ?>">
<input type="hidden" name="id" value="<?php echo $id ?>">
<input type="submit" value="submit">
</form>

<?php echo anchor("flashcate/delete/".strval($id),"delete") ?>