<?php

require_once 'pdo.php';
require_once 'helper.php';

$request = $_POST;

 $name= $request['name'];
 $id= $request['id'];

update($name, $id);
redirectHome();

