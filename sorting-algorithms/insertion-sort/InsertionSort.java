import java.util.Arrays;

public class InsertionSort {

    /**
     * 
     * @param data
     * @return data
     */
    public int[] sort(int data[]) {

        for (int i = 0; i < data.length; i++) {

            int current = data[i];

            int j = i - 1;

            while (j >= 0 && data[j] > current) {
                data[j + 1] = data[j];
                j = j - 1;
            }

            data[j + 1] = current;
        }
        return data;
    }

    /**
     * @param args
     */
    public static void main(String args[]) {

        InsertionSort insertionSortObj = new InsertionSort();
        int data[] = { 10, 5, 6, 9, 8, 2, 2, 11, 7 };
        int[] result = insertionSortObj.sort(data);
        System.out.println(Arrays.toString(result));
    }
}
