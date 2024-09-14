<?php
class Solution
{

    /**
     * @param int[] $prices
     * @return int
     */
    function maxProfit($prices)
    {
        $maxProfit = 0;
        $minPrice = PHP_INT_MAX;
        foreach ($prices as $price) {
            if ($price < $minPrice) {
                $minPrice = $price;
            } else if ($price - $minPrice > $maxProfit) {
                $maxProfit = $price - $minPrice;
            }
        }
        return $maxProfit;
    }
}

$solution = new Solution();

// Test Case 1
$prices = [7, 1, 5, 3, 6, 4];
echo "Case 1: ";
echo $solution->maxProfit($prices);
echo PHP_EOL;

// Test Case 2
$prices = [7, 6, 4, 3, 1];
echo "Case 2: ";
echo $solution->maxProfit($prices);
echo PHP_EOL;
