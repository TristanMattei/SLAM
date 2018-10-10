//Tester sur Bureau
#include <stdio.h>
#include <stdlib.h>

int count = 0;
int Ajout();
int Afficher();
int Recherche();
int Suppression();
int Reset();

int Ajout()
{
  int telephone, i, num;
  char surname[20], prenom[50], mail[50];

  printf("Nombre de contacts: ");
  scanf("%d", &num);

  FILE *fp, *fp2;
  fp = fopen("repertoire.txt", "a+");
  fp2 = fopen("nombre_contacts.txt", "a+");
  if(fp == NULL)
  {
    printf("Erreur!");
    exit(1);
  }

  for(i = 0; i < num; i++)
  {
    printf("\nContact %d\n", i + 1);
    srand(time(NULL));
    int ID = rand()%100 + 1;
    printf("ID: %d\n", ID);
    printf("\tNom: ");
    scanf("%s", &surname);
    printf("\tPrenom: ");
    scanf("%s", &prenom);
    printf("\tTelephone: ");
    scanf("%d", &telephone);
    printf("\tMail: ");
    scanf("%s", &mail);

    fprintf(fp,"\n%d\t%s\t\t\t%s\t\t\t0%d\t\t %s", ID, surname, prenom, telephone, mail);
    count++;
  }
  printf("\n");
  fprintf(fp2, "%d ", count);
  fclose(fp);
  fclose(fp2);
  return 0;
}

int Afficher()
{
  FILE *fp;
  fp = fopen("repertoire.txt", "r");
  if(fp == NULL)
  {
    printf("Erreur!");
    exit(1);
  }

  int c = fgetc(fp); 
  while (c != EOF) 
  { 
    printf ("%c", c); 
    c = fgetc(fp); 
  } 
  printf("\n\n");
  fclose(fp);
  return 0;
}

int Recherche()
{
  int i = 0, ID, IDT[10];
  char nom, nomT[50];
  FILE *fp;
  fp = fopen("repertoire.txt", "r");
  if(fp == NULL)
  {
    printf("Erreur!");
    exit(1);
  }

  printf("Ligne: ");
  scanf("%d", &ID);

  int c = fgetc(fp);
  while (c != EOF) 
  { 
    if (i == ID & c == '\n')
    {
      fscanf(fp,"%d %s", &IDT[i], &nomT[i]);
      while (i == ID)
      {
        printf ("%c", c);
        c = fgetc(fp);
      }
    }
    c = fgetc(fp);
    i++;
  } 

  fclose(fp);
  return 0;
}

int Suppression()
{
   int ID[50], nom[50];
   int i, num;

   FILE *fp;
   fp = fopen("ID.txt", "r");
   if(fp == NULL)
   {
       printf("Erreur!");
       exit(1);
   }

   for(i = 0; i < count; i++)
   {
      fscanf(fp,"%s", &ID[i]);
      fscanf(fp,"%s", &nom[i]);
      printf("\nArticle %d\n", i + 1);
      printf("Code: ");
      scanf("%s", ID);
      printf("Prix: %s", nom[i]);
   }

   fclose(fp);
   return 0;
}

int Reset()
{
  char choice2;

  FILE *fp, *fp2;
  fp = fopen("repertoire.txt", "w");
  fp2 = fopen("nombre_contacts.txt", "w");
  if(fp == NULL)
  {
    printf("Erreur!");
    exit(1);
  }
  printf("Confirmation de la reinitialisation du repertoire (o/n)\n");
  scanf("%c", &choice2);
  getchar();
  if (choice2 == 'o')
  {
    fprintf(fp, " ");
    fprintf(fp2, " ");
  }
  else if (choice2 == 'n')
  {
    system("cls");
  }
  fprintf(fp, "ID\tNom\t\t\tPrenom\t\t\tTelephone\t\tMail\n");
  fclose(fp);
  fclose(fp2);
  return 0;
}

int main()
{
  int choice;
  char titre;
  FILE *fp;
  fp = fopen("repertoire.txt", "a+");
  if (fscanf(fp, "%c", &titre) != 'C')
  {
    fprintf(fp, "ID\tNom\t\t\tPrenom\t\t\tTelephone\t\tMail\n");
  }
    
  fclose(fp);

  while (choice != 6){
    printf("              ~~~~~~~~~~~~~~~~~~~~~~ MENU ~~~~~~~~~~~~~~~~~~~\n");
    printf("              (1) Ajouter un contact dans le repertoire");
    printf("\n              (2) Afficher le contenu du repertoire");
    printf("\n              (3) Rechercher un contact dans le repertoire");
    printf("\n              (4) Supprimer un contact du repertoire");
    printf("\n              (5) Supprimer le repertoire");
    printf("\n              (6) Quitter le menu\n");
    printf("              ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n");
    scanf("%d", &choice);
    system("cls");
    if (choice == 1)
      Ajout();
    else if (choice == 2)
      Afficher();
    else if (choice == 3)
      Recherche();
    else if (choice == 4)
      Suppression();
    else if (choice == 5)
      Reset();
    else if (choice == 6)
      return 0;
    else
      system("cls");
   }
}

/*
---Fonction main()
Declaration de la variable globale count de type entier
Declaration de la variable choice de type entier
Declaration de la variable titre de type caractere
Declaration de la variable fp de type pointeur
On affecte à fp le pointeur du fichier "repertoire.txt" en mode ecriture-ajout
SI (fscanf(fp, "%c", &titre) != 'C')
  Ajouter dans fp "ID\tNom\t\t\tPrenom\t\t\tTelephone\t\tMail\n"
FIN SI
Fermeture du fichier "repertoire.txt" par fp

TANT QUE (choice != 6)
  Afficher "Menu"
  Afficher "(1) Ajouter un contact dans le repertoire"
  Afficher "(2) Afficher le contenu du repertoire"
  Afficher "(3) Rechercher un contact dans le repertoire"
  Afficher "(4) Supprimer un contact du repertoire"
  Afficher "(5) Supprimer le repertoire"
  Afficher "(6) Quitter le menu\n");"
  L'utilisateur affecte une valeur à la variable choice
  Rafraîchissement du CMD

  SI (choice == 1)
    On appele la fonction Ajout()
  FIN SI
  SINON SI (choice == 2)
    On appelle la fonction Afficher()
  FIN SINON SI
  SINON SI (choice == 3)
    On appelle la fonction Recherche()
  FIN SINON SI
  SINON SI (choice == 4)
    On appelle la fonction Suppression()
  FIN SINON SI
  SINON SI (choice == 5)
    On appelle la fonction Reset()
  FIN SINON SI
  SINON SI (choice == 6)
    Fin du programme
  FIN SINON SI
  SINON
    Rafraîchissement du CMD
  FIN SINON
FIN TANT QUE

---Fonction Ajout()
Declaration des variables telephone, i et num de type entier
Declaration des variables surname, prenom et mail de type caractere
Afficher "Nombre de contacts: "
L'utilisateur affecte une valeur à la variable num

Declaration des variable fp et fp2 de type pointeur
On affecte à fp le pointeur du fichier "repertoire.txt" en mode ecriture-ajout
On affecte à fp2 le pointeur du fichier "nombre_contacts.txt" en mode ecriture-ajout
SI (fp == NULL)
  Afficher "Erreur!"
  Fin du programme
FIN SI

POUR i ALLANT de 0 à num-1 avec un PAS de 1
  Afficher "Contact %d"
  Afficher i+1
  Déclaration de la variable ID de type entier
  On affecte à ID la valeur rand()%100 + 1
  Afficher "ID: %d"
  Afficher ID
  Afficher "Nom: "
  L'utilisateur affecte une valeur à la variable surname
  Afficher "Prenom: "
  L'utilisateur affecte une valeur à la variable prenom
  Afficher "Telephone: "
  L'utilisateur affecte une valeur à la variable telephone
  Afficher "Mail: "
  L'utilisateur affecte une valeur à la variable mail
  Ajouter dans fp "\n%d\t%s\t\t\t%s\t\t\t0%d\t\t %s"
  Ajouter dans fp les variables ID, surname, prenom, telephone et mail
  Incrémenter de 1 la variable globale count
FIN POUR

Ajouter dans fp2 "%d "
Ajouter dans fp la variable count
Fermeture du fichier "repertoire.txt" par fp
Fermeture du fichier "nombre_contacts.txt" par fp2

---Fonction Afficher()
Declaration des variable fp de type pointeur
On affecte à fp le pointeur du fichier "repertoire.txt" en mode lecture
SI (fp == NULL)
  Afficher "Erreur!"
  Fin du programme
FIN SI
Déclaration de la variable c de type entier
On affecte à c la valeur fgetc(fp)

TANT QUE (c != EOF)
  Afficher "%c"
  Afficher c
  On affecte à c la valeur fgetc(fp)
FIN TANT QUE

Fermeture du fichier "repertoire.txt" par fp

---Fonction Reset()
Declaration de la variable choice2 de type caractere
Declaration des variable fp et fp2 de type pointeur
On affecte à fp le pointeur du fichier "repertoire.txt" en mode ecriture
On affecte à fp2 le pointeur du fichier "nombre_contacts.txt" en mode ecriture
SI (fp == NULL)
  Afficher "Erreur!"
  Fin du programme
FIN SI
Afficher "Confirmation de la reinitialisation du repertoire (o/n)"
L'utilisateur affecte une valeur à la variable choice2

SI (choice2 == 'o')
  Ajouter dans fp " "
  Ajouter dans fp2 " "
FIN SI
SINON SI (choice2 == 'n')
  Rafraîchissement du CMD
FIN SINON

Ajouter dans fp "ID\tNom\t\t\tPrenom\t\t\tTelephone\t\tMail\n"
Fermeture du fichier "repertoire.txt" par fp
Fermeture du fichier "nombre_contacts.txt" par fp2

---Fonction Recherche(incomplet)

---Fonction Suppression(incomplet)

*/
