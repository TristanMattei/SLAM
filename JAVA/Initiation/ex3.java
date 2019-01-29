import java.util.Scanner;

public class ex3 {

	public static void main(String[] args) {
		
		Scanner sc = new Scanner(System.in);
		int choix = 0;
		
		System.out.println("Veuillez saisir un nombre : ");		
		int a = sc.nextInt();				
		
		if (a < 10) {
			choix = 1;			
		}		
		if (a >= 10 && a <= 12) {
			choix = 2;		
		}
		
		if (a >= 13 && a <= 16 ) {
			choix = 3;			
		}
		
		if (a > 16 ) {
			choix = 4 ;			
		}
		
		switch(choix){
		case 1:
			System.out.print("Pas de mention");
			break;
		case 2:
			System.out.print("Mention assez bien");
			break;
		case 3:
			System.out.print("Mention bien");
			break;
		case 4:
			System.out.print("Mention très bien");	
			break;
		}

}
	
}