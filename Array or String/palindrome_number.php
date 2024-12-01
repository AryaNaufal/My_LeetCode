<?php
class Solution
{

  /**
   * @param Integer $x
   * @return Boolean
   */
  function isPalindrome($x)
  {
    $nums = str_split((string)$x);

    if (implode('', array_reverse($nums)) == $x) {
      return true;
    }

    return false;
  }
}

$solution = new Solution;

echo $solution->isPalindrome(-121);
echo $solution->isPalindrome(121);
echo $solution->isPalindrome(10);
