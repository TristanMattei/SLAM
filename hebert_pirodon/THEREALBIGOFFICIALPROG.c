#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int show_repo(FILE *fp)
{
	int id = 0, i = 0;
	char nom[100], prenom[100], mail[100], num[100];

	while (i != -1) {
		i = fscanf(fp, "%d %s %s %s %s", &id, &nom, &prenom, &mail, &num);
		if (i != -1)
			printf("%d %s %s %s %s\n", id, nom, prenom, mail, num);
	}
	return (0);
}

int add_user(FILE *fp)
{
	int id = 0;
	char nom[100], prenom[100], mail[100], num[100];

	printf("ID: ");
	scanf("%d", &id);
	printf("Nom: ");
	scanf("%s", &nom);
	printf("Prenom: ");
	scanf("%s", &prenom);
	printf("@: ");
	scanf("%s", &mail);
	printf("Numero: ");
	scanf("%s", &num);
	fprintf(fp, "\n%d", id);
	fprintf(fp, " ");
	fprintf(fp, "%s", nom);
	fprintf(fp, " ");
	fprintf(fp, "%s", prenom);
	fprintf(fp, " ");
	fprintf(fp, "%s", mail);
	fprintf(fp, " ");
	fprintf(fp, "%s", num);
	return (0);
}

int delete_user(FILE *fp)
{
	FILE *new;
	int id = 0, choix = 0, i = 5, x = 0;
	char del, nom[100], prenom[100], mail[100], num[100];

	printf("Veuillez saisir l'id de la personne à supprimer :\n");
	scanf("%d", &choix);
	new = fopen("tmp.txt", "w+");
	while (i == 5) {
		i = fscanf(fp, "%d %s %s %s %s\n", &id, &nom, &prenom, &mail, &num);
		if (i != 5)
			break;
		if (id == choix) {
			x = 1;
			continue;
		}
		fprintf(new, "%d %s %s %s %s\n", id, nom, prenom, mail, num);
	}
	if (x == 0) {
		printf("Aucun contact n'a pour ID : %d\n", choix);
	}
	fclose(new);
	fclose(fp);
	remove("monrepertoire.txt");
	rename("tmp.txt", "monrepertoire.txt");
	
	return (0);
}

int show_user(FILE *fp)
{
	int id = 0, choix = 0, i = 0;
	char nom[100], prenom[100], mail[100], num[100];

	printf("Veuillez saisir l'id de la personne souhaitee :\n");
	scanf("%d", &choix);
	while (i != -1) {
		i = fscanf(fp, "%d %s %s %s %s", &id, &nom, &prenom, &mail, &num);
		if (choix == id) {
			printf("%d %s %s %s %s\n", id, nom, prenom, mail, num);
			return (0);
		}
	}
	printf("Aucun contact n'a pour ID : %d\n", choix);
	return (0);
}

int check_name(char *nom, char *name)
{
	int x = strlen(name);
	int y = strlen(nom);

	if (x != y)
		return (1);
	x = 0;
	while (x < y) {
		if (nom[x] == name[x])
			x++;
		else
			return (1);
	}
	return (0);
}

int search_user(FILE *fp)
{
	int id = 0, i = 0, j = 0;
	char name[100], nom[100], prenom[100], mail[100], num[100];

	printf("Veuillez saisir le nom de la personne recherchee :\n");
	scanf("%s", &name);
	while (i != -1) {
		i = fscanf(fp, "%d %s %s %s %s", &id, &nom, &prenom, &mail, &num);
		j = check_name(nom, name);
		if (j == 0) {
			printf("%d %s %s %s %s\n", id, nom, prenom, mail, num);
			return (0);
		}
	}
	printf("Aucun contact n'a pour nom : %s\n", name);
	return (0);
}

int main(void)
{
	FILE *fp;
	int choix = 0;

	system("color df");
	printf("\t\t\t\tMENU\n\n");
	printf("\t\t1) Visualiser le repertoire\n");
	printf("\t\t2) Ajouter un contact au repertoire\n");
	printf("\t\t3) Supprimer tout le contenu du repertoire\n");
	printf("\t\t4) Afficher un contact par son id\n");
	printf("\t\t5) Supprimer un contact\n");
	printf("\t\t6) Afficher un contact par son nom\n");
	printf("\t\t7) Quittez\n\n");
	printf("Que voulez-vous faire : ");
	scanf("%d", &choix);
	while (1) {
		switch (choix) {
		case 1:
			fp = fopen("monrepertoire.txt", "r");
			show_repo(fp);
			fclose(fp);
			break;
		case 2:
			fp = fopen("monrepertoire.txt", "a+");
			add_user(fp);
			fclose(fp);
			break;
		case 3:
			fp = fopen("monrepertoire.txt", "w+");
			fclose(fp);
			break;
		case 4:
			fp = fopen("monrepertoire.txt", "r");
			show_user(fp);
			fclose(fp);
			break;
		case 5:
			fp = fopen("monrepertoire.txt", "a+");
			delete_user(fp);
			fclose(fp);
			break;
		case 6:
			fp = fopen("monrepertoire.txt", "r");
			search_user(fp);
			fclose(fp);
			break;
		case 7:
			printf("Au revoir...\n");
			return (0);
			break;
		default:
			printf("Erreur : veuillez choisir un nombre entre 1 et 7\n");
			break;
		}
		printf("\n\nQue voulez-vous faire : ");
		scanf("%d", &choix);
	}
	return (0);
}
