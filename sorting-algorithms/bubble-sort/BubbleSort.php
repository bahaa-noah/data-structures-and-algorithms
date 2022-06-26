<?php


/**
 * Selection sort function
 * complexity O(n2)
 *
 * @param array $data
 * @return array
 */
function bubbleSort(array $data): array
{

    for ($i = 0; $i < count($data); $i++) {
        for ($j = $i + 1; $j < count($data); $j++) {
            if ($data[$j] <  $data[$i]) {
                $temp = $data[$j];
                $data[$j] = $data[$i];
                $data[$i] = $temp;
            }
        }
    }
    return $data;
}
$data = [10, 5, 6, 9, 8, 2, 2, 11, 7];
$result = bubbleSort($data);
print_r($result);


/**
 * Selection sort function
 * complexity O(n2)
 *
 * @param array $data
 * @return array
 */
function bubbleSort2(array $data): array
{

    for ($i = 0; $i < count($data); $i++) {
        for ($j = 0; $j < count($data) - $i - 1; $j++) {
            if ($data[$j] >  $data[$j + 1]) {
                $temp = $data[$j];
                $data[$j] = $data[$j + 1];
                $data[$j + 1] = $temp;
            }
        }
    }
    return $data;
}


$data = [10, 5, 6, 9, 8, 2, 2, 11, 7];
$result = bubbleSort2($data);
print_r($result);
