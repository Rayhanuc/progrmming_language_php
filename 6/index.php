<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Condition if else</title>

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
                        echo "<h3 class='text-center'>PHP Basics – Condition if else – Part 6</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>
<code>
// $day = 'Friday';
$day = 'Monday';


if ($day === 'Friday' || $day === 'Saterday') {
    echo "Today is holiday!";
} else {
    echo 'Today is not holyday';
}

$a = 50;
$b = 100;

if ($b > $a) {
    echo "$b is bigger then $a";
}


$name = 'Name';

if ($name == 'Name') {
    echo "His name is Rayhan Uddin Chowdhury";
} else {
    echo "This is not his name";
}

if ($name == 'name') {
    echo "His name is Rayhan Uddin Chowdhury";
} else {
    echo "This is not his name";
}
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

// $day = 'Friday';
$day = 'Monday';


if ($day === 'Friday' || $day === 'Saterday') {
    echo "Today is holiday!";
} else {
    echo 'Today is not holyday</br>';
}

$a = 50;
$b = 100;

if ($b > $a) {
    echo "$b is bigger then $a</br>";
}


$name = 'Name';

if ($name == 'Name') {
    echo "His name is Rayhan Uddin Chowdhury</br>";
} else {
    echo "This is not his name</br>";
}

if ($name == 'name') {
    echo "His name is Rayhan Uddin Chowdhury</br>";
} else {
    echo "This is not his name</br>";
}

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