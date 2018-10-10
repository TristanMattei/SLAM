#include <stdio.h>
#include <string.h>

int main(void)
{
	FILE *fp;
	char choix, nom[100], prenom[100], am[100], c;
	int id[10], tel[10], i;
	
	puts("(a) Ajouter une personne dans le repertoire");
	puts("(b) Afficher le répertoire");
	puts("(c) Recherche d'une personne (id)");
	puts("(d) Supprimer perssone du repertoire");
	puts("(e) Supprimer le repertoire entier");
	choix = getchar();
	getchar();
	
	switch(choix)
	{
		case 'a':
				fp = fopen("base.txt", "a");
				puts("Id: ");
				scanf("%d", &i);
				fprintf(fp, "%d ", i);
				puts("Nom: ");
				scanf("%s", &c);
				fprintf(fp, "%s ", &c);
				puts("Prenom: ");
				scanf("%s", &c);
				fprintf(fp, "%s ", &c);
				puts("Telephone: ");
				scanf("%d", &i);
				fprintf(fp, "%d ", i);
				puts("Adresse mail: ");
				scanf("%s", &c);
				fprintf(fp, "%s \n", &c);
				fclose(fp);
				break;
		case 'b':
				
		case 'c':
				fp = fopen("base.txt", "r");
	
				for(i=0; i<10; i++)
				{
					fscanf(fp, "%d", &id[i]);
					fscanf(fp, "%s", &nom[i]);
					fscanf(fp, "%s", &prenom[i]);
					fscanf(fp, "%d", &tel[i]);
					fscanf(fp, "%s", &am[i]);
				}
				puts("Id de la personne: ");
				scanf("%d", &i);
	
				i = i-1;
				printf("La personne correspondante est %s %s :\n" , nom[i], prenom[i]);
				printf("Numero de telphone: 0%d \n", tel[i]);
				printf("Adresse mail: %s", am[i]);
				fclose(fp);
				break;
	}
}
