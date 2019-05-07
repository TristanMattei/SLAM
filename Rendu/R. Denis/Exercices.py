from random import *
from math import *
exo=eval(input("exercice 1, 2, 3, 4, 5 ? "))

if exo == 1:
    unit=eval(input("veuillez donner l'unitée de départ 0 pour farenheit 1 pour celsius : "))
    val=eval(input("donnez la température : "))

    if unit == 0:
        f = val
        c = 0.55556 *(f-32)
        t=[["c", "f"], [c, f]]
        print(t)
    elif unit == 1:
        c = val
        f = (c/0.55556)+32
        t=[["c", "f"], [c, f]]
        print(t)
    else:
        print("nope")

elif exo == 2:
    tva=eval(input("veuillez donner la valeur de la tva 0 pour 10% 1 pour 20% : "))
    val=eval(input("donnez le prix : "))


    if tva == 0:
        val = val+(val * 0.1)
        print(val)
    elif tva == 1:
        val = val+(val * 0.2)
        print(val)
    else:
        print("nope")

elif exo == 3:
    a=eval(input("Saisir la valeur Xx² : "))
    b=eval(input("Saisir la valeur Xx : "))
    c=eval(input("Saisir la valeur X : "))
    delta = (b*b) - (4 * a * c)
    if delta < 0:
        print("y a pas de solution")
    elif delta == 0:
        x=-b/(2*a)
        print(x)
    elif delta > 0:
        x1 = (-b-sqrt(delta))/(2*a)
        x = (-b+sqrt(delta))/(2*a)
        print(x)
        print(x1)

elif exo == 4:
    i=eval(input("Saisir le nombre de colonne : "))
    j=eval(input("Saisir le nombre de lignes : "))
    t=[]
    for k in range(i):
        tab = []
        for L in range(j):
            tab.append(randint(0, 1))
        t.append(tab)
    print(t)
elif exo == 5:
    exo=eval(input("Méthode 1, 2, 3 ou 4 ? "))
    if exo == 1:
        parties=eval(input("donnez le nombre de parties à jouer : "))
        x=0
        tab=[]
        for x in range(parties):
            argent=eval(input("Saisir le montant de départ : "))
            i=0
            un=0
            while i < 6:
                resultat=eval(input("Saisir le résultat du lancé : "))
                if resultat == 1:
                    un=un+1
                    tab.append(resultat)
                else:
                    un = un
                    tab.append(resultat)
                i = i + 1
            if un < 2:
                argent = argent - 2
            elif un > 4:
                argent = argent + 10
            else:
                argent = argent + 5
    elif exo == 2:
        parties=eval(input("donnez le nombre de parties à jouer : "))
        x=0
        tab=[]
        for x in range(parties):
            argent=eval(input("Saisir le montant de départ : "))
            i=0
            un=0
            while i < 6:
                resultat=eval(input("Saisir le résultat du lancé entre 1 et 6 inclus : "))
                if resultat == 1:
                    un=un+1
                    tab.append(resultat)
                elif resultat < 1:
                    print("ENTRE 1 et 6")
                    i = i - 1
                elif resultat > 6:
                    print("ENTRE 1 et 6")
                    i = i - 1
                else:
                    un = un
                    tab.append(resultat)
                i = i + 1
            if un < 2:
                argent = argent - 2
            elif un > 4:
                argent = argent + 10
            else:
                argent = argent + 5
    elif exo == 3:
        parties=eval(input("donnez le nombre de parties à jouer : "))
        x=0
        tab=[]
        for x in range(parties):
            argent=eval(input("Saisir le montant de départ : "))
            i=0
            un=0
            while i < 6:
                resultat=eval(input("Saisir le résultat du lancé entre 1 et 6 inclus : "))
                if resultat == 1:
                    un=un+1
                    tab.append(resultat)
                elif resultat < 1:
                    print("ENTRE 1 et 6")
                    i = i - 1
                elif resultat > 6:
                    print("ENTRE 1 et 6")
                    i = i - 1
                else:
                    un = un
                    tab.append(resultat)
                i = i + 1
            if un < 2:
                argent = argent - 2
                print("vous avez perdu 2 euros")
                print("vous possédez désormais ", argent," euros")
                print(tab)
            elif un > 4:
                argent = argent + 10
                print("vous avez gagné 10 euros")
                print("vous possédez désormais ", argent," euros")
                print(tab)
            else:
                argent = argent + 5
                print("vous avez gagné 5 euros")
                print("vous possédez désormais ", argent," euros")
                print(tab)
    elif exo == 4:
        parties=eval(input("donnez le nombre de parties à jouer : "))
        x=0
        for x in range(parties):
            argent=eval(input("Saisir le montant de départ : "))
            i=0
            un=0
            tab=[]
            for i in range(6):
                resultat=randint(1, 6)
                print(resultat)
                if resultat == 1:
                    un=un+1
                else:
                    un = un
                tab.append(resultat)
            if un < 2:
                argent = argent - 2
                print("vous avez perdu 2 euros")
                print("vous possédez désormais ", argent," euros")
                print(tab)
            elif un > 4:
                argent = argent + 10
                print("vous avez gagné 10 euros")
                print("vous possédez désormais ", argent," euros")
                print(tab)
            else:
                argent = argent + 5
                print("vous avez gagné 5 euros")
                print("vous possédez désormais ", argent," euros")
                print(tab)
    else:
        print("vous vous etes trompé")
else:
    print("vous vous etes trompé")
