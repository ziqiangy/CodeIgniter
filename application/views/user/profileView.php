<html>
    <h3>username: <?php echo $username ?></h3>

    <h3>firstname: <?php echo $firstname ?></h3>
    <h3>lastname: <?php echo $lastname ?></h3>
    <h3>email: <?php echo $email ?></h3>

    <!-- update can apply only to firstname and last name, and update time applied. -->


    <?php echo form_open("user/update") ?>
    <fieldset>
        <label>Firstname</label><br>
        <input type="text" name='firstname' value=<?php echo $firstname ?>><br>
        <label>Lastname</label><br>
        <input type="text" name='lastname' value=<?php echo $lastname ?>><br>
        <input type="hidden" name='id' value=<?php echo $id ?>>
        <input type="submit" value="update"><br>
    </fieldset>
    </form>


    <?php echo form_open("user/logout") ?>
        <input type="submit" value="logout"><br>
    </form>
</html>