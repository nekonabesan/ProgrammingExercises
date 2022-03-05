<?php
class Solution {

  /**
   * @param Integer $x
   * @return Boolean
   */
  function isPalindrome($x) {
      $result = TRUE;
      $num1 = $x;
      $num2 = $x;
      $rem  = 0;
      $s = 0;
      $array = array();

      if (0 > $x) {
        return FALSE;
      }
      
      if (0 <= $x && $x < 10) {
          return TRUE;
      }

      while($num1 >= 10) {
        $num1 = $num1 / 10;
        $s++;
      }
      
      if ($s == 0) {
        return FALSE;
      }

      for ($i = 0; $i <= $s; $i++) {
        $rem = $num2 % 10;
        array_push($array, $rem);
        $num2 = floor($num2 / 10);
      }

      $cnt = count($array);

      if($cnt % 2 == 0) {
        $max = $cnt / 2;
        for($i = 0; $i < $max; $i++) {
          if($array[$max - $i - 1] !== $array[$max + $i]) {
            $result = FALSE;
            break;
          }
        }
      } else {
        $max = floor($cnt / 2);
        for($i = 0; $i <= $max; $i++) {
          if($array[$max - $i] !== $array[$max + $i]) {
            $result = FALSE;
            break;
          }
        }
      }

      return $result;
  }
}
?>