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
        <input type="text" name="password" value="" /><br>

        <label>email</label><br>
        <input type="text" name="email" value="" /><br>

        <input type="submit" value="Register" /><br>

    </form>
</html>