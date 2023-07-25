<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

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
            width:500px;
            height:350px;
            border:3px solid black;
            background-color:#fff7d1;
            border-radius:10px;
        }

        
    </style>

    <div class="box-father">
        <div class="box-child">
            <div class="text-father">
                <div class="text-child">
                    <div>Apple</div>
                    <div>苹果</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>