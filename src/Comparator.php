<?php
namespace App;

class Comparator
{
    public function sort(array $arr1, array $arr2): bool
    {
        \sort($arr1);
        \sort($arr2);
        return $arr1 === $arr2;
    }

    public function diff(array $arr1, array $arr2): bool
    {
        return [] === \array_diff($arr1, $arr2);
    }
}
