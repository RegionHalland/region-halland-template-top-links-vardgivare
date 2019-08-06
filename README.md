# Topplänkar på en landningssida för vårdgivarwebben

## Hur man använder Region Hallands plugin "region-halland-template-top-links-vardgivare"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-template-top-links-vardgivare".


## Användningsområde

Denna plugin skapar topplänkar på en landningssida för vårdgivarwebben


## Licensmodell

Denna plugin använder licensmodell GPL-3.0. Du kan läsa mer om denna licensmodell via den medföljande filen:
```sh
LICENSE (https://github.com/RegionHalland/region-halland-template-top-links-vardgivare/blob/master/LICENSE)
```


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-template-top-links-vardgivare.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-template-top-links-vardgivare.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-template-top-links-vardgivare": "1.0.0"
},
```


## Versionhistorik

### 1.2.0
- Uppdaterat information om licensmodell
- Bifogat fil med licensmodell

### 1.1.0
- Funktioner för att hämta ut innehåll

### 1.0.0
- Första version