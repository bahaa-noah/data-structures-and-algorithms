public class Queue {

    private int[] items = new int[5];
    private int head = -1;
    private int tail = -1;
    private int numberOfItems = 0;

    public boolean isEmpty() {
        return numberOfItems == 0;
    }

    public boolean isFull() {
        return items.length == numberOfItems;
    }

    public void enqueue(int item) {
        if (isFull())
            throw new RuntimeException("Queue is full");
        if (tail == items.length - 1) // deal with circular case
            tail = -1;
        items[++tail] = item;
        numberOfItems++; // add 1 to the item count
    }

    public int dequeue() {
        if (isEmpty())
            throw new RuntimeException("Queue is empty");
        if (head == items.length - 1)
            head = -1;
        numberOfItems--;
        return items[++head];
    }

    public int peek() {
        return items[head + 1];
    }

    public static void main(String[] args) {
        Queue q = new Queue();
        System.out.println(q.isEmpty()); // true
        q.enqueue(5);
        q.enqueue(4);
        q.enqueue(6);
        q.enqueue(10);
        q.enqueue(46);
        System.out.println(q.dequeue()); // 5
        System.out.println(q.dequeue()); // 4
        System.out.println(q.dequeue()); // 6
        System.out.println(q.dequeue()); // 10
        System.out.println(q.dequeue()); // 46
        System.out.println(q.isEmpty()); // true
        q.enqueue(2);
        q.enqueue(4);
        q.enqueue(6);
        q.enqueue(8);
        q.enqueue(10);
        System.out.println(q.dequeue()); // 2
        System.out.println(q.dequeue()); // 4
        System.out.println(q.dequeue());// 6
        System.out.println(q.dequeue());// 8
        System.out.println(q.isEmpty());// false
        q.enqueue(11);
        q.enqueue(12);
        q.enqueue(13);
        System.out.println(q.dequeue()); // 10
        System.out.println(q.dequeue()); // 11
        System.out.println(q.dequeue());// 12
        System.out.println(q.dequeue());// 13
        System.out.println(q.isEmpty());// true
    }

}
