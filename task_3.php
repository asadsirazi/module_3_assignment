<?php

$grades = [85, 92, 78, 88, 95];

function sortingInDescendingOrder($grades) {
    rsort($grades);
    return $grades;
}

$grades = sortingInDescendingOrder($grades);
print_r($grades);