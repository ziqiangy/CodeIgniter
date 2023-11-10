<style>
    .box-father{
        display:flex;
        justify-content:center;
    }
    .box-child{   
        width:400px;
        height:200px;
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
            <h1>Forget My Password</h1>
        </div>
        <div class="text-father">
            <div class="text-child">  
    <?php if(isset($err)) echo $err ?>
    <p>please enter your email:</p>
    <?php echo form_open("user/forgetPassword"); ?>
    <input type="text" name="email" value="">
    <input type="submit" value="submit">
</form>
            </div>
        </div>
    </div>
</div>