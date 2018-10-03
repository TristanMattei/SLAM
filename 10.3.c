#include <stdio.h>

int main (void)
{ 
  FILE *fp;
  char choix;
  int i, code[10], cp;
  float prix[10];
  
  fp = fopen("monfichier.txt", "r");
  
  printf("Saisir a pour afficher\n");
  printf("Saisir b pour ajouter");
  scanf("%c", &choix);
  getchar();
  
  
  if (choix == 'a')
  {
  	for (i=0;i<5;i=i+1)
  	{
  		fscanf(fp, "%d", &code[i]);
  		fscanf(fp, "%f", &prix[i]);
  		printf("%d\n", code[i]);
	  	printf("%f" ,prix[i]);
  		}
	  
	  printf("Saisir un code produit");
	  scanf("%d",&cp);
	  
	  
	  
  }
  
  fclose(fp);
  return 0;
  
  
}
