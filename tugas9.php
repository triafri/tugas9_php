<?php
    function fibonacci($fibo){
        $fibo1=0;
        $fibo2=1;
        $counter = 0;

        do{
            $counter = $counter+1;
            echo ' '.$fibo1; 
            $fibo3 = $fibo2 + $fibo1; 
            $fibo1 = $fibo2; 
            $fibo2 = $fibo3; 
        } while ($counter < $fibo);
    }

    function deret_prima($n){
        for($i=1; $i<=$n; $i++){
            $cek=0;
            for($j=1;$j<=$i;$j++){ 
                if ($i%$j == 0){
                    $cek++;
                }
            }
            if ($cek == 2){
                echo "".$i.",";
            }
        }
    }

    echo "===== Deret Fibonacci Dari 0-20 ===== <br>";
    echo fibonacci(22), "<br><br>";
    echo "===== Deret Bilangan Prima Dari 0-200 ===== <br>";
    echo deret_prima(200);
?>