>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>Tämä tiedosto on päivitettävä, jotta se vastaa [englanti](/README.md) README-tiedostoa.

![larajournali Filamentin hallintapaneelilla](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/larajournal/issues).

# larajournali Filamentin hallintapaneelilla

Tämä on [Laravel](https://laravel.com) blogin aloituspakettiprojekti [Filament](https://filamentphp.com) hallintapaneelin kanssa.

Tämän arkiston tavoitteena on esitellä hyviä [Laravel](https://laravel.com) kehityskäytäntöjä yksinkertaisella sovelluksella.

## Ominaisuudet

- 📚 Viestien luominen ja muokkaaminen
- 🥑 Luokat
- 🔥 Suosittuja viestejä
- 🎉 [Filamentille] rakennettu hallintapaneeli (https://filamentphp.com)

## Ominaisuuksien pyytäminen

Avaa [uusi numero](https://github.com/gomzyakov/larajournal/issues/new) pyytääksesi ominaisuutta (tai jos löydät virheen).

## Kuinka ylläpitää blogia paikallisesti?

Kloonaa projekti:

```bash
git clone git@github.com:gomzyakov/larajournal.git
```

Uskon, että sinulla on jo Docker asennettuna. Jos ei, tee se [Macissa](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) tai [Linux](https://docs.docker.com/desktop/install/linux-install/).

Rakenna `larajournal` -kuva seuraavalla komennolla:

```bash
docker compose build --no-cache
```

>Tämän komennon suorittaminen voi kestää muutaman minuutin.

Kun rakennus on valmis, voit ajaa ympäristöä taustatilassa seuraavasti:

```bash
docker compose up -d
```

Suoritamme nyt `composer install` asentaaksemme sovellusriippuvuudet:

```bash
docker compose exec app composer install
```

Kopioi ympäristöasetukset:

```bash
docker compose exec app cp .env.local .env
```

Aseta salausavain "artisan" Laravel -komentorivityökalulla:

```bash
docker compose exec app ./artisan key:generate --ansi
```

Siirrä DB ja siemen väärennetyt tiedot:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

Ja lisää Filamentin järjestelmänvalvojan käyttäjä:

```bash
docker compose exec app ./artisan make:filament-user
```

Ja avaa http://127.0.0.1:8000 suosikkiselaimessasi. Hyvää larajournalin käyttöä!

## Kuinka päästä konttiin?

Pääsy Docker-konttiin:

```bash
docker exec -ti larajournal-app bash
```

## Lisenssi

Tämä on avoimen lähdekoodin ohjelmisto, jonka käyttöoikeus on [MIT-lisenssi](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![GitHub-julkaisu](https://img.shields.io/github/release/gomzyakov/larajournal.svg)](https://github.com/gomzyakov/larajournal/releases/latest)
[![lisenssi](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/larajournal/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/larajournal/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ larajournali)
