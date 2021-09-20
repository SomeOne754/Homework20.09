<td>
    <?php
    echo DateTime::createFromFormat('d-m-Y', '31-12-2020')->format('Y-m-d') .PHP_EOL;

    $IsIt = 'london is the capital of great britain';
    echo ucwords($IsIt) .PHP_EOL ;

    $LettersOnly = '1a2b3c4b5d6e7f8g9h0';
    $LettersOnly = preg_replace('/\d/', '', $LettersOnly);
    echo $LettersOnly .PHP_EOL;

    $Password = readline("Enter the password");
    $Counter = strlen($Password);
    if($Counter >= 7 && $Counter <= 12 )
    {
        echo 'Password is suitable' .PHP_EOL;
    }
    else{
        Echo 'Password is not suitable, make another one' .PHP_EOL;
    }
    echo "Amount of symbols: ".$Counter .PHP_EOL;
    echo "Password output: ".$Password .PHP_EOL;
    ?>

</td>