#include <stdio.h>

int main (void)
{ 
  FILE *fp;
  FILE *f;
  int ide, id;
  char number[10];
  char nom[10];
  char prenom[10];
  char mail[40];
    
  fp = fopen("Projet.txt", "r+");
  f = fopen("Contact.txt","a+");
  
  if (fp == NULL) 
  { 
	puts("Erreur de lecture fichier\n"); 
  }
	
		printf("Saisir l'identifiant du contact à supprimer");
		scanf("%d",&ide);
	 
	  	
		for (id=1;id<=5;id=id+1)
  	{
  		fscanf(fp, "%d", &id);
		fscanf(fp, "%s", &nom);
		fscanf(fp, "%s", &prenom);
		fscanf(fp, "%s", &number);
		fscanf(fp, "%s\n", &mail);
		
		if (ide != id)
		{
		fprintf(f, "%d", id);
		fprintf(f,"      ");
		fprintf(f, "%s", nom);
		fprintf(f,"      ");
		fprintf(f, "%s", prenom);
		fprintf(f,"      ");
		fprintf(f, "%s", number);
		fprintf(f,"      ");
		fprintf(f, "%s\n", mail);
		}
 }

	fclose(fp);
	fclose(f);
	
	remove("Projet.txt");
	rename("Contact.txt","Projet.txt");
    return 0;
	  
  }
  
  
