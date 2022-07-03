public class Stack {

    /**
     * stack items
     *
     * @var array
     */
    private int[] items = new int[100];

    /**
     * index to keep track of the top most item
     * 
     * @var integer
     */
    private int top = -1;

    /**
     * Check if the stack is empty
     * 
     * @return boolean
     */
    public boolean isEmpty() {
        return top < 0;
    }

    /**
     * Push to the top of the stack
     * O(1)
     * 
     * @param integer $item
     * @return void
     */
    public void push(int item) {
        if (top == items.length - 1) {
            throw new RuntimeException("Stack is Full");
        }
        top += 1;
        items[top] = item;
    }

    /**
     * Pop from the stack last inserted item
     * O(1)
     * 
     * @return int
     */
    public int pop() {
        if (isEmpty()) {
            throw new RuntimeException("Stack is empty");
        }
        return items[top--];
    }

    /**
     * Get top item in the stack
     * O(1)
     * 
     * @return integer|null
     */
    public int peek() {
        if (isEmpty()) {
            throw new RuntimeException("Stack is empty");
        }
        return items[top];
    }

    public static void main(String[] args) {
        Stack stack = new Stack();
        System.out.println(stack.isEmpty());
        stack.push(5);
        stack.push(4);
        stack.push(6);
        stack.push(10);
        System.out.println(stack.isEmpty());
        System.out.println(stack.peek());
        System.out.println(stack.pop());
        System.out.println(stack.peek());
        System.out.println(stack.pop());
        System.out.println(stack.pop());
        System.out.println(stack.pop());
    }

}
