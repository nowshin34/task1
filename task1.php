<?php 

function 
print_even_number($start, $end, $step){
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 == 0) {
            echo "$i <br>";
        }
    }
}
print_even_number(1, 20, 2);



function 
print_even_number_while($start, $end, $step){
    while ($start <= $end) {
        if ($start % 2 == 0) {
            echo "$start <br>";
        }
        $start += $step;
    }
}
print_even_number_while(1, 20, 2);
function
print_even_number_do_while($start, $end, $step){
    do {
        if ($start % 2 == 0) {
            echo "$start <br>";}

        $start += $step;
    } while ($start <= $end);
}
print_even_number_do_while(1, 20, 2);