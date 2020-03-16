<?php
function rhombus($height){

    $input = "*";
    $width = $height * 2 - 1;
    if ($height == 0 or $height == NULL){
        echo "Please write the height of the rhombus :)";
    } elseif ($height > 0) {

        for ($i = 1; $i <= $height; $i++) {
           echo str_pad($input, $width, ".", STR_PAD_BOTH), PHP_EOL;
            $input .= "**";
        }


        for ($i = 1; $i <= $height-1; $i++) {
            $input = substr_replace($input, ".", 0, 3);
            $input = substr_replace($input, ".", -1, 3);
            echo str_pad($input, $width, ".", STR_PAD_BOTH), PHP_EOL;
        }
    }
}

rhombus(10);

