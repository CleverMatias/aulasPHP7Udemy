<?php

require_once 'config.php';

//session_regenerate_id(); // gera um novo id da sessão

echo session_id();

echo "<br>";

var_dump($_SESSION);

echo "<a href='sessao3.php'>sessão 3<br></a>";
