from typing import List

# Exercise: Letter Combinations of a Phone Number

phone_keyboard = {
  "2": ["a", "b", "c"],
  "3": ["d", "e", "f"],
  "4": ["g", "h", "i"],
  "5": ["j", "k", "l"],
  "6": ["m", "n", "o"],
  "7": ["p", "q", "r", "s"],
  "8": ["t", "u", "v"],
  "9": ["w", "x", "y", "z"]
}

class Solution:
  def letterCombinations(self, digits: str) -> List[str]:
    if not digits: return []

    res = []
    def bt(permutation, digits):
      if not digits:
        res.append(permutation)
        return
      for letter in phone_keyboard[digits[0]]:
        bt(permutation+letter, digits[1:])

    bt("", digits)
    return res

solution = Solution()
print(solution.letterCombinations("23"))
print(solution.letterCombinations(""))
