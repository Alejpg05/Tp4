<?php
    $acumulador=0;
    for ($i=1;$i<=20;$i++) {
      if($i%2==0){
        $acumulador+=$i;
        print "<p>$acumulador</p>";
    }
}
?>