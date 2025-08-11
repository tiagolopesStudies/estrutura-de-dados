from typing import List

# Exercise: Two Sum

class Solution:
  def twoSum(self, nums: List[int], target: int) -> List[int]:
    hasher = {}

    for idx, i in enumerate(nums):
      if hasher.get(i) is not None:
        return [hasher.get(i), idx]
      hasher[target-i] = idx

solution = Solution()
print(solution.twoSum([2,7,11,15, 8, 9], 17))
