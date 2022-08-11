<?php

if (isset($_POST['submit']))
{
    $num = $_POST['num'];
    $ctr = 0;
    $num1 = 1;
    $num2 = $num3 = 0;

    if ($num > 20 || $num < 1)
    {
        echo "Number is invalid! Should be in between 1 and 20";
    }

    else
    {
        echo $ctr."<br>";
        echo $num1."<br>";
        for ($ctr = 0; $ctr < $num - 2; $ctr++)
        {

            $num3 = $num1 + $num2;
            $num2 = $num1;
            $num1 = $num3;

            echo $num3."<br>";
        }
    }
}