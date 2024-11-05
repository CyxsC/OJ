/**
    * @param Integer $n
    * @return Integer
    */
function fib($n) {
    $i = 0;
    $j = 1;
    $num;
    for($x = 1; $x<$n; $x++){
        $num = $i + $j;
        $i = $j;
        $j = $num;
    }
    return $n?$j:$n;
}