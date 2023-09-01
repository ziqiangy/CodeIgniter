
    <?php echo form_open('flashcard/insertOne'); ?>
    <label for="term">Term:</label><br>
    <input type="text" name="term" value=""/><br>
    <label for="definition">Definition:</label><br>
    <textarea name="definition" rows="5" cols="50"></textarea><br>
    <label>Flashcard Categories</label>
    <select name="category_id">
        <?php foreach($data as $d){ ?>
            <option value="<?php echo $d["id"] ?>"><?php echo $d["name"] ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Submit"/>

</form>
