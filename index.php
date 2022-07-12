<?php

require_once("vendors/router.php");

get('/', 'src/pages/frontpage/index.php');
get('/landing', 'src/pages/landing/index.php');
get('/crm', 'crm/index.php');


?>