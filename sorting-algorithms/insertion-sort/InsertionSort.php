<?php




/**
 * Insertion sort function
 * complexity O(n2)
 *
 * @param array $data
 * @return array
 */
function insertionSort(array $data): array
{

    for ($i = 0; $i < count($data); $i++) {
        $current = $data[$i];

        $j = $i - 1;

        while ($j >= 0 && $data[$j] > $current) {
            $data[$j + 1] = $data[$j];
            $j = $j - 1;
        }
        $data[$j + 1] = $current;
    }

    return $data;
}





$data = [10, 5, 6, 9, 8, 2, 2, 11, 7];
$result = insertionSort($data);
print_r($result);
