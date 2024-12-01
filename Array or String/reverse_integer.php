<?php
class Solution
{

  /**
   * @param Integer $x
   * @return Integer
   */
  function reverse($x)
  {
    $nums = str_split((string)$x);
    if ($nums[0] == '-') {
      for ($i = 0; $i < count($nums); $i++) {
        return -intval(implode('', array_reverse($nums)));
      }
    }

    while ($nums[count($nums) - 1] == 0) {
      array_pop($nums);
    }

    return implode('', array_reverse($nums));
  }
}

$solution = new Solution();

echo $solution->reverse(123) . "\n";
echo $solution->reverse(-123) . "\n";
echo $solution->reverse(120) . "\n";
