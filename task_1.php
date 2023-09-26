<?php

$text = "The quick brown fox jumps over the lazy dog";
function lowercaseAndReplace($text) {
    $text = strtolower($text);
    $text = str_replace("brown", "red", $text);
    return $text;
}
echo lowercaseAndReplace($text);

