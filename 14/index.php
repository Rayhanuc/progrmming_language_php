<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP - What are Functions and Why Use Functions</title>

        <!-- bootstrap css link -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- font-awesome css link -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- style css link -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- responsive css link -->
        <link href="assets/css/responsive.css" rel="stylesheet">
        <!-- css link end -->

        <style>
            h3 {
                color: #9aaef1;
            }
        </style>
        
    </head>
    <body>
        
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        echo "<h1 class='text-center'>Programming Language PHP</h1> \n<br/>";
                        echo "<h3 class='text-center'>PHP Basics – What are Functions and Why Use Functions – Part 14</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>
<code>



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

echo "<h3>Normal code writing</h3>";
$number1 = 10;
$number2 = 20;

echo 'Result : ' . $number1 + $number2 . '<br>';


$number3 = 25;
$number4 = 10;

echo 'Result : ' . $number3 + $number4 . '<br>';
echo "===========<br>";

echo "<h3>User-defined functions</h3>";


function functionName() {
    echo 'Hello! I am from functionName.';
}

functionName();
echo "<br>";
echo "===========<br>";

function sum($n, $m) {
    echo $n + $m;
}
sum(57, 93);
echo "<br>";
sum(278, 27);
echo "<br>";

echo "===========<br>";

function total($l, $k) {
    return $l + $k;
}

echo total(36, 81);
echo "<br>";

echo total(36, 81) + 59;
echo "<br>";

echo total(500, 200) - 36;
echo "<br>";

echo total(50, 20) * 36;



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