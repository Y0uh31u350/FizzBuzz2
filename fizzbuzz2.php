<?php

for($i=1; $i<151; $i++) {
  if($i % 3 == 0 || substr($i, -1) == 3) {
    print $i.'!<br>';
  } else {
    print $i.'<br>';
  }
}


 ?>
