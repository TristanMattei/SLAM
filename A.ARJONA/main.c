#include <stdio.h>
#include <string.h>
#include <stdio.h>

int main (void) { 

  FILE *fp, *fptmp;
  int choix, id[10];
  char prenom[10], nom[10], email[30], tel[10];
  int exit = 0, i, codeId, count = 5;
  
  while(exit != 1) {

	if(choix != 1) {
		printf("nombre de ligne dans le repertoire : ");
		scanf("%d", &count);	
	}
		
 	fp = fopen("repertoire.txt", "a+");
 	
	if(fp == NULL) {
		freopen("repertoire.txt", "a+", fp);
	}
		
	printf("===================== MENU =========================\n (1) - Afficher le repertoire\n (2) - Ajouter une personne au repertoire\n (3) - Rechercher une personne dans le repertoire\n (4) - Supprimer une personne du repertoire\n (5) - Supprimer tout le repertoire\n (6) - Quitter\n====================================================\n");
  	scanf("%d", &choix);	

  	if(choix == 1) {
  		
  	  	printf("==================== REPERTOIRE ====================");
	  	
	  	for (i=0; i < count; i++) {
  		
			fscanf(fp, "%d", &id[i]); 
			fscanf(fp, "%s", &nom);
			fscanf(fp, "%s", &prenom);
			fscanf(fp, "%s", &tel);
			fscanf(fp, "%s", &email);
			
			printf("\n%d %s %s %s %s", id[i], nom, prenom, tel, email);
  	  	
	  	}
	 
	 	printf("\n====================================================\n\n\n");
	 
  	} else if(choix == 2) {
  	
  		printf("============== AJOUT D\'UN UTILISATEUR ==============\nIdentifiant: ");
  		scanf("%d", &id);
  	
		printf("Nom : ");
  		scanf("%s", &nom);
  	
		printf("Prenom : ");
  		scanf("%s", &prenom);
  	
		printf("Telephone : ");
  		scanf("%s", &tel);
  	
		printf("Email : ");
  		scanf("%s", &email);
  		printf("====================================================\n\n\n");
  		
  		fprintf(fp, "%d    %s    %s    %s    %s", id, nom, prenom, tel, email);
	
  	} else if(choix == 3) {
  
  
  		printf("============ RECHERCHER UN UTILISATEUR =============");
	  	
	  	
		printf("\n\n - Saisir l\'identifiant de la personne : ");
 		
		scanf("%d", &codeId);

		for (i=0; i < count; i++) {
  		
			fscanf(fp, "%d", &id[i]); 
			fscanf(fp, "%s", &nom);
			fscanf(fp, "%s", &prenom);
			fscanf(fp, "%s", &tel);
			fscanf(fp, "%s", &email);
			
			if(codeId == id[i]) {
				printf("\n  Identifiant  ->  %d\n  Nom  ->  %s\n  Prenom  ->  %s\n  Telephone  ->  %s\n  Email  ->  %s\n", id[i], nom, prenom, tel, email);
			}
  	  	
	  	}

	  	
	 	printf("\n====================================================\n\n\n");  
	  
  	} else if(choix == 4) {
  		
  		printf("============ SUPPRIMER UN UTILISATEUR =============");
	  	
	  	
		printf("\n\n - Saisir identifiant de la personne : ");
 		
		scanf("%d", &codeId);
		  				
		fptmp = fopen("repertoire_tmp.txt", "a+");
  	
   		if (fptmp == NULL) { 
        	freopen("repertoire_tmp.txt", "wb", fptmp); 
   		}
		  
		for (i=0; i < count; i++) {
  		
			fscanf(fp, "%d", &id[i]); 
			fscanf(fp, "%s", &nom);
			fscanf(fp, "%s", &prenom);
			fscanf(fp, "%s", &tel);
			fscanf(fp, "%s", &email);
			
			if(codeId != id[i]) {
				fprintf(fptmp, "%d    %s    %s    %s    %s\n", id, nom, prenom, tel, email);
			}
  	  	
	  	}
	  	
	  	fclose(fptmp);
	  	fclose(fp);
	  	
	  	remove("repertoire.txt");
	  	rename("repertoire_tmp.txt", "repertoire.txt");
	  	
	  	printf("   - L\'utilisateur a bien ete supprimer");
	  		  	
	 	printf("\n====================================================\n\n\n");  
  		
 	} else if(choix == 5) {
 		int c;
  		printf("\n  [!] Etez-vous sure de vouloir vider le repertoire ? \n\n   - (1) -> OUI\n   - (0) -> NON\n\n");
  		scanf("%d", &c); 
  		if(c == 1) {
  			fclose(fopen("repertoire.txt", "w"));
		}
 	} else if(choix == 6) {
  		exit = 1;
 	} else {
 		printf("\n[!] Erreur veuillez entrez un nombre entre (1 et 6)\n\n");
	}
 	
  	fclose(fp);
  	
  }
 
  return 0;
  
}
