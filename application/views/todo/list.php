<style>
    .box-father{
        display:flex;
        justify-content:center;
    }
    .box-child{   
        width:400px;
        /* height:300px; */
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
            <h3>Todo list</h3>
        </div>
        <?php echo anchor("todo/insert","insert",array("class"=>"btn btn-primary")) ?>

        <div class="text-father">
            <div class="text-child">            
            <table>
                <tr>
                    <th>Todo list</th>    
                </tr>
    
                <?php foreach($data as $d) { ?>            
                <tr class="">                
                    <td><?php echo anchor("todo/update/".$d['id'],$d['task']) ?></td>                            
                </tr>
                <?php } ?>
            </table>        
            </div>
        </div>
    </div>
</div>
