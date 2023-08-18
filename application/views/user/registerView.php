<html>
    <h1>register me</h1>

    <?php echo form_open("user/register"); ?>

        <label>first name</label><br>

        <input type="text" name="firstname" value="" /><br>

        <label>last name</label><br>
        <input type="text" name="lastname" value="" /><br>

        <label>username</label><br>
        <input type="text" name="username" value="" /><br>

        <label>password</label><br>
        <input type="password" name="password" value="" /><br>

        <label>email</label><br>
        <input type="text" name="email" value="" /><br>

        <input type="submit" value="Register" /><br>

    </form>

    <ul>
        <li>Has minimum 8 characters in length.</li>
        <li>At least one uppercase English letter.</li>
        <li>At least one lowercase English letter.</li>
        <li>At least one digit.</li>
        <li>At least one special character, #?!@$%^&*-~</li>
    </ul>
</html>