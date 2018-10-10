#include <stdio.h>

int Compteur_Ligne(int *p)
{
	int nLignes=0;
	FILE *fp;
    fp=fopen("Projet.txt","a+");
    
	int c;
	while((c=getc(fp)) != EOF)
	{
		if(c == '\n')
		{
			nLignes++;
		}
	}
	*p=nLignes;
	fclose(fp);
} 

void Supprime()
{
  FILE *fp;
  FILE *f;
  int ide, id,nLigne,*p;
  char number[10],nom[30],prenom[30],mail[40];
  p=&nLigne;
  Compteur_Ligne(p);
    
  fp = fopen("Projet.txt", "r+");
  f = fopen("Contact.txt","a+");
  
  if (fp == NULL) 
  { 
	puts("Erreur de lecture fichier\n"); 
  }
	
		printf("Saisir l'identifiant du contact à supprimer");
		scanf("%d",&ide);
	 
	  	for (id=1;id<=nLigne;id=id+1)
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
}
void Recherche()
{
	FILE *fp;
  int ide, id,nLigne,*p;
  char number[10],nom[30],prenom[30],mail[40];
  p=&nLigne;
  Compteur_Ligne(p);
  
  fp = fopen("Projet.txt", "r");
  
  if (fp == NULL) 
  { 
	puts("Erreur de lecture fichier\n"); 
  } 

	printf("Saisir un identifiant");
	scanf("%d",&ide);
	
	  	for (id=0;id<=nLigne;id=id+1)
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
}

void Affichage ()
{
  FILE *fp;
  int id, i,nLigne,*p;
  char number[10],nom[30],prenom[30],mail[40];
  p=&nLigne;
  Compteur_Ligne(p);
    
  fp = fopen("Projet.txt", "a+");
  
  if (fp == NULL) 
  { 
	puts("Erreur de lecture fichier\n"); 
  }
  
		for (i=0;i<=nLigne;i=i+1)
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
}

void Ajout()
{
  FILE *fp;
  int id;
  char number[10],nom[30],prenom[30],mail[40];
    
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
}

int main(void)
{
	FILE *fp;
  	int id, i, ide, choix;
  	char number[10],nom[30],prenom[30],mail[40];
	
	Menu: 
	
	printf("\nMenu: faites un choix: \n");
	printf("Afficher le contenu du répertoire --------> 1\n");
	printf("Ajouter une personne dans le répertoire' ----> 2\n");
	printf("Rechercher une personne dans le répertoire ---------------------> 3\n");
	printf("Supprimer le contenu du répertoire ------------------------------> 4\n");
	printf("Supprimer une personne du répertoire ------------------------------> 5\n");
	printf("Quitter ------------------------------> 6\n");
	
	scanf("%d",&choix);
	
	switch(choix)
	{
	case 1 : goto Afficher; break;
	case 2 : goto Ajouter; break;
	case 3 : goto Rechercher; break;
	case 4 : goto Supprimertout; break;
	case 5 : goto Supprimer; break;
	case 6 : return 0;
	default : goto Menu;
	}
	
	Ajouter :
		Ajout();
    	goto Menu;
    
    Supprimer : 
    	Supprime();
    	goto Menu;
    
    Afficher : 
    	Affichage();
    	goto Menu;
    	
    Supprimertout :
    	fp=fopen("Projet.txt","w+");
    	fclose(fp);
    	goto Menu;
    	
    Rechercher :
    	Recherche();
    	goto Menu;
}
	
