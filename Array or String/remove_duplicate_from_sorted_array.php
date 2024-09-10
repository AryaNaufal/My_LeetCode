<?php

class Solution
{

    /**
     * @param int[] $nums
     * @return int
     */
    function removeDuplicates(&$nums)
    {
        // Slow
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                if ($nums[$i] == $nums[$j]) {
                    array_splice($nums, $j, 1);
                    $j--;
                }
            }
        }

        // Faster
        $unique = [];
        foreach ($nums as $num) {
            if (!in_array($num, $unique)) {
                $unique[] = $num;
            }
        }
        $nums = $unique;

        // oneline
        $nums = array_values(array_unique($nums));
    }
}

$solution = new Solution();

// Test Case 1
$nums = [1, 1, 2];

echo "case 1: ";
$solution->removeDuplicates($nums);
print_r($nums);

// Test Case 2
$nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];

echo "case 2: ";
$solution->removeDuplicates($nums);
print_r($nums);
