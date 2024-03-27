<?php

require "functions.php";

require "router.php";

require "Database.php";

$config = require("config.php");


$db = new Database($config, 'root', '');

$posts = $db->query("select id_idx,name,baselevel,gold from u_hero ")->fetchall();

//dd($posts);
