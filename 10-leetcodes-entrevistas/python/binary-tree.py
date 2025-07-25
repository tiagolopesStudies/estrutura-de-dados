from typing import Optional

# Exercise: Maximum Depth of Binary Tree

class TreeNode:
  def __init__(self, val=0, left=None, right=None):
    self.val = val
    self.left = left
    self.right = right

class Solution:
  def maxDepth(self, root: Optional[TreeNode]) -> int:
    if not root:
      return 0

    def dfs(root, depth):
      if not root: return depth

      return max(dfs(root.left, depth+1), dfs(root.right, depth+1))

    return dfs(root, 0)

solution = Solution()
print(solution.maxDepth(TreeNode(3, TreeNode(9), TreeNode(20, TreeNode(15), TreeNode(7)))))
