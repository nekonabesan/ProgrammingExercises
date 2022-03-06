<?php
/**
 * https://leetcode.com/problems/roman-to-integer/submissions/
 * */
class Solution {

  /**
  * @param String $s
  * @return Integer
  */
  function romanToInt($s) {
      $result = 0;
      $patterns = array(
        array('len' => 3, 'code' => 'III', 'num' => 3)
        ,array('len' => 2, 'code' => 'II', 'num' => 2)
        ,array('len' => 2, 'code' => 'IV', 'num' => 4)
        ,array('len' => 2, 'code' => 'IX', 'num' => 9)
        ,array('len' => 2, 'code' => 'XL', 'num' => 40)
        ,array('len' => 2, 'code' => 'XC', 'num' => 90)
        ,array('len' => 2, 'code' => 'CD', 'num' => 400)
        ,array('len' => 2, 'code' => 'CM', 'num' => 900)
        ,array('len' => 1, 'code' => 'I', 'num' => 1)
        ,array('len' => 1, 'code' => 'V', 'num' => 5)
        ,array('len' => 1, 'code' => 'X', 'num' => 10)
        ,array('len' => 1, 'code' => 'L', 'num' => 50)
        ,array('len' => 1, 'code' => 'C', 'num' => 100)
        ,array('len' => 1, 'code' => 'D', 'num' => 500)
        ,array('len' => 1, 'code' => 'M', 'num' => 1000)
      );

      $str_array = str_split($s);

      for($i = count($str_array) - 1; $i >= 0; $i--) {
        $flg = true;
        foreach($patterns as $pattern) {
          $pat_str_array = str_split($pattern['code']);
          $mat_str_array = array();
          if ($i >= $pattern['len'] - 1) {
            for($j = 0; $j < $pattern['len']; $j++) {
              array_push($mat_str_array, $str_array[$i - $j]);
            }
            $mat_str_array = array_reverse($mat_str_array);
            for ($k = 0; $k < count($pat_str_array); $k++) {
              $flg = true;
              if($pat_str_array[$k] !== $mat_str_array[$k]) {
                $flg = false;
                break;
              }
            }
            if($flg === true) {
              if($pattern['len'] > 1) {
                $i = $i - $pattern['len'];
              }
              $result += $pattern['num'];
            }
          }

        }
      }

      return $result;
  }
}
?>