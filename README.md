### Autorid : Martin Hõbesalu

```

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

# Aja jälgimisteenus
Projekti eesmärgiks on luua rakendus aja jälgimiseks projektides. 

Rakendus võimaldab tavakasutajal sisestada kulunud aja iga projektis tehtud ülesande kohta, mida administraator saab hiljem kinnitada või tagasi lükata. 

## Ülesanne 1. XML
Luua XML fail vabalt valitud andmete edastamiseks, selle faili skeemifail ning XSL fail(id) erinevate transformatsioonide tarvis (soovitavalt vähemalt andmete HTML ja XML kujul kuvamiseks)

XML fail peab sisaldama aruande Id, kasutaja, roll, nimi, perekonnanimi, sisselogimisaeg, kinnitusstaatus, võib lisada oma omadus. 

XML-il peab olema 2 või 3 loogilist dimensiooni.
```
<dim1>
  <dim2>
    <dim3>
    </dim3>
  </dim2>
</dim1>
```
Kuvada andmed HTML tabelina kasutades XSLT ja PHP failis erinevad funktsioonid (näiteks, otsida aruande kinnitusstaatuse järgi). 
Välja mõelda vähemalt 3 funktsiooni.

## Ülesanne 2. Veebiteenus ja klientrakendus.

Luua veebiteenus ja klientrakendus, mis võimaldaks pakkuda teenust, eristada kasutajaid

*	Rakendus peab kasutama kõiki CRUD operatsioone

*	Projektide, ajaraportite ning kasutajate haldamine peab toimuma kasutades Web API't ajax päringuid tehes

*	Rakendus peab võimaldama luua kasutajaid

Kasutaja

*	ei saa kustutada ajaraportit, kui see on juba kinnitatud.

*	saab kustutada ajaraportit, mis ei ole kinnitatud.

*	saab lisada ajaraporteid ainult oma projektis

*	näeb ainult oma ajaraporteid

Administraator

*	saab vaadata kõiki ajaraporteid

*	saab kustutada ajaraporteid, olenemata sellest kas see on kinnitatud või mitte

*	saab lisada/eemaldada projekte

*	saab lisada/eemaldada projektile tegevusi

*	saab lisada/eemaldada projektile kasutajaid

## Ülesanne 3. Projekti dokumentatsioon.

Kasutajalood (PivotalTrackeris vms. keskkonnas) koos vastuvõtu tingimustega.

Lähtekood versioonihalduses, tähenduslikud koodikinnitused ja seotud kasutajalugudega.

Projekti loomise etapid koos vastavate kirjelduste ja piltidega.

Kasutajajuhend iga rolli jaoks.
