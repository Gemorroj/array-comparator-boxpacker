<?php
namespace App;

use PhpBench\Benchmark\Metadata\Annotations\ParamProviders;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

/**
 * @Revs({1, 8, 64, 4096})
 */
class ComparatorBench
{
    public function provideArrays()
    {
        $sortedArray = \range(0, 100);
        $shuffledArray = \range(0, 100);
        \shuffle($shuffledArray);

        yield [$sortedArray, $sortedArray];
        yield [$shuffledArray, $shuffledArray];
        yield [[1, 2, 3], [1, 2, 3]]; // best case for sorting, but diff still wins
    }

    /**
     * @ParamProviders({"provideArrays"})
     */
    public function benchSort(array $params): void
    {
        $consumer = new Comparator();
        $consumer->sort($params[0], $params[1]);
    }

    /**
     * @ParamProviders({"provideArrays"})
     */
    public function benchDiff(array $params): void
    {
        $consumer = new Comparator();
        $consumer->diff($params[0], $params[1]);
    }
}
