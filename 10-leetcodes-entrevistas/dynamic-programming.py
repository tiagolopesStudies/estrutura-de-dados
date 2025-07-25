from typing import List

# Exercise: House Robber

class Solution:
  def rob(self, nums: List[int]) -> int:
    one_before, two_before = 0,0
    for n in nums:
      temp = max(n+two_before, one_before)
      two_before = one_before
      one_before = temp

    return one_before

s = Solution()
print(s.rob([1,2,3,1]))
print(s.rob([2,7,9,3,1]))
