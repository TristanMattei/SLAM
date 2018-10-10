#include <stdio.h>

int main(void)
{
  	int id, i, ide,exit=0, choix;
  	char number[10];
  	char nom[10];
  	char prenom[10];
  	char mail[40];
	
	while (exit != 1)
	{	
	printf("\nMenu: faites un choix: \n");
	printf("Afficher le contenu du répertoire --------> 1\n");
	printf("Ajouter une personne dans le répertoire' ----> 2\n");
	printf("Rechercher une personne dans le répertoire ---------------------> 3\n");
	printf("Supprimer le contenu du répertoire ------------------------------> 4\n");
	printf("Supprimer une personne du répertoire ------------------------------> 5\n");
	printf("Quitter ------------------------------> 6\n");
	
	scanf("%d",&choix);
	
	if (choix == 1)
	{
		FILE *fp;
    
  		fp = fopen("Projet.txt", "a+");
  
  		if (fp == NULL) 
  		{ 
			puts("Erreur de lecture fichier\n"); 
 		}
  
  		for (i=0;i<5;i=i+1)
  		{
  		fscanf(fp, "%d", &id);
  		printf("\nID: %d", id);
  		fscanf(fp, " %s", &number); 
  		printf("\nNumber:%s", number);
		fscanf(fp, "%s", &nom);
		printf("\nNom: %s", nom);
		fscanf(fp, "%s", &prenom);
		printf("\nPrenom: %s", prenom);
		fscanf(fp, "%s", &mail);
		printf("\nMail: %s\n", mail);   
		}
  	
		fclose(fp);	
    }
    
	    if (choix == 2)
  	{
  		FILE *fp;
    
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
  		fprintf(fp, "%s\n", mail);		
  
  		fclose(fp);
	  }
	  
	if (choix == 3)
	{
		FILE *fp;
		
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
		printf("\n%s\n", mail);
		}
	}
		
	fclose(fp);
	}
	
	if (choix == 4)
	{
		FILE *fp;
		
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
	}
	
	if (choix == 5)
	{
		FILE *fp;
  		FILE *f;
    
  		fp = fopen("Projet.txt", "r+");
  		f = fopen("Contact.txt","a+");
  
  		if (fp == NULL) 
  	{ 
		puts("Erreur de lecture fichier\n"); 
 	}
	
		printf("Saisir l'identifiant de la personne a supprimer");
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
		fprintf(f, "    ");
		fprintf(f, "%s", nom);
		fprintf(f, "    ");
		fprintf(f, "%s", prenom);
		fprintf(f, "    ");
		fprintf(f, "%s", number);
		fprintf(f, "    ");
		fprintf(f, "%s\n", mail);
		}
    }

	fclose(fp);
	fclose(f);
	
	remove("Projet.txt");
	rename("Contact.txt","Projet.txt");
	}
	
	if (choix == 6)
	{
	exit=1;
	}
	}
  return 0;
}
