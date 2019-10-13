<?php

// Unordered array of bubbles to be sorted below
$bubbles = [2, 5, 7, 6, 9, 3, 1, 6, 3, 4];
$bubbles_count = count($bubbles);

// Keep searching until the bubbles have been sorted
for ($search_times=0; $search_times < $bubbles_count; $search_times++) {
	$done_searching = true;

	// Search through the array of bubbles
	for ($i=1; $i < $bubbles_count-$search_times; $i++) 
		// Find any unordered bubble pairs
		if ($bubbles[$i] < $bubbles[$i-1]) {
			// Order the unordered bubble pair ascending
			[$bubbles[$i-1], $bubbles[$i]] = [$bubbles[$i], $bubbles[$i-1]];
			$done_searching = false;
		}

	// Stop searching if the bubbles have been ordered
	if ($done_searching) break;
}

echo '<pre>';
print_r($bubbles);
/*
OUTPUT:

Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 3
    [4] => 4
    [5] => 5
    [6] => 6
    [7] => 6
    [8] => 7
    [9] => 9
)
*/


?>
