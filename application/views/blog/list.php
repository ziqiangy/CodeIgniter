<style>
    .box-father{
        display:flex;
        justify-content:center;
    }
    .box-child{   
        width:400px;
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
            <h1>Blog list</h1>
        </div>
        <?php echo anchor("blog/insert","insert",array("class"=>"btn btn-primary")) ?>
        <div class="text-father">
            <div class="text-child">            
            <table>
                <tr>
                    <th>Blog list</th>    
                </tr>
    
                <?php foreach($data as $d) { ?>            
                <tr class="">                
                    <td><?php echo anchor("blog/update/".$d['id'],$d['title']) ?></td>                            
                </tr>
                <?php } ?>
            </table>        
            </div>
        </div>
    </div>
</div>
