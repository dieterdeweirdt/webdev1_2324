# Base MVC

Dit project bevat een basis opzet van MVC (Model View Controller). En helpt je om sneller te kunnen ontwikkelen, code logisch te groeperen en onderdelen te hergebruiken.

## Onderdelen

| Functionaliteit | Omschrijving | Locatie |
| ----------- | ----------- | ----------- |
| Routing | Beslist wat er moet gebeuren met een URL en stuurt door naar Controller | /app.php |
| Controller | Krijgt een request binnen op een method, haalt data op uit de model en stuurt dit door naar de juiste view | /Controllers/ |
| Models | Staat in contact met de database, voert sql opdrachten uit en stuurt resultaat terug | /Models |
| Views | Bevat de inhoud of een deel van de inhoud van een pagina | /views/... |
| Templates | Bevat de volledige layout van de pagina | /views/_templates/... |

## Installatie

Installeer de nodige packages via [composer](https://getcomposer.org/).

```
ddev composer install
```


## Router

Nieuwe pagina's of bereikbare URL's moeten aangemaakt worden via de router class. De routes kunnen aangemaakt worden in `app.php`

Hier bouw je de url op en stuur je deze door naar de desbetreffende controller en een van zijn methods. Variabele elementen in de URL kan je toevoegen via regular expressions.

bv:

```
$router->get('/cocktail/(\d+)', 'App\Controllers\CocktailController@detail');
```

> Voor de routing gebruik ik een externe library. 
> [Meer info over de mogelijkheden kan je terugvinden op de GitHub pagina](https://github.com/bramus/router)

## Controller

Deze controller stuurt dus de request door naar de desbetreffende  method. CocktailController@detail wil dus zeggen dat bij de url http://localhost:8888/cocktail/1 de method `detail` wordt aanroepen in de `CocktailController` met als parameter '1'.

Een controller staat dus in voor het bekijken van de request en het versturen van de uiteindelijke response.

Je kan hier validatie doen van data afkomstig van de request URI of via een formulier ($_POST).
Daarnaast kan je ook data ophalen uit cookies of de session.

Afhankelijk van de soort pagina zal de controller dus data moeten ophalen. Bijvoorbeeld via een of meerdere models. Bv: `Cocktail::find($id)`

Met behulp van de views en de nodige data zal de response HTML opgebouwd worden via de method `loadView` uit de `BaseController`.

```
<?php

namespace App\Controllers;
use App\Models\Cocktail;

class CocktailController extends BaseController {

    public static function detail ($id) {
        $cocktail = Cocktail::find($id);

        self::loadView('/cocktail/detail', [
            'cocktail' => $cocktail
        ]);
    }

}
```

## Model

Een model is een voorstelling van een object uit onze database. In veel gevallen zal een tabel dus een bijhorende model hebben. Indien we een lege model class maken en afleiden van de `BaseModel` dan zitten hier reeds basis methods in zoals `getAll`, `find` of `delete`.

Willen we niet deze standaard methods dan moeten we een nieuwe method aanmaken in deze nieuw aangemaakte model. Wil je een method aanmaken dat bruikbaar is voor alle models dan kan dit in de `BaseModel`.

```
<?php
namespace App\Models;

class Cocktail extends BaseModel {
    public function MijnSpecifiekeMethod() {
        //eigen code...
    }
}
```

## Views

De view wordt opgeroepen vanuit de Controller of vanuit een andere view. En stelt de html van de pagina voor.

Hierin zit enkel de data, niet de volledige html. Deze zit in de template. 

Hieronder een voorbeeld van de view `/views/cocktail/detail.php`.

```
<h1><?= $cocktail->name; ?></h1>
<img src="/images/cocktails/<?= $cocktail->photo; ?>">
<p><?= $cocktail->description; ?></p>
```

### Layouts

De layout omvat de volledige html structuur met `<head>` en `<body>`. De variabele `$content` wordt vervangen door de inhoud van de view die werd aangeroepen vanuit de controller. En kan je aanpassen in `/views/_layout/main.php`. Je kan bij de loadView als 3e parameter een andere layout meegeven

```
<!DOCTYPE html>
<html lang="en">
<head>
    ...
</head>
<body>
    <main>
        <?= $content; ?>
    </main>
</body>
</html>
```
