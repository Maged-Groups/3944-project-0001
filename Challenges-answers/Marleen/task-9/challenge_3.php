<?php
declare(strict_types=1);

require_once 'helpers/index.php';


$userName = '   Marleen   Nabil  Nassif   ';
dump ($userName);

$userNameC = Str:: clean ($userName);
dump ($userNameC);