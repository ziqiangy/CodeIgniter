<html>
please login with your username and password:

<?php echo form_open('user/login') ?>
<label for="">Username</label><br>
<input type="text" name='username' value=''><br>
<label for="">Password</label><br>
<input type="password" name='password' value=''><br>
<input type="submit" value='login'><br>

</form>


<!-- <?php form_open("user/register") ?>
<p>Don't have an account? go register</p>
<input type="submit" value="register">
</form> -->
<p>Don't have an account?

<a title="Go Register" href='<?php echo base_url ('index.php/user/registerView'); ?>'>Go Register</a>

</p>

</html>