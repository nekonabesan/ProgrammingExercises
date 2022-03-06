### https://leetcode.com/problems/two-sum/
from cgitb import reset
def twoSum(self, nums, target):
  result = []
  for i in range(len(nums)):
    for j in range(len(nums)):
      if i != j:
        if(nums[i] + nums[j] == target):
          result.append(i)
          result.append(j)
          break
    if (len(result) > 0):
       break
  return result
