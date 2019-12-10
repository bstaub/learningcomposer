# Composer FAQs

#### Composer bei einem Projekt hinzufügen / installieren / aktualisieren
    composer init
    composer install
    composer update


#### Composer Repo um Packete zu suchen
    https://packagist.org/

#### Regenerate Autoload (optimized with -o)
Muss man immer wieder ausführen falls man eine Änderung in Packages.json durchführt

    composer dumpautoload -o

#### Autoload auf Namespace einschränken
Falls ein beliebiger Namespace im src Directory verwendet werden soll kann man App\\ lassen und "":"src/" schreiben!

        "psr-4": {
            "App\\":"src/"
        }
