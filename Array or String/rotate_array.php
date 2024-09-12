<?php
class Solution
{

    /**
     * @param int[] $nums
     * @param int $k
     * @return null
     */
    function rotate(&$nums, $k)
    {
        $k %= count($nums);
        $n = count($nums);
        $temp = array_splice($nums, $n - $k);
        $nums = array_merge($temp, $nums);
    }
}

$solution = new Solution();

// Test Case 1
$nums = [1, 2, 3, 4, 5, 6, 7];
$k = 3;

echo "Case 1: ";
$solution->rotate($nums, $k);
print_r($nums);

// Test Case 2
$nums = [3, 99, -1, -100];
$k = 2;

echo "Case 2: ";
$solution->rotate($nums, $k);
print_r($nums);
