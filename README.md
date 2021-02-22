# Tests

```
S:\bench>"./vendor/bin/phpbench.bat" run src/ComparatorBench.php --report=default
PHPBench @git_tag@ running benchmarks...
with configuration file: S:\bench/phpbench.json
with PHP version 7.4.15, xdebug ✔, opcache ✔

\App\ComparatorBench

    benchSort # 0...........................I0 [μ Mo]/r: 7.412 7.412 (μs) [μSD μRSD]/r: 0.000μs 0.00%
    benchSort # 1...........................I0 [μ Mo]/r: 12.667 12.667 (μs) [μSD μRSD]/r: 0.000μs 0.00%
    benchDiff # 0...........................I0 [μ Mo]/r: 5.072 5.072 (μs) [μSD μRSD]/r: 0.000μs 0.00%
    benchDiff # 1...........................I0 [μ Mo]/r: 5.182 5.182 (μs) [μSD μRSD]/r: 0.000μs 0.00%

(best [mean mode] worst) = 5.072 [7.583 7.583] 5.072 (μs)
⅀T: 30.333μs μSD/r 0.000μs μRSD/r: 0.000%
Subjects: 2, Assertions: 0, Warnings: 0, Errors: 0, Failures: 0
suite: 134622e2db3c4c740445082239a9d121966eb394, date: 2021-02-22, stime: 23:23:59
+-----------------+-----------+-----+------+------+----------+----------+--------------+----------------+
| benchmark       | subject   | set | revs | iter | mem_peak | time_rev | comp_z_value | comp_deviation |
+-----------------+-----------+-----+------+------+----------+----------+--------------+----------------+
| ComparatorBench | benchSort | 0   | 4096 | 0    | 545,496b | 7.412μs  | +0.00σ       | +0.00%         |
| ComparatorBench | benchSort | 1   | 4096 | 0    | 545,496b | 12.667μs | +0.00σ       | +0.00%         |
| ComparatorBench | benchDiff | 0   | 4096 | 0    | 545,496b | 5.072μs  | +0.00σ       | +0.00%         |
| ComparatorBench | benchDiff | 1   | 4096 | 0    | 545,496b | 5.182μs  | +0.00σ       | +0.00%         |
+-----------------+-----------+-----+------+------+----------+----------+--------------+----------------+
```
