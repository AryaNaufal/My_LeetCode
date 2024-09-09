<?php

class Solution
{

    /**
     * @param int[] $nums
     * @param int $val
     * @return int
     */
    function removeElement(&$nums, $val)
    {
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] == $val) {
                array_splice($nums, $i, 1);
                $i--;
            }
        }
    }
}

$solution = new Solution();

// Test Case 1
$nums = [3, 2, 2, 3];
$val = 3;

echo "case 1: ";
$solution->removeElement($nums, $val);
print_r($nums);

// Test Case 2
$nums = [0, 1, 2, 2, 3, 0, 4, 2];
$val = 2;

echo "case 2: ";
$solution->removeElement($nums, $val);
print_r($nums);
