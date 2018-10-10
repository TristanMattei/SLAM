#include <stdio.h>
#include <stdlib.h>
#include <time.h>


int Ajout()
{
	FILE *fp;
	char surname[20], prenom[20], mail[35],telephone[10];
	fp= fopen("repertoire.txt","a+");
	printf("						~~~~~~~~~~~~~~~~~~~~~~Ajout d\'un utilisateur~~~~~~~~~~~~~~~~~~~~~~\n");
	srand(time(NULL));
	int ID = rand()%100 + 1;
	printf("									Votre ID est :");
	printf(" %d\n",ID);
	printf("\n									Nom : ");
	scanf("	%s", &surname);
	printf("\n									Prenom : ");
	scanf("	%s", &prenom);
	printf("\n									Telephone : ");
	scanf("	%s", &telephone);
	printf("\n									Mail : ");
	scanf("%s", &mail);
	printf("						~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n");
		
	fprintf(fp,"\n%d\t\t\t\t%s\t\t\t%s\t\t\t%s\t\t %s", ID, surname, prenom, telephone, mail);	
}

int Afficher()
{
	FILE *fp;
	fp= fopen("repertoire.txt","r");
	int c = fgetc(fp);
	printf("~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Repertoire ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n");
	while (c != EOF)
	{
		printf("%c",c);
		c = fgetc(fp);
	}
	printf("\n~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~");
}

int Rechercher()
{
	FILE *fp;
	int ID;
	int a=0;
	int n=0;
	int ligne=1;
	int ligneVoulu = rand() % 100;
	char chaine[100];
	printf("Saisir son ID: ");
	scanf("%d",&ID);
	
	if (fp == NULL)
	exit(0);
	else 
		do
	{
		ID = fgetc(fp);
		if (ID= '\n');
	}

	while (ID==EOF||ligne==ligneVoulu);
	fgets (chaine,100, fp);
	fscanf(fp,"%c",ID);
	printf("%c",ID);

			
}

int Rechercher2()
{
	FILE *fp;
	int i, ID, IDT[20];
	char nomT[i], nom[100];
	fp= fopen("repertoire.txt","r");
	for (i=0;i<5;i=i+1)
	{
		fscanf(fp,"%d",&IDT[i]);
		fscanf(fp,"%s",&nomT[i]);
	}
		
	printf("Saisir l\'ID : ");
	scanf("%d",&ID);
		
	printf("Le nom est %s",nomT[ID-1]);
}

int Supprimer()
{
	
}

int Tout_supprimer()
{
	FILE *fp;
	fp=fopen("repertoire.txt","w");
	fclose(fp); 
	printf("Le contenu du repertoire a ete supprime");
	fp=fopen("repertoire.txt","a+");
	fprintf(fp,"Identifiant			Nom			Prenom			Telephone		Mail");
}

int main()
{
	FILE *fp;
	char choix;
	printf("							~~~~~~~~~~~~~~~~~~~~~~ MENU ~~~~~~~~~~~~~~~~~~~~~~\n");
	printf("							(1) 	Ajouter une personne dans le repertoire");
	printf("\n							(2) 	Afficher le contenue du repertoire");
	printf("\n							(3)	Rechercher une personne dans le repertoire");
	printf("\n							(4)	Supprimer une personne du repertoire");
	printf("\n							(5)	Supprimer le repertoire");
	printf("\n							(6)	Quitter le menu\n");
	printf("							~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n");
	scanf("%c",&choix);
	getchar();
	
	if (choix == '1')
	{
		Ajout();
	
	}
	
	if (choix== '2')
	{
		Afficher();

	}
	
	
	if (choix == '3')
	{
		Rechercher2();

	}	
	
	if (choix == '4')
	{
		Supprimer();

	}
	
	if (choix =='5')
	{
		Tout_supprimer();

	}
	
	if (choix == '6')
	{
		return 0;
	}
}
