# Tests

- https://3v4l.org/aoqfj
- https://3v4l.org/OgsU5


```
S:\bench>"./vendor/bin/phpbench.bat" run src/ComparatorBench.php --report=default
PHPBench @git_tag@ running benchmarks...
with configuration file: S:\bench/phpbench.json
with PHP version 7.4.15, xdebug ✔, opcache ❌

\App\ComparatorBench

    benchSort # 0...........................I0 [μ Mo]/r: 7.606 7.606 (μs) [μSD μRSD]/r: 0.000μs 0.00%
    benchSort # 1...........................I0 [μ Mo]/r: 12.929 12.929 (μs) [μSD μRSD]/r: 0.000μs 0.00%
    benchSort # 2...........................I0 [μ Mo]/r: 1.841 1.841 (μs) [μSD μRSD]/r: 0.000μs 0.00%
    benchDiff # 0...........................I0 [μ Mo]/r: 5.039 5.039 (μs) [μSD μRSD]/r: 0.000μs 0.00%
    benchDiff # 1...........................I0 [μ Mo]/r: 5.202 5.202 (μs) [μSD μRSD]/r: 0.000μs 0.00%
    benchDiff # 2...........................I0 [μ Mo]/r: 1.432 1.432 (μs) [μSD μRSD]/r: 0.000μs 0.00%

(best [mean mode] worst) = 1.432 [5.675 5.675] 1.432 (μs)
⅀T: 34.048μs μSD/r 0.000μs μRSD/r: 0.000%
Subjects: 2, Assertions: 0, Warnings: 0, Errors: 0, Failures: 0
suite: 134622e70cde2f27d0c39addb8e594e7d126d907, date: 2021-02-22, stime: 23:57:17
+-----------------+-----------+-----+------+------+----------+----------+--------------+----------------+
| benchmark       | subject   | set | revs | iter | mem_peak | time_rev | comp_z_value | comp_deviation |
+-----------------+-----------+-----+------+------+----------+----------+--------------+----------------+
| ComparatorBench | benchSort | 0   | 4096 | 0    | 755,688b | 7.606μs  | +0.00σ       | +0.00%         |
| ComparatorBench | benchSort | 1   | 4096 | 0    | 755,688b | 12.929μs | +0.00σ       | +0.00%         |
| ComparatorBench | benchSort | 2   | 4096 | 0    | 692,712b | 1.841μs  | +0.00σ       | +0.00%         |
| ComparatorBench | benchDiff | 0   | 4096 | 0    | 755,688b | 5.039μs  | +0.00σ       | +0.00%         |
| ComparatorBench | benchDiff | 1   | 4096 | 0    | 755,688b | 5.202μs  | +0.00σ       | +0.00%         |
| ComparatorBench | benchDiff | 2   | 4096 | 0    | 692,712b | 1.432μs  | +0.00σ       | +0.00%         |
+-----------------+-----------+-----+------+------+----------+----------+--------------+----------------+
```
