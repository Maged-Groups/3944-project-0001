<?php
// ## Challenge 5: Generate Name Initials

declare (strict_types=1);

require_once 'helpers/index.php';

$userName = 'marleen nabil nassif';

dump ($userName);

$userNameInitials = Str:: initials($userName);

dump ($userNameInitials);