#include <stdio.h>

int main (void)
{ 
  FILE *fp;
  int id;
  char number[10];
  char nom[10];
  char prenom[10];
  char mail[40];
    
  fp = fopen("Projet.txt", "a+");
  
  if (fp == NULL) 
  { 
	puts("Erreur de lecture fichier\n"); 
  }
	 
  	printf("ID: ");
  	scanf("%d", &id);
  	printf("Nom : ");
  	scanf("%s",&nom);
  	printf("Prenom : ");
  	scanf("%s",&prenom);
  	printf("Number: ");
  	scanf("%s", &number);
  	printf("Mail : ");
  	scanf("%s",&mail);
  	
  	fprintf(fp, "\n%d", id);
  	fprintf(fp, " ");
  	fprintf(fp, "%s", nom);	  
  	fprintf(fp, "    ");
  	fprintf(fp, "%s", prenom);	
  	fprintf(fp, "    ");
  	fprintf(fp, "%s", number);
	fprintf(fp, "    ");
  	fprintf(fp, "%s", mail);		
  
  fclose(fp);
  return 0;
  
  
}
  
  
  
