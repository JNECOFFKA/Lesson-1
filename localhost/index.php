
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Мое решение экзамена !</title>
    </head>
    <body>
        <style>
            th, td {
                padding: 10px;
            }
    
            th {
                background: #606060;
            }
    
            td {
                background: #b5b5b5;
            }
        </style>
    
    
        <table>
            <tr>
                <th>ID</th>
                <th>ИМЯ</th>
                <th>ВОЗРАСТ</th>
                <th>СОВЕРШЕННОЛЕТНОСТЬ</th>
            </tr>
        
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <?php
            include_once("database.php");
            $users = mysqli_query($connect, "SELECT * FROM `users`");
            $arr = mysqli_fetch_all($users);
            foreach($arr as $user){

            }
            
            ?>

            <tr>
                <td><?= $user[0]?></td>
                <td><?= $user[1]?></td>
                <td><?= $user[2]?></td>
                <td><?= $user[3]?></td>
                <td <?php if ($user >= 18){
                    echo "Совершеннолетний";
                }else {
                    echo "Несовершеннолетний";
                }?></td>
                
            </tr>
        </table>
        

        
            
        
    </body>
    </html>