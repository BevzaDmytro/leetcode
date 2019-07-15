<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15.07.2019
 * Time: 17:46
 */
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $answer = 0;
        $current = null;
        for($i = 0; $i < strlen($s);$i++){
            $current[] = $s[$i];
            $count = 1;
            for($j = $i + 1; $j < strlen($s);$j++){

                if( in_array($s[$j],$current) ){
                    $current = null;
                    $answer = max($answer, $count);
                    break;
                }
                $current[] = $s[$j];
                $count++;
            }
            $answer = max($answer, $count);
        }
        return $answer;
    }
}

$sol =  new Solution();
echo $sol->lengthOfLongestSubstring("");
