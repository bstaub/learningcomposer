# Composer FAQs

#### Composer bei einem Projekt hinzufügen / installieren / aktualisieren
    composer init
    composer install
    composer update

#### Composer Repo um Packete zu suchen
    https://packagist.org/
    
#### Composer Packet installieren mit require
    composer require packetnameXXX

#### Regenerate Autoload (optimized with -o)
Muss man immer wieder ausführen falls man eine Änderung in Packages.json durchführt

    composer dumpautoload -o

#### Autoload auf Namespace einschränken
Falls ein beliebiger Namespace im src Directory verwendet werden soll kann man App\\ lassen und "":"src/" schreiben!

        "psr-4": {
            "App\\":"src/"
        }

#### Load Dev Dependendies for Example Error Handler with --dev

    composer require filp/whoops --dev

#### Update Composer to the newest Version
    
    composer self-update

#### Composer Packet deinstallieren
    
    composer remove swiftmailer/swiftmailer

#### Wenn man mittels Composer ein Packet deinstalliert hat sollte man (.lock file löschen oder folgendes ausführen..)
    composer install
    composer update --lock
    
#### Composer spezifisches Packet aktualisieren
    composer update packetnameXXX
    
    
