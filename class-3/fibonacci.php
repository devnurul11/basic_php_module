<?php
function fibonacci($userInt ,$terms ) {
      if ($userInt==0) {
        $veryOldVal = $userInt;
        $old =$userInt+1;
        $new = $userInt+1;

        for ($i = 0; $i < $terms; $i++) {
            if ($i == $terms-1) {
                 echo$veryOldVal;
                $old = $new;
                $new = $veryOldVal + $old;
                $veryOldVal = $old;
            }else{
                echo$veryOldVal.", ";
                $old = $new;
                $new = $veryOldVal + $old;
                $veryOldVal = $old;
            }
           
        }
      } elseif($userInt >1 ){
        
        $veryOldVal = $userInt;
        $old =$userInt;
        $new = $userInt;
         
    for ($i = 0; $i < $terms; $i++) {
          if ($i == $terms-1) {
                 echo$veryOldVal;
                $old = $new;
                $new = $veryOldVal + $old;
                $veryOldVal = $old;
            }else{
                echo$veryOldVal.", ";
                $old = $new;
                $new = $veryOldVal + $old;
                $veryOldVal = $old;
            }
    }
      }
    
}

fibonacci(2,6);

// function fibonacci($start, $terms) {
//     $previous = $start - 1;
//     $current = $start;

//     for ($i = 0; $i < $terms; $i++) {
//         $next = $previous + $current;
//         echo $current, ", ";
//         $previous = $current;
//         $current = $next;
//     }
// }

// fibonacci(0, 6);


