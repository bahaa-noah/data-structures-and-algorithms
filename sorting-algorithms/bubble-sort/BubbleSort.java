import java.util.Arrays;

public class BubbleSort {

    /**
     * 
     * @param data
     * @return array data
     */
    public int[] sort(int[] data) {
        int dataLength = data.length;

        for (int i = 0; i < dataLength; i++) {
            for (int j = i + 1; j < dataLength; j++) {
                if (data[j] < data[i]) {
                    int temp = data[j];
                    data[j] = data[i];
                    data[i] = temp;
                }
            }
        }

        return data;
    }

    /**
     * @param args
     */
    public static void main(String[] args) {
        BubbleSort bubbleSortObject = new BubbleSort();
        int data[] = { 10, 5, 6, 9, 8, 2, 2, 11, 7 };
        int[] result = bubbleSortObject.sort(data);
        System.out.println(Arrays.toString(result));
    }

}
