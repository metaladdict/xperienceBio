# xperienceBio

:test_tube: Suivi d'expérience par timelapse
Initialement, nous avons suivi la germination de lentilles blondes :seedling:

## Principe
Rythme de prise de vue définit par la crontab. Assemblage des prise de vue sous forme de vidéo avec mencoder, selon intervalle définit par la crontab.
Envoi des fichiers sur serveur (avec création de miniature par PHP)

## Nécessite:
- 1 Raspberry Pi
- 1 Pi Camera
- 8 LED (avec de quoi les brancher)
- 1 serveur PHP

## Installation
- réparatir les fichiers sur le Raspberry et le serveur PHP
- remplacer la valeur [CLE SECRETE] dans les script
- remplacer la valeur [SERVEUR CIBLE] dans les script
- ajouter les script à la crontab

:eyes: Plus d'info: [metalmonkey.eu](https://www.metalmonkey.eu/2021/03/27/suivi-de-la-germination-des-lentilles/)

## Crontab
:pager: J'ai choisi de procéder selon ce planning 
```
*/10 * * * * /home/pi/Desktop/led.py
1,11,21,31,41,51 * * * * /home/pi/Desktop/sendpix.py
1 */1 * * * /home/pi/Desktop/govideo.sh
```