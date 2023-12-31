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
            <h1>Profile</h1>
        </div>
        <div class="text-father">
            <div class="text-child"> 
    <h3>username: <?php echo $username ?></h3>

    <h3>firstname: <?php echo $firstname ?></h3>
    <h3>lastname: <?php echo $lastname ?></h3>
    <h3>email: <?php echo $email ?></h3>

    <!-- update can apply only to firstname and last name, and update time applied. -->


    <?php echo form_open("user/update") ?>
    <fieldset>
        <label>Firstname</label><br>
        <input type="text" name='firstname' value=<?php echo $firstname ?>><br>
        <label>Lastname</label><br>
        <input type="text" name='lastname' value=<?php echo $lastname ?>><br>
        <input type="hidden" name='id' value=<?php echo $id ?>>
        <input type="submit" value="update"><br>
    </fieldset>
    </form>

    <br>
    <br>

    <?php echo form_open("user/logout") ?>
        <input type="submit" value="logout"><br>
    </form>

    <br>
    <br>
    <?php echo form_open("user/deactivate") ?>
        <input type="submit" value="Close account"><br>
    </form>
    </div>
        </div>
    </div>
</div>