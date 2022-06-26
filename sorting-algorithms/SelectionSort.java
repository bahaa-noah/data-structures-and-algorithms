import java.util.Arrays;


public class SelectionSort {

   /**
    * 
    * @param data
    * @return data
    */
   public int[] sort(int data[]) {

      int dataLength = data.length;

      for (int i = 0; i < dataLength - 1; i++) {
         int minIndex = i;
         for (int j = i + 1; j < dataLength; j++) {
            if (data[j] < data[minIndex]) {
               minIndex = j;
            }
         }
         int temp = data[minIndex];
         data[minIndex] = data[i];
         data[i] = temp;
      }

      return data;

   }

   /**
    * @param args
    */
   public static void main(String args[]) {

      SelectionSort selectionSortObj = new SelectionSort();
      int data[] = { 10, 5, 6, 9, 8, 2, 2, 11, 7 };
      int[] result = selectionSortObj.sort(data);
      System.out.println(Arrays.toString(result));
   }

}