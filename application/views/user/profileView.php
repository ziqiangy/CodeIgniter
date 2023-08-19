<html>
    <h3>username: <?php echo $username ?></h3>

    <h3>firstname: <?php echo $firstname ?></h3>
    <h3>lastname: <?php echo $lastname ?></h3>
    <h3>email: <?php echo $email ?></h3>

    update can apply only to firstname and last name, and update time applied.


    <?php echo form_open("user/update") ?>
        <input type="text" name='firstname' value=<?php echo $firstname ?>>
        <input type="text" name='lastname' value=<?php echo $lastname ?>>
        <input type="hidden" name='id' value=<?php echo $id ?>>
        <input type="submit" value="update">
    </form>


    <?php echo form_open("user/logout") ?>
        <input type="submit" value="logout">
    </form>
</html>