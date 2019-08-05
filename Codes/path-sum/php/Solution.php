<?php

/**
* Definition for a binary tree node.
* class TreeNode {
*     public $val = null;
*     public $left = null;
*     public $right = null;
*     function __construct($value) { $this->val = $value; }
* }
*/
class Solution {

    /**
    * @param TreeNode $root
    * @param Integer $sum
    * @return Boolean
    */
    function hasPathSum($root, $sum) {

        if (is_null($root)) {
            return false;
        }

        $sum -= $root->val;

        if (is_null($root->left) && is_null($root->right)) {
            return $sum === 0;
        }

        $leftResult = $this->hasPathSum($root->left, $sum);
        $rightResult = $this->hasPathSum($root->right, $sum);
        return $leftResult || $rightResult;

    }

}