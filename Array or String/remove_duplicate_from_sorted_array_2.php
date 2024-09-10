<?php
class Solution
{

    /**
     * @param int[] $nums
     * @return int
     */
    function removeDuplicates(&$nums)
    {
        $bucket = [];
        $count = 1;
        for ($i = 0; $i < count($nums); $i++) {
            if (isset($nums[$i + 1]) && $nums[$i] == $nums[$i + 1]) {
                $count++;
            } else {
                if ($count > 1) {
                    $bucket[] = $nums[$i];
                }
                $count = 1;
            }
        }
        $nums = array_merge($bucket, array_unique($nums));
        sort($nums);
    }
}

$solution = new Solution();

$nums = [1, 1, 1, 2, 2, 3];

$solution->removeDuplicates($nums);
print_r($nums);
