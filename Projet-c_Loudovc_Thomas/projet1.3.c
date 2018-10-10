#include <stdio.h>

int main (void)
{ 
  FILE *fp;
  int ide, id;
  char number[10];
  char nom[10];
  char prenom[10];
  char mail[40];
    
  fp = fopen("Projet.txt", "r");
  
  if (fp == NULL) 
  { 
	puts("Erreur de lecture fichier\n"); 
  } 

	printf("Saisir un identifiant");
	scanf("%d",&ide);
	
	  	for (id=0;id<=5;id=id+1)
  	{
		fscanf(fp, "%d", &id);
		fscanf(fp, "%s", &nom);
		fscanf(fp, "%s", &prenom);
		fscanf(fp, "%s", &number);
		fscanf(fp, "%s\n", &mail);
	
  		if (ide == id)
  		{
  		printf("\n%s", nom);
		printf("\n%s", prenom);
		printf("\n%s", number);
		printf("\n%s", mail);
		}
	}
	
	
	
		
	fclose(fp);
    return 0;
	  
  }
  
  
