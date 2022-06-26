<?php


/**
 * Selection sort function
 * complexity O(n2)
 *
 * @param array $data
 * @return array
 */
function selectionSort(array $data): array
{

    for ($i = 0; $i < count($data) - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < count($data); $j++) {
            if ($data[$j] < $data[$minIndex]) {
                $minIndex = $j;
            }
        }
        $temp = $data[$minIndex];
        $data[$minIndex] = $data[$i];
        $data[$i] = $temp;
    }

    return $data;
}


$data = [10, 5, 6, 9, 8, 2, 2, 11, 7];
$result = selectionSort($data);
print_r($result);
