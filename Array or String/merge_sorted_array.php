<?php
class Solution
{

    /**
     * @param int[] $nums1
     * @param int $m
     * @param int[] $nums2
     * @param int $n
     * @return null
     */
    function merge(&$nums1, $m, $nums2, $n)
    {
        while (count($nums1) > $m) {
            array_pop($nums1);
        }
        for ($i = 0; $i < $n; $i++) {
            array_push($nums1, $nums2[$i]);
        }
        asort($nums1);
    }
}

$solution = new Solution();

// Test Case 1
$nums1 = [1, 2, 3, 0, 0, 0];
$m = 3;
$nums2 = [2, 5, 6];
$n = 3;

$solution->merge($nums1, $m, $nums2, $n);
echo "Case 1: ";
print_r($nums1);

// Test Case 2
$nums1 = [1];
$m = 1;
$nums2 = [];
$n = 0;

$solution->merge($nums1, $m, $nums2, $n);
echo "Case 2: ";
print_r($nums1);

// Test Case 3
$nums1 = [0];
$m = 0;
$nums2 = [1];
$n = 1;

$solution->merge($nums1, $m, $nums2, $n);
echo "Case 3: ";
print_r($nums1);
