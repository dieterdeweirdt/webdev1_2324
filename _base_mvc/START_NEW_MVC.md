# Start MVC Project

## Project aanmaken en starten
1. Dupliceer de map `_base_mvc` en geef het de naam van je nieuwe project
1. Indien er geen .ddev aanwezig is of je wil de configuratie opnieuw lanceren `ddev config`. Hierbij moet je er vooral op letten dat je de root dir op `public` plaatst.
   1. Zorg er zeker voor dat je een unieke naam hebt voor je ddev server. Dit kan je nadien ook aanpassen in je `.ddev/config.yaml`
1. Start de server via `ddev start`
1. Open de website via `ddev lauch` of door te klikken op een link in de lijst van `ddev describe`
1. Indien er geen `./vendor` map aanwezig is zal je deze via composer moeten installeren: `ddev composer install`

## Connecteren met de database en SQL importeren
1. Open MySQLWorkbench of een andere DBMS naar keuze
1. Via `ddev describe` moet je achterhalen op welke poort de MySQL Server aan het draaien is. (bijvoorbeeld 9876)
1. Connecteer nu met je server 
   ```
   host: 127.0.0.1
   port: 9876
   user: root
   pass: root
   ```
1. In de lijst van schema's zal je nu zien dat er reeds een (lege) database is aangemaakt met de naam `db`
1. Bij SQLWorkbench dien je te dubbel klikken op de naam van de database om connectie te maken. De naam zal nu in het vet staan. 
1. Open het sql-bestand via `File` > `Open SQL Script...`.
1. Run het SQL script. Bij MySQL Workbench kan dit door te klikken op de bliksemschicht.

> Let op! Het connecteren vanuit onze PHP dient te gebeuren met andere logingegevens. Bij `ddev describe` staat dit omschreven bij 'InDocker'.
>```
>host: db
>port: 3306
>user: db
>pass: db
>database: db
>```

## CSS en Afbeeldingen

1. Via het startproject heb je 