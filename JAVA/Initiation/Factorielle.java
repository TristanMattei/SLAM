import java.util.Scanner;

public class Factorielle {
	public static void main(String[] args) {
		
	int n = 0, res = 1, i;
	
	System.out.print("Entrez une valeur pour n ");
	Scanner sc = new Scanner (System.in);
	n = sc.nextInt();
	
	for (i = 1; i<= n ; i ++) {
		res = res * i;	
	
	} 
	
	System.out.print("le résultat est " + res);
}
}	
