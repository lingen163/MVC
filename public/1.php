    <!-- 
    传统WEB开发
    1.从数据库中获取数据；
    2.在HTML中显示数据； 
    -->
    <?php
        $data=[
            ["id"=>1,"name"=>"tom","age"=>12,"phone"=>"13456789493"],
            ["id"=>2,"name"=>"lee","age"=>11,"phone"=>"13868758987"],
            ["id"=>3,"name"=>"jack","age"=>17,"phone"=>"13588487665"],
            ["id"=>4,"name"=>"Peter ","age"=>15,"phone"=>"13987379092"]
        ];
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta"name"="viewport" content="width=device-width, initial-scale=1.0">
            <title>传统WEB开发</title>
        
            <style>
                body{text-align:center;margin-top: 100px;}
                table{border:1px solid ;margin:0 auto;}
                tr,th,td{border:1px solid ;}
                th,td{width:200px;height:40px;}
            </style>
        </head>
        <body>    
            <table >
                <h2>用户信息表</h2>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>age</th>
                    <th>phone</th>
                </tr>
            <?php  foreach ($data as $value):?>    
                <tr>
                    <td><?php echo $value["id"] ?></td>
                    <td><?php echo $value["name"]?> </td>
                    <td><?php echo $value["age"]?> </td>
                    <td><?php echo $value["phone"]?> </td>
                </tr>
            <?php endforeach; ?>
            </table>
        </body>
    </html>
