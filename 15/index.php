<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP - Introduction and Usage of Internal Functions</title>

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
                        echo "<h3 class='text-center'>PHP Basics – Introduction and Usage of Internal Functions – Part 15</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>
<code>

echo "<h3>Array</h3>";
$array = [
    20, 10, 40, 55, 59, 50, 60, 70, 90, 40, 55, 100, 10
];
echo '<h5>Before filter total value : '. count($array). '</h5>';
$filtered_array = array_unique($array);

var_dump($filtered_array.count);
echo '<br>';
echo '<h5>After filter total value : '. count($filtered_array). '</h5>';
echo '<pre>';
var_dump($filtered_array);
echo '</pre>';
echo '<br>';
echo '<pre>';
print_r($filtered_array);
echo '</pre>';
echo "===========<br>";

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

echo "<h3>Array</h3>";
$array = [
    20, 10, 40, 55, 59, 50, 60, 70, 90, 40, 55, 100, 10
];
echo '<h5>Before filter total value : '. count($array). '</h5>';
$filtered_array = array_unique($array);

var_dump($filtered_array.count);
echo '<br>';
echo '<h5>After filter total value : '. count($filtered_array). '</h5>';
echo '<pre>';
var_dump($filtered_array);
echo '</pre>';
echo '<br>';
echo '<pre>';
print_r($filtered_array);
echo '</pre>';
echo "===========<br>";


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