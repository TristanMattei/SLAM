#include <stdio.h>
#include <string.h>

int main(void)
{
	system("title Gestion de repertoire");
	FILE *fp, *fptmp, *fpo;
	char choix, c, name[50], lname[50], adr[50];
	int id[10], tel[10], i, x=0, z, j, k;

	fp = fopen("ID.txt", "r");
	fptmp = fopen("base-tmp.txt", "w+");
	fscanf(fp, "%d", &z);
	fclose(fp);
	puts("(a) Ajouter une personne dans le repertoire");
	puts("(b) Afficher le r?pertoire");
	puts("(c) Recherche d'une personne (id)");
	puts("(d) Supprimer personne du repertoire");
	puts("(e) Supprimer le repertoire entier");
	puts("(x) ne rien faire");
	choix = getchar();
	getchar();

	switch(choix)
	{
		case 'a':
				system("title Ajout d'une personne");
				system("cls");
				system("echo.");
				fp = fopen("base.txt", "a");
				fpo = fopen("base-save.txt", "a");
				fprintf(fp, "%d ", z+1);
				fprintf(fpo, "%d ", z+1);
				puts("Nom: ");
				scanf("%s", &c);
				fprintf(fp, "%s ", &c);
				fprintf(fpo, "%s ", &c);
				puts("Prenom: ");
				scanf("%s", &c);
				fprintf(fp, "%s ", &c);
				fprintf(fpo, "%s ", &c);
				puts("Telephone: ");
				scanf("%d", &i);
				fprintf(fp, "%d ", i);
				fprintf(fpo, "%d ", i);
				puts("Adresse mail: ");
				scanf("%s", &c);
				fprintf(fp, "%s \n", &c);
				fprintf(fpo, "%s \n", &c);
				fclose(fp);
				fclose(fpo);
				fp = fopen("ID.txt", "w+");
				fscanf(fp, "%d", &z);
				z = z+1;
				fprintf(fp, "%d", z);
				fclose(fp);
				break;

		case 'b':
				system("cls");
				system("title Affichage du repertoire");
				system("echo.");
				system("echo ----- Repertoire -----");
				system("echo.");
				fp = fopen("base.txt", "r");
				i=0;
				printf("	id	|");
				printf("	Nom	|");
				printf("	prenom	|");
				printf("	numero		|");
				printf("	mail	\n");
				puts("-----------------------------------------------------------------------------------------------------------");
				for (i=0; i<z; i++)
				{
					fscanf(fp, "%d", &id[i]);
					fscanf(fp, "%s", &name);
					fscanf(fp, "%s", &lname);
					fscanf(fp, "%d", &tel[i]);
					fscanf(fp, "%s", &adr);
					nom[i]=name;
					prenom[i]=lname;
					am[i]=adr;
					printf("	%d	|", id[i]);
					printf("	%s	|", name);
					printf("	%s	|", lname);
					printf("	0%d	|", tel[i]);
					printf("	%s	\n", adr);
					puts("-----------------------------------------------------------------------------------------------------------");
				}
				fclose(fp);
				break;

		case 'c':
				system("cls");
				system("title Recherche personne (id)");
				system("color a");
				fp = fopen("base.txt", "r");
				i=0;
				puts("donnez un entr?e");
				scanf("%d", &x);
				if(x>z || x<0)
				{
					printf("Contact introuvable");
					break;
				}
				printf("	id	|");
				printf("	Nom	|");
				printf("	prenom	|");
				printf("	numero		|");
				printf("	mail	\n");
				puts("-----------------------------------------------------------------------------------------------------------");
				for (i=0; i<x; i++)
				{
					fscanf(fp, "%d", &j);
					fscanf(fp, "%s", &name);
					fscanf(fp, "%s", &lname);
					fscanf(fp, "%d", &k);
					fscanf(fp, "%s", &adr);
				}
				printf("	%d	|", j);
				printf("	%s	|", name);
				printf("	%s	|", lname);
				printf("	%d	|", k);
				printf("	%s	\n", adr);
				puts("-----------------------------------------------------------------------------------------------------------");
				fclose(fp);
				break;
		case 'd':
				system("cls");
				system("color c");
				system("title Supprimer un contact");
				system("echo.");
				fp = fopen("base.txt", "r");
				fpo = fopen("ID.txt", "r");
				fscanf(fpo, "%d", &z);
				fclose(fpo);
				i=0;
				puts("donnez un entrée");
				scanf("%d", &x);
				for (i=0; i<z; i++)
				{
					fscanf(fp, "%d", &j);
					fscanf(fp, "%s", &name);
					fscanf(fp, "%s", &lname);
					fscanf(fp, "%d", &k);
					fscanf(fp, "%s", &adr);
					id[i]=j;
					nom[i]=name;
					prenom[i]=lname;
					tel[i]=k;
					am[i]=adr;
					if(i>x-1 && i<z)
					{
						fprintf(fptmp, "%d ", j-1);
						fprintf(fptmp, "%s ", name);
						fprintf(fptmp, "%s ", lname);
						fprintf(fptmp, "%d ", k);
						fprintf(fptmp, "%s \n", adr);
					}
					if(i<x-1 && i>=0)
					{
						fprintf(fptmp, "%d ", j);
						fprintf(fptmp, "%s ", name);
						fprintf(fptmp, "%s ", lname);
						fprintf(fptmp, "%d ", k);
						fprintf(fptmp, "%s \n", adr);
					}
				}
				fpo = fopen("ID.txt", "w+");
				fclose(fp);
				fclose(fptmp);
				fp = fopen("base.txt", "w");
				fptmp = fopen("base-tmp.txt", "r");
				for (i=0; i<z-1; i++)
				{
					fscanf(fptmp, "%d", &j);
					fscanf(fptmp, "%s", &name);
					fscanf(fptmp, "%s", &lname);
					fscanf(fptmp, "%d", &k);
					fscanf(fptmp, "%s", &adr);
					fprintf(fp, "%d ", j);
					fprintf(fp, "%s ", name);
					fprintf(fp, "%s ", lname);
					fprintf(fp, "%d ", k);
					fprintf(fp, "%s \n", adr);
				}
				fclose(fp);
				fclose(fptmp);
				fscanf(fpo, "%d", &z);
				z = z - 1;
				fprintf(fpo, "%d", z);
				fp = fopen("base.txt", "r");
				printf("	id	|");
				printf("	Nom	|");
				printf("	prenom	|");
				printf("	numero		|");
				printf("	mail	\n");
				puts("-----------------------------------------------------------------------------------------------------------");
				for (i=0; i<z; i++)
				{
					fscanf(fp, "%d", &id[i]);
					fscanf(fp, "%s", &name);
					fscanf(fp, "%s", &lname);
					fscanf(fp, "%d", &tel[i]);
					fscanf(fp, "%s", &adr);
					nom[i]=name;
					prenom[i]=lname;
					am[i]=adr;
					printf("	%d	|", id[i]);
					printf("	%s	|", name);
					printf("	%s	|", lname);
					printf("	0%d	|", tel[i]);
					printf("	%s	\n", adr);
					puts("-----------------------------------------------------------------------------------------------------------");
				}
				fclose(fpo);
				fclose(fp);
				break;

		case 'e':
				system("cls");
				system("color c");
				system("title Supression du repertoire ENTIER");
				system("echo SI c'est une erreur fermez cette fenetre, sinon appuyer sur entree");
				system("pause");
				fp = fopen("base.txt", "w");
				fprintf(fp, " ");
				printf("R?pertoire supprim? !");
				fclose(fp);
				fp = fopen("ID.txt", "w");
				fprintf(fp, "0");
				fclose(fp);
				break;
		case 'x':
				system("cls");
				system("color c");
				system("title ERRRERUURUERUEURUEURUERUEURUEURUE 404");
				system("echo ERREUR");
				system("pause");
				break;
		default :
				system("cls");
				system("color c");
				system("title WTF");
				system("echo wooops vous vous etes trompé de bouton");
				system("pause");
				break;
	}
	return 0;
} //Code : Chritopher HOSTIN et Denis REMACLE
