import java.util.Scanner;

public class Exercices {

	  public static void main(String[] args) {
	        int n, i;
	        int tab[] = new int[5];	        
	 
	        for (i=0; i<5; i++)
	        {
	            System.out.println("saisir la nb en position " + i);
	             
	            Scanner sc = new Scanner(System.in) ;
	            tab[i] = sc.nextInt();
	            
	        }
	        
	        for (i=0; i<5; i++)
	        {
	        	System.out.println(tab[i]);
	        }

	 
	}

}
