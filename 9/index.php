<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP Multidimensional Arrays</title>

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
                        echo "<h3 class='text-center'>PHP Basics – Multidimensional Arrays – Part 9</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>
<code>
$array = [
    'name_part1' => 'Md.',
    'name_part2' => 'Rayhan',
    'name_part3' => 'Uddin',
    'name_part4' => 'Chowdhury',
    'age'        => '38',
    'address'    => [
        'country' => 'Bangladesh',
        'city' => 'Chittagong',
        'police_station' => 'Anowara',
        'post_office' => 'Haildhor',
        'house_address' => 'Alim Uddin Chowdhury House',
        'zipcode'       => '6758'
    ],
    'mobile_number' => [
        'country_prefix' => '+880',
        'national_number' => '1815666267'
    ]
];

echo "My Name is {$array[name_part1]} {$array[name_part2]} {$array[name_part3]} {$array[name_part4]}</br>";
echo "I live at {$array[address][house_address]}, {$array[address][post_office]}, {$array[address][police_station]}, {$array[address][city]}, {$array[address][country]}.</br>";
echo "My mobile number is {$array[mobile_number][country_prefix]}-{$array[mobile_number][national_number]}";

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
 
$array = [
    'name_part1' => 'Md.',
    'name_part2' => 'Rayhan',
    'name_part3' => 'Uddin',
    'name_part4' => 'Chowdhury',
    'age'        => '38',
    'address'    => [
        'country' => 'Bangladesh',
        'city' => 'Chittagong',
        'police_station' => 'Anowara',
        'post_office' => 'Haildhor',
        'house_address' => 'Alim Uddin Chowdhury House',
        'zipcode'       => '6758'
    ],
    'mobile_number' => [
        'country_prefix' => '+880',
        'national_number' => '1815666267'
    ]
];

echo "My Name is {$array[name_part1]} {$array[name_part2]} {$array[name_part3]} {$array[name_part4]}</br>";
echo "I live at {$array[address][house_address]}, {$array[address][post_office]}, {$array[address][police_station]}, {$array[address][city]}, {$array[address][country]}.</br>";
echo "My mobile number is {$array[mobile_number][country_prefix]}-{$array[mobile_number][national_number]}";


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