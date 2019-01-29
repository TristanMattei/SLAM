import java.util.Scanner;

public class factoWhile {

	public static void main(String[] args) {
		int n = 0, res = 1, i = 1;
		
		System.out.print("Entrez une valeur pour n ");
		Scanner sc = new Scanner (System.in);
		n = sc.nextInt();
		
		while (i<= n) {
			res = res * i;	
			i ++;
		
		}
		
		System.out.print("le résultat est " + res);
	}

}
