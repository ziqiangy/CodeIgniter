<html>
    <p>please enter your new Password:</p>
    <?php echo form_open("user/newPassword"); ?>
    <input type="password" name="password" value="">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="submit" value="submit">
</form>
<ul>
        <li>Has minimum 8 characters in length.</li>
        <li>At least one uppercase English letter.</li>
        <li>At least one lowercase English letter.</li>
        <li>At least one digit.</li>
        <li>At least one special character, #?!@$%^&*-~</li>
    </ul>
</html>