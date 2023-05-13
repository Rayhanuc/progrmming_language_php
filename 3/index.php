<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Define Functions – Assign Constant Values</title>

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
                        echo "<h3 class='text-center'>PHP Basics – Define Functions – Assign Constant Values – Part 3</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

$welcome_text = 'Non quos soluta quod sapiente vitae nulla amet quo hic';
echo $welcome_text . '<br/>';

define('PI', 3.1416);

echo PI;
echo "\n<br/>";

$work = 'Shopping';
echo $work;
echo "\n<br/>";
$work = 'Run';
echo $work;
echo "\n<br/>";

// Content define
define('DISTRICT_NAME', 'CHITTAGONG');
echo DISTRICT_NAME;
echo "\n<br/>";
define('OIL', 'COCONUT');
echo OIL;
echo "\n<br/>";
define('SERVICE_NAME', 'FARMER');
echo SERVICE_NAME;
echo "\n<br/>";
define('OFFICERS', 85);
echo OFFICERS;
echo "\n<br/>";
define('MOBILE_PRICE', 25000);
echo MOBILE_PRICE;

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

$welcome_text = 'Non quos soluta quod sapiente vitae nulla amet quo hic';
echo $welcome_text . '<br/>';

define('PI', 3.1416);

echo PI;
echo "\n<br/>";

$work = 'Shopping';
echo $work;
echo "\n<br/>";
$work = 'Run';
echo $work;
echo "\n<br/>";

// Content define
define('DISTRICT_NAME', 'CHITTAGONG');
echo DISTRICT_NAME;
echo "\n<br/>";
define('OIL', 'COCONUT');
echo OIL;
echo "\n<br/>";
define('SERVICE_NAME', 'FARMER');
echo SERVICE_NAME;
echo "\n<br/>";
define('OFFICERS', 85);
echo OFFICERS;
echo "\n<br/>";
define('MOBILE_PRICE', 25000);
echo MOBILE_PRICE;




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