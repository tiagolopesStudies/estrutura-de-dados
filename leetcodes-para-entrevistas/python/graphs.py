from typing import List

# Exercise: Number of islands

class Solution:
  def numIslands(self, grid: List[List[str]]) -> int:
    if not grid: return 0

    rows, cols = len(grid), len(grid[0])
    visited = set()
    islands = 0

    def dfs(r: int, c: int):
      if (r, c) in visited or r < 0 or c < 0 or r >= rows or c >= cols or grid[r][c] == '0':
        return
      
      visited.add((r, c))
      dfs(r+1, c)
      dfs(r-1, c)
      dfs(r, c+1)
      dfs(r, c-1)

    for r in range(rows):
      for c in range(cols):
        if grid[r][c] == '1' and (r,c) not in visited:
          dfs(r,c)
          islands+=1

    return islands

s = Solution()
print(s.numIslands([
  ["1","1","1","1","0"],
  ["1","1","0","1","0"],
  ["1","1","0","0","0"],
  ["0","0","0","0","0"]
]))

print(s.numIslands([
  ["1","1","0","0","0"],
  ["1","1","0","0","0"],
  ["0","0","1","0","0"],
  ["0","0","0","1","1"]
]))
