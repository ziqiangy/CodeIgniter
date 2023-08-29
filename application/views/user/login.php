
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
                <h1>Login</h1>

                <?php echo form_open('user/login') ?>
                <label for="">Username or Email</label><br>
                <input type="text" name='username' value=''><br>
                <label for="">Password</label><br>
                <input type="password" name='password' value=''><br>
                <input type="submit" value='login'><br>

                </form>

                <?php echo anchor('user/register','Don\'t have an account? Go Register'); ?>
                <br>
                <?php echo anchor('user/forgetPassword','Forget your password? Go Forget Password'); ?>  
            </div>
        </div>
    </div>
</div>