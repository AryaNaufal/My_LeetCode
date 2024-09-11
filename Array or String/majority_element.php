<?php

class Solution
{

    /**
     * @param int[] $nums
     * @return int
     */
    function majorityElement($nums)
    {
        $count = 0;
        $result = null;
        
        foreach ($nums as $num) {
            if ($count == 0) {
                $result = $num;
            }
            $count += ($num == $result) ? 1 : -1;
        }

        $count = 0;
        foreach ($nums as $num) {
            if ($num == $result) {
                $count++;
            }
        }

        if ($count > count($nums) / 2) {
            return $result;
        } else {
            return 0;
        }
    }
}

$solution = new Solution();

// Test Case 1
$nums = [3, 2, 3];
echo "Case 1: ";
echo $solution->majorityElement($nums);

echo "\n";

// Test Case 2
$nums = [2, 2, 1, 1, 1, 2, 2];
echo "Case 2: ";
echo $solution->majorityElement($nums);
