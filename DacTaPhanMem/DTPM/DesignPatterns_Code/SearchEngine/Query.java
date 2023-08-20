
/**
 * Write a description of class Query here.
 *
 * @author (your name)
 * @version (a version number or a date)
 */
import java.util.HashMap;
import java.util.Arrays;
public class Query
{
    // instance variables - replace the example below with your own
    private String[ ] keys;
    private WordTable wtable;
    private DocCnt[] results;

    /**
     * Constructor for objects of class Query
     */
    public Query()
    {
    }
    public Query(WordTable wt)
    {
     this.wtable = wt; 
    }
    public Query(WordTable wt, String key)
    {
     this.wtable = wt;   
     keys = new String[10];    
     keys[0] = key;
     results = new DocCnt[100];
     results = wtable.lookup(key); 
     if (results == null) System.out.println("ket qua lookup rong");
     if (!(results == null))
     Arrays.sort(results);
     //else StdOut.println("ket qua sap xep rong"); 
     }
    public WordTable wordtable()
    {
        return this.wtable;
    }
     
    public void addKey(String key)
    {
     int k = 0;    
     for(int i=0; i < keys.length; i++) if (keys[i]==null){
      k = i; 
      break;
     }
     keys[k] = key;
     HashMap<Doc,Integer> dctable = new HashMap<Doc,Integer>();
     dctable = wtable.wordtable().get(key);
     DocCnt[] newtable = new DocCnt[100];
     int j = 0;
     for(int i=0; i < size() && !(results[i] == null); i++) { 
         if(dctable.containsKey(results[i].doc())){
             DocCnt pair = new DocCnt(results[i].doc(),results[i].cnt()+ dctable.get(results[i].doc())); 
             newtable[j] = pair;
             System.out.println(pair.toString());
             j += 1;
            }
        }     
     DocCnt[] temp = new DocCnt[j];
     for(int i=0; i < j; i++) temp[i] = newtable[i];
     if (!(temp == null))
     Arrays.sort(temp);
     results = temp;
    }
    public String[ ] keys()
    {
        //for(int i=0; i < keys.length; i++) StdOut.println(keys[i]);
        return keys;
    }
    public DocCnt[] results()
    {
        return results;
    }

    public int size ()
    {
       return results.length;
    }
    public Doc fetch (int i)
    {
        if (i <  results.length) {
        return results[i].doc();
        }
        else return null;
    }
    public void addDoc(Doc d, HashMap<String,Integer> h)
    {
        int count = 0;
        for(int i = 0; i < keys.length - 1; i++){
         if (h.containsKey(keys[i]))
         count += h.get(keys[i]);
         else return;
        }
        if (!(count == 0)){
        DocCnt d_c = new DocCnt(d,count);
        results[results.length] = d_c;
        Arrays.sort(results);
        }
    }
    
}
