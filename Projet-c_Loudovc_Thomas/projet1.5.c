#include <stdio.h>

int main (void)
{ 
  FILE *fp;
  int ide, id;
  char number[10];
  char nom[10];
  char prenom[10];
  char mail[40];
    
  fp = fopen("Projet.txt", "w+");
  
  if (fp == NULL) 
  { 
	puts("Erreur de lecture fichier\n"); 
  }
	
	  	for (id=1;id<=5;id=id+1)
  	{
  		fscanf(fp, "%d", &id);
		fscanf(fp, "%s", &nom);
		fscanf(fp, "%s", &prenom);
		fscanf(fp, "%s", &number);
		fscanf(fp, "%s\n", &mail);

 }

	fclose(fp);
    return 0;
	  
  }
  
  
