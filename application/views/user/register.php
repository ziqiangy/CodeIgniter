<style>
    .box-father{
        display:flex;
        justify-content:center;
    }
    .box-child{   
        width:400px;
        height:500px;
        border:3px solid black;
        background-color:#fff7d1;
        border-radius:10px;
        padding:15px;
        
    }

    .h-title{
        text-align:center;
    }
    .text-father{
        display:flex;
        justify-content:center;
    }
</style>


<div class="box-father">
    <div class="box-child">
    <div class="h-title">
            <h1>Register</h1>
        </div>
        <div class="text-father">
            <div class="text-child">

                <?php echo validation_errors(); ?>
                <fieldset>

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

                </fieldset>

                <ul>
                    <li>Has minimum 8 characters in length.</li>
                    <li>At least one uppercase English letter.</li>
                    <li>At least one lowercase English letter.</li>
                    <li>At least one digit.</li>
                    <li>At least one special character, #?!@$%^&*-~</li>
                </ul>

                <?php echo anchor('user/login','Already have a account? Go Login') ?>
                            
            </div>
        </div>
    </div>
</div>