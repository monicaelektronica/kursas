<?php
 $metai = 1774;
 $cities3['Vasingtonas'] = [0.6, 1790, 'JAV'] ;

 if ($metai >= $cities3['Vasingtonas'][1]) {
  echo " Vasingtonas yra JAV sostine";
} elseif ($metai == 1774) {
  echo "JAV sostinė vis dar Filadelfijoje.";
} else {
  echo 'Liko '.($cities3['Vasingtonas'][1] - $metai).' metai (-u) iki Vasingtono sukurimo';
}

 ?>
