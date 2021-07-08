<?php

$data = []; 

// if (isset($data["action"])){
//     $action = $data["action"];
// } else {
//     $action = "Nothing";
// }

// cara simplenya

$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;