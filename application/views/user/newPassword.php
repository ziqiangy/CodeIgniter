<style>
    .box-father{
        display:flex;
        justify-content:center;
    }
    .box-child{   
        width:400px;
        height:300px;
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
            <h1>Password Reset</h1>
        </div>
        <div class="text-father">
            <div class="text-child"> 
                <?php if(isset($_SESSION['auth'])) echo $_SESSION['auth'] ?>
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
            </div>
        </div>
    </div>
</div>