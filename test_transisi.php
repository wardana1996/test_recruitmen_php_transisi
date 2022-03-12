<?php
    $nilai = array(72,65,73,78,75,74,90,81,87,65,55,69,72,78,79,91,100,40,67,77,86);

    //untuk nilai tertinggi
    echo "nilai tertinggi :" . max($nilai) ."<br/>";

    //untuk nilai rata - rata
    $rata_rata = array_sum($nilai);
    $total = $rata_rata / 21 ;
    echo "nilai rata - rata :" . number_format((float)$total, 2, '.', '') ."<br/>";

    //untuk nilai terendah 
    echo "nilai terendah :" . min($nilai) ."<br/><br/>";

    //untuk mendapatkan jumlah huruf kecil
    $input = 'TranSISI';
    
    echo $input . " mengandung " . strlen(getCapitalLetters($input)) . " buah huruf kecil <br><br/>";

    function getCapitalLetters($str)
    {
    if(preg_match_all('#([abcdefghijklmnopqrstuvwxyz]+)#',$str,$matches))
        return implode('',$matches[1]);
    else
        return false;
    }

    //unigram , bigram , trigram
    $inputs = 'Jakarta adalah ibukota negara Republik Indonesia';
    //unigram
    echo "Unigram : " . str_replace(" ",", ",strtolower($inputs)) . "<br>";
    //bigram
    $secondSpace = array_chunk(explode(" ",$inputs),2);
    foreach( $secondSpace as &$val) {
        $val  = implode(" ",$val);
    }
    echo "Bigram : " . strtolower(implode(",",$secondSpace)) . "<br>";
    //trigram
    $thirdSpace = array_chunk(explode(" ",$inputs),3);
    foreach( $thirdSpace as &$val) {
        $val  = implode(" ",$val);
    }
    echo "Trigram : " . strtolower(implode(",",$thirdSpace)) . "<br><br/>";

    //tabel kelipatan 8
    $table = array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59','60','61','62','63','64'); 
    $a = array(); 
    $i = 0; 
    foreach($table as $k => $v) { 
        if ($k % 8 == 0) { 
            $i = $k; $a[$k][] = $v; 
            continue; 
        }; 
        if ($k % 8 != 0) { 
            $a[$i][] = $v; 
        } 
    } 
    echo '<table border="1">'; 
    foreach($a as $k => $v) { 
        echo '<tr>'; 
        foreach($v as $key => $val) { 
            echo '<td style="background-color: black; color: white";>'.$val.'</td>'; 
        } echo '</tr>'; 
    } 
    echo '</table><br>';

    //pencarian kata
    $arr = [
        ['f' , 'g' , 'h' , 'i'],
        ['j' , 'k' , 'p' , 'q'],
        ['r' , 's' , 't' , 'u']
    ];

    $arrays1 = [ $arr[0][0], $arr[0][1] , $arr[0][2] , $arr[0][3]];
    $arrays2 = [ $arr[0][0], $arr[0][1] , $arr[0][2] , $arr[1][2]];
    $arrays3 = [ $arr[0][0], $arr[1][0] , $arr[2][0] , $arr[2][1], $arr[2][2], $arr[1][2] ];
    $arrays4 = [ $arr[0][0], $arr[0][1] , $arr[0][2] , $arr[1][3] ];
    $arrays5 = [ $arr[0][0], $arr[2][1] , $arr[2][2] ];
    $arrays6 = [ $arr[1][2], $arr[1][3] , $arr[2][0] ];
    $arrays7 = [ $arr[0][0], $arr[0][1] , $arr[0][2] , $arr[0][2]];

    // print_r($arrays7);
    $arr1 = implode("",$arrays1);
    $arr2 = implode("",$arrays2);
    $arr3 = implode("",$arrays3);
    $arr4 = implode("",$arrays4);
    $arr5 = implode("",$arrays5);
    $arr6 = implode("",$arrays6);
    $arr7 = implode("",$arrays7);

    if ($arr1 == 'fghi') {
        echo 'true <br>';
    } else {
        echo 'false <br>';
    }

    if ($arr2 == 'fghp') {
        echo 'true <br>';
    } else {
        echo 'false <br>';
    }

    if ($arr3 == 'fjrstp') {
        echo 'true <br>';
    } else {
        echo 'false <br>';
    }

    if ($arr4 == 'fghq') {
        echo 'false <br>';
    } else {
        echo 'true <br>';
    }

    if ($arr5 == 'fst') {
        echo 'false <br>';
    } else {
        echo 'true <br>';
    }

    if ($arr6 == 'pqr') {
        echo 'false <br>';
    } else {
        echo 'true <br>';
    }

    if ($arr7 == 'fghh') {
        echo 'false <br>';
    } else {
        echo 'true <br>';
    }

    
    // function convertArray($ar, $sep = '') {
    //     $str = '';
    //     foreach ($ar as $val) {
    //         $str .= implode($sep, $val);
    //         $str .= $sep; 
    //     }
    //     $str = rtrim($str, $sep); 
    //     return $str;
    // }

    //fghi
    // if (strpos(convertArray($arr), 'fghi') !== false) {
    //     echo 'true <br>';
    // } else {
    //     echo 'false <br>';
    // }

    //fgh
    // if (stripos(convertArray($arr), 'fgh') !== false) {
    //     echo 'true <br>';
    // } else {
    //     echo 'false <br>';
    // }

    // //fjrstp
    // if (strpos(convertArray($arr), 'fjrstp') !== false) {
    //     echo 'true <br>';
    // } else {
    //     echo 'false <br>';
    // }
?>