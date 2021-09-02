<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary of order</title>

    <style>

        #container{
            margin-left:auto;
            margin-right:auto;
            text-align:center;
        }

    </style>

</head>

<body>
    
    <div id="container">
       
        <div id = "order">

             <h2> Cost of Your order is: </h2>

            <br>

               <h1>
                    <?php

                        function auto_loader($class){
                            $file = "{$class}.php";
                            
                            if(is_file($file)){
                                    include $file;
                            }

                        }
                        
                        spl_autoload_register("auto_loader");

                        auto_loader('classBakery');

                        $object = new Bakery($_POST['cake'],$_POST['bread']);

                    ?>
        
                </h1>

        </div>

        <div id ="home">

            <a href="http://localhost/php/php1/">Home Page</a>
        
        </div>
    </div>

</body>
</html>