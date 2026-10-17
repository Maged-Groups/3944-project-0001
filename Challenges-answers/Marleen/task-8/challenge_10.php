<?php
declare(strict_types=1);
// ## Challenge 10: Select Random Winners
$participants = ["Ahmed", "Mona", "Omar", "Sara", "Ali"];
$selectedWinners = array_rand ($participants, 2);
var_dump ($selectedWinners);
