<?php

declare(strict_types=1);

// Exercise: Valid Palindrome

class Solution
{
  public function isPalindrome(string $s): bool
  {
    $left = 0;
    $right = strlen($s) - 1;

    while ($left < $right) {
      if (!ctype_alpha($s[$left]) && $left < $right) {
        $left++;
      } else if (!ctype_alpha($s[$right]) && $left < $right) {
        $right--;
      } else if (strtolower($s[$left]) === strtolower($s[$right])) {
        $left++;
        $right--;
      } else {
        return false;
      }
    }

    return true;
  }
}

$solution = new Solution();
echo $solution->isPalindrome('A man, a plan, a canal: Panama') . PHP_EOL;
