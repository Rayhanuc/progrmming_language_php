<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP Associative Array</title>

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
                        echo "<h3 class='text-center'>PHP Basics – Associative Array – Part 8</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>
<code>
$name = array('Robin', 'Korim', 'Nokima', 'Fatima', 'Abusalim', 'Humaiun Ahmed');
$occupation = [
    'robin' => 'Teacher',
    'korim' => 'Doctor',
    'nokima' => 'Teacher',
    'fatima' => 'Programmer',
    'abusalim' => 'Designer',
    'humaiunAhmed' => 'Writer'
];
echo "</br>";
print_r($name);
echo "</br>";
print_r($occupation);
echo "</br>";


echo "<h2>Use as sentance</h2>";
echo "{$name[0]} is a {$occupation[robin]}</br>";
echo "{$name[1]} is a {$occupation[korim]}</br>";
echo "{$name[2]} is a {$occupation[nokima]}</br>";
echo "{$name[3]} is a {$occupation[fatima]}</br>";
echo "{$name[4]} is a {$occupation[abusalim]}</br>";
echo "{$name[5]} is a {$occupation[humaiunAhmed]}";

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
$name = array('Robin', 'Korim', 'Nokima', 'Fatima', 'Abusalim', 'Humaiun Ahmed');
$occupation = [
    'robin' => 'Teacher',
    'korim' => 'Doctor',
    'nokima' => 'Teacher',
    'fatima' => 'Programmer',
    'abusalim' => 'Designer',
    'humaiunAhmed' => 'Writer'
];
echo "</br>";
print_r($name);
echo "</br>";
print_r($occupation);
echo "</br>";


echo "<h2>Use as sentance</h2>";
echo "{$name[0]} is a {$occupation[robin]}</br>";
echo "{$name[1]} is a {$occupation[korim]}</br>";
echo "{$name[2]} is a {$occupation[nokima]}</br>";
echo "{$name[3]} is a {$occupation[fatima]}</br>";
echo "{$name[4]} is a {$occupation[abusalim]}</br>";
echo "{$name[5]} is a {$occupation[humaiunAhmed]}";


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