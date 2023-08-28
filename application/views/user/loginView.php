
please login with your username and Email address:

<?php echo form_open('user/login') ?>
<label for="">Username or Email</label><br>
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

<p>Forget your password?

<a title="Go Forgetpassword" href='<?php echo base_url ('index.php/user/forgetPasswordView'); ?>'>Go Forget Password</a>

</p>





<style>
    body{
        margin:0;
    }
    .box-father{
        /* outline here not working */
        /* outline:10px solid black; */
        height:100vh;
        position:relative;
        /* background-color:#fff2ab; */
    }
    .box-child{
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        width:500px;
        height:350px;
        border:3px solid black;
        background-color:#fff7d1;
        border-radius:10px;
    }
</style>


<div class="box-father">
    <div class="box-child">
        <div class="text-father">
            <div class="text-child">            
                            
            </div>
        </div>
    </div>
</div>