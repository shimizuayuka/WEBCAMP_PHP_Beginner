<?php
// 元の文字列：「;」で区切られていると想定
$base_string = "Stollen;Panettone;Pandoro;Kouglof;Lussekatter";
echo "元の文字列 \n";
var_dump($base_string);

// explode()で、;のところで分解
$exploded_array = explode(";", $base_string);
echo "\n explodeした配列 \n";
var_dump($exploded_array);

// implode()で、,(カンマ)でつなげて再組み立て
$imploded_string = implode(",", $exploded_array);
echo "\n implodeで繋げた文字列 \n";
var_dump($imploded_string);



//
$colors = [
    "Red",
    "Yellow",
    "Green",
    "Blue",
    "Black",
];
//
foreach($colors as $v) {
    echo "{$v} \n";
}
//
$colors = [
    "Red" => "#ff0000",
    "Yellow" => "#ffff00",
    "Green" => "#00ff00",
    "Blue" => "#0000ff",
    "Black" => "#000000",
];
//
foreach($colors as $k => $v) {
    echo "{$k}: {$v} \n";
}