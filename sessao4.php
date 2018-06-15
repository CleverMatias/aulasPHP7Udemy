<?php
session_id('dtu3oiuj9pka8gh5l94or3ne83');
//
require_once 'config.php';

session_regenerate_id();

echo session_id();

echo "<br>";

var_dump($_SESSION);

echo "<a href='sessao3.php'>sessão 3<br></a>";
