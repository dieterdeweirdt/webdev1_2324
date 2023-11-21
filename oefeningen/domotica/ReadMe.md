# Evaluatie 2

Maak een domotica app op basis van deze statische html pagina's en de mysql database volledig dynamisch.

Op de pagina zie je aan de linkerzijde de verschillende ruimtes van een woning (categories).
Bij het klikken op een ruimte zie je aan de rechterzijde de verschillende knoppen (buttons) en zie je ook aan de hand van de status of een bepaalde verlichting al dan niet aan staat. Zorg er ook voor dat deze ruimte in de navigatie actief wordt gezet (class="active").

Je moet ook de status van de buttons kunnen aanpassen in de database. Dus een verlichting dat aanstaat (status = 1) moet uitgezet kunnen worden (status = 0). Tip: spreek een nieuwe pagina aan en stuur de nodige gegevens door via de get methode. Terugkeren naar de vorige pagina kan via:
```
header('Location: ' . $_SERVER['HTTP_REFERER']);
```

Als laatste zorg je ervoor dat de pagina's beschermd zijn door middel van een login en wachtwoord.

login: info@doe.com
wachtwoord: test123

Zoals je kan zien in de database is dit wachtwoord gehashed via password_hash. Gebruik de juiste methode om het wachtwoord te verifiëren.

Is de login succesvol, dan moet deze gedurende de sessie actief blijven.

## Puntenverdeling

| Onderdeel | Punten |
| --------- | ------ |
| Navigatie | 2 |
| Buttons | 2 |
| Status aanpassen button | 2 |
| Login | 2 |
| Code** | 2 |

** Bij de code kijk ik vooral naar het gebruik van views, functies, naamgeving van variabelen.
