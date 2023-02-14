<?php
function fibonacci($userInt=0 ,$terms=8 ) {
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

fibonacci(0, 5);



