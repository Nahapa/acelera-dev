<?php

$array = [8, 6, 1, 3, 4, 5, 3, 7, 1, 10, 7, 2, 9, 7, 9, 3];
$media = array_reduce($array, fn ($carry, $item) => $carry += $item);
$media /= 16;
echo $media;
