
    <h1>register me</h1>

    <?php echo validation_errors(); ?>

    <?php echo form_open("user/register"); ?>

        <label>first name</label><br>

        <input type="text" name="firstname" value="<?php echo set_value('firstname'); ?>" /><br>

        <label>last name</label><br>
        <input type="text" name="lastname" value="<?php echo set_value('lastname'); ?>" /><br>

        <label>username</label><br>
        <input type="text" name="username" value="<?php echo set_value('username'); ?>" /><br>

        <label>password</label><br>
        <input type="password" name="password" value="<?php echo set_value('password'); ?>" /><br>

        <label>email</label><br>
        <input type="text" name="email" value="<?php echo set_value('email'); ?>" /><br>

        <input type="submit" value="Register" /><br>

    </form>

    <ul>
        <li>Has minimum 8 characters in length.</li>
        <li>At least one uppercase English letter.</li>
        <li>At least one lowercase English letter.</li>
        <li>At least one digit.</li>
        <li>At least one special character, #?!@$%^&*-~</li>
    </ul>


    
<p>Already have a account?

<a title="Go Login" href='<?php echo base_url ('index.php/user/loginView'); ?>'>Go Login</a>




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