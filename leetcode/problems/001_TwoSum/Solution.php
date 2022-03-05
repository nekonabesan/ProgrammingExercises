<?php
class Solution {

  /**
   * @param Integer[] $nums
   * @param Integer $target
   * @return Integer[]
   */
  function twoSum($nums, $target) {
    $result = array();
    foreach($nums as $i => $num1) {
      foreach ($nums as $j => $num2) {
        if($i != $j) {
          if($num1 + $num2 == $target) {
            array_push($result, $i);
            array_push($result, $j);
            break;
          }
        }
      }
      if (count($result) > 0) break;
    }

    return $result;
  }
}
?>