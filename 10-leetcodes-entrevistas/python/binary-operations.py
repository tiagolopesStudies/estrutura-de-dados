class Solution:
  def hammingWeight(self, n: int) -> int:
    res = 0

    while n:
      res += n & 1
      n = n >> 1

    return res

solution = Solution()
print(solution.hammingWeight(0o0000000000000000000000000001011))
