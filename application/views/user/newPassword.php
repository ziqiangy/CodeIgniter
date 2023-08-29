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
        /* width:500px; */
        /* height:500px; */
        border:3px solid black;
        background-color:#fff7d1;
        border-radius:10px;
        padding:15px;
    }
</style>


<div class="box-father">
    <div class="box-child">
        <div class="text-father">
            <div class="text-child"> 
                <?php if(isset($err)) echo $err ?>
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