<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP Foreach Loop</title>

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
                        echo "<h3 class='text-center'>PHP Basics – Foreach Loop – Part 13</h3> \n<br/>";
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

echo "<h3>Foreach loop</h3>";
// echo "===========<br>";

$array = [
    1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22
];

foreach($array as $key => $value) {
    echo $key . ' : '. $value. '<br>';
}
echo "===========<br>";

echo "<h3>10 Multiplication by Foreach loop</h3>";
foreach($array as $key => $value) {
    echo '10x' . $value . '=' . $value * 10 . '<br>';
}

echo "===========<br>";
$address = [
    "Name" => "Rayhan Uddin Chowdhury",
    "Email" => "info@rayhanuddinchy.com",
    "Age" => "38",
    "Gender" => "Male",
    "Profession" => "<strong>Web Development</strong>",
];

foreach ($address as $key => $value) {
    echo $key ." : ". $value."<br>";
}


// $cityName = 



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