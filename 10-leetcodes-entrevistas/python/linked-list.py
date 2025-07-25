
from typing import Optional

# Exercise: Merge Two Sorted Lists

class ListNode:
  def __init__(self, val=0, next=None):
    self.val = val
    self.next = next

class Solution:
  def mergeTwoLists(self, list1: Optional[ListNode], list2: Optional[ListNode]) -> Optional[ListNode]:
    dummy = ListNode(-1)
    current = dummy
    
    while list1 and list2:
      if list1.val < list2.val:
        current.next = list1
        list1 = list1.next
      else:
        current.next = list2
        list2 = list2.next
      current = current.next
    if list1:
      current.next = list1
    else:
      current.next = list2
    return dummy.next

solution = Solution()

list1 = ListNode(1, ListNode(5, ListNode(6)))
list2 = ListNode(2, ListNode(4, ListNode(8)))

litsNode = solution.mergeTwoLists(list1, list2)

while litsNode:
  print(litsNode.val, end=" ")
  litsNode = litsNode.next
print("\n")
