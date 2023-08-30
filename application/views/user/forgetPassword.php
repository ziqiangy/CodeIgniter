<style>
    .box-father{
        /* outline here not working */
        /* outline:10px solid black; */
        
        height:calc(100vh - 50px);
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
    <p>please enter your email:</p>
    <?php echo form_open("user/forgetPassword"); ?>
    <input type="text" name="email" value="">
    <input type="submit" value="submit">
</form>
            </div>
        </div>
    </div>
</div>