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

    td:nth-child(1) {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        float: left;	
        width: 100%;
        word-break: break-all;
        text-overflow: ellipsis;

        /* white-space: wrap;
        overflow: hidden;
        text-overflow:ellipsis; */

        /* margin-top:10px; */
        /* padding-bottom:10px; */
        margin-bottom:25px;
        /* border-bottom:2px solid black; */

    }
</style>


<div class="box-father">
    <div class="box-child">
        <div class="h-title">
            <h1>Notes</h1>
        </div>
        <div class="text-father">
            <div class="text-child">         
                <table>
                    <tr>
                        <th>Notes</th>
                    </tr>
                    <?php foreach($data as $d) { ?>
                            <tr class="">
                                <td><?php echo anchor("quicknote/update/".$d['id'],$d['content']); ?></td>           
                            </tr>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
