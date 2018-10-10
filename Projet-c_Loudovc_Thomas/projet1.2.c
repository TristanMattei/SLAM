#include <stdio.h>

int main (void)
{ 
  FILE *fp;
  int id, i;
  char number[10];
  char nom[10];
  char prenom[10];
  char mail[40];
    
  fp = fopen("Projet.txt", "a+");
  
  if (fp == NULL) 
  { 
	puts("Erreur de lecture fichier\n"); 
  }
  

  	for (i=0;i<5;i=i+1)
  	{
  		fscanf(fp, "%d", &id);
  		printf("\n%d", id);
  		fscanf(fp, "%s", &nom); 
  		printf("\n%s", nom);
		fscanf(fp, "%s", &prenom);
		printf("\n%s", prenom);
		fscanf(fp, "%s", &number);
		printf("\n%s", number);
		fscanf(fp, "%s", &mail);
		printf("\n%s\n", mail);   
			
  	}
  	
	fclose(fp);
    return 0;
	  
  }
  
  
