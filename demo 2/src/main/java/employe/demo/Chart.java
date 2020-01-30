package employe.demo;

public class Chart<T> {
    private int y;
    private T label;

    public int gety()
    {
        return y;
    }

    public void sety(int n)
    {
        this.y=n;
    }
    public T getlabel()
    {
        return label;
    }
    public void setlabel(T s)
    {
        this.label=s;
    }

}
