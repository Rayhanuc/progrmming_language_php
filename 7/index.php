<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Array</title>

        <!-- bootstrap css link -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- font-awesome css link -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- style css link -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- responsive css link -->
        <link href="assets/css/responsive.css" rel="stylesheet">
        <!-- css link end -->
        
    </head>
    <body>
        
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        echo "<h1 class='text-center'>Programming Language PHP</h1> \n<br/>";
                        echo "<h3 class='text-center'>PHP Basics – Array – Part 7</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>
<code>
$array = [];
$array2 = ['Manik', 'Koddus', 'Murad', 75, 18, 99, 245];
$fruits = array("Appple", "Banana", "Jackfrut", "Papaya", "Tangerine", "Pineapple", "Sapota");
// $days_name = 

print_r($array2); // The value of the variable will be printed if it is a string, integer, or float

echo "</br>";

var_dump($array2)."<br>"; // It displays information about one or more variables, including their data type and value, and also provides additional information such as the length of strings and the number of elements in an array.
echo "</br>";
echo "\$array2 key 0 value is : ".$array2[0]."</br>";
echo "\$array2 key 1 value is : ".$array2[1]."</br>";
echo "\$array2 key 2 value is : ".$array2[2]."</br>";
echo "\$array2 key 3 value is : ".$array2[3]."</br>";
echo "\$array2 key 4 value is : ".$array2[4]."</br>";
echo "\$array2 key 5 value is : ".$array2[5]."</br>";
echo "\$array2 key 6 value is : ".$array2[6]."</br>";
echo "</br>";
echo "<strong style='font-size: 18px;'>Total value have in this \$array2 array : </strong>".count($array2);

echo "</br>";
print_r($fruits)."<br>"; // The value of the variable will be printed if it is a string, integer, or float

echo "</br>";

echo "</br>";
echo "\$fruits key 0 value is : ".$fruits[0]."</br>";
echo "\$fruits key 1 value is : ".$fruits[1]."</br>";
echo "\$fruits key 2 value is : ".$fruits[2]."</br>";
echo "\$fruits key 3 value is : ".$fruits[3]."</br>";
echo "\$fruits key 4 value is : ".$fruits[4]."</br>";
echo "\$fruits key 5 value is : ".$fruits[5]."</br>";
echo "\$fruits key 6 value is : ".$fruits[6]."</br>";
echo "</br>";

echo "<strong style='font-size: 18px;'>Total value have in this \$fruits array : </strong>".count($fruits);
echo "</br>";

</code>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-area code-result-area">

                        <?php
                        echo "<h4>PHP Code Result: </h4>";
                        
// php code start
echo "<hr>";
$array = [];
$array2 = ['Manik', 'Koddus', 'Murad', 75, 18, 99, 245];
$fruits = array("Appple", "Banana", "Jackfrut", "Papaya", "Tangerine", "Pineapple", "Sapota");
// $days_name = 

print_r($array2); // The value of the variable will be printed if it is a string, integer, or float

echo "</br>";

var_dump($array2)."<br>"; // It displays information about one or more variables, including their data type and value, and also provides additional information such as the length of strings and the number of elements in an array.
echo "</br>";
echo "\$array2 key 0 value is : ".$array2[0]."</br>";
echo "\$array2 key 1 value is : ".$array2[1]."</br>";
echo "\$array2 key 2 value is : ".$array2[2]."</br>";
echo "\$array2 key 3 value is : ".$array2[3]."</br>";
echo "\$array2 key 4 value is : ".$array2[4]."</br>";
echo "\$array2 key 5 value is : ".$array2[5]."</br>";
echo "\$array2 key 6 value is : ".$array2[6]."</br>";
echo "</br>";
echo "<strong style='font-size: 18px;'>Total value have in this \$array2 array : </strong>".count($array2);

echo "</br>";
print_r($fruits)."<br>"; // The value of the variable will be printed if it is a string, integer, or float

echo "</br>";

echo "</br>";
echo "\$fruits key 0 value is : ".$fruits[0]."</br>";
echo "\$fruits key 1 value is : ".$fruits[1]."</br>";
echo "\$fruits key 2 value is : ".$fruits[2]."</br>";
echo "\$fruits key 3 value is : ".$fruits[3]."</br>";
echo "\$fruits key 4 value is : ".$fruits[4]."</br>";
echo "\$fruits key 5 value is : ".$fruits[5]."</br>";
echo "\$fruits key 6 value is : ".$fruits[6]."</br>";
echo "</br>";

echo "<strong style='font-size: 18px;'>Total value have in this \$fruits array : </strong>".count($fruits);
echo "</br>";


// php end
                        ?>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-area-text">
                        <p ><?php echo "© 2023 -  <a  target='_blank' href='https://rayhanuddinchy.com/'>Rayhan Uddin Chowdhury</a>" ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- jquery js link -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- bootstrap js link -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- main js link -->
        <script src="assets/js/main.js"></script>
    </body>
</html>