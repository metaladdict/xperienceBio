# :test_tube: xperienceBio 

Suivi d'expérience par timelapse
:seedling: Initialement créé pour le suivi de la germination de lentilles blondes 

## :bulb: Principe
Rythme de prise de vue définit par la crontab. Assemblage des prise de vue sous forme de vidéo avec mencoder, selon intervalle définit par la crontab.
:floppy_disk: Envoi des fichiers sur serveur (avec création de miniature par PHP)

## :bookmark_tabs: Nécessite:
- 1 Raspberry Pi
- 1 Pi Camera
- 8 LED (avec de quoi les brancher)
- 1 serveur PHP
- des lego :bricks:

## :construction_worker: Installation
- réparatir les fichiers sur le Raspberry et le serveur PHP
- remplacer la valeur [CLE SECRETE] dans les script
- remplacer la valeur [SERVEUR CIBLE] dans les script
- ajouter les script à la crontab

:eyes: Plus d'info: [metalmonkey.eu](https://www.metalmonkey.eu/2021/03/27/suivi-de-la-germination-des-lentilles/)

## :pager: Crontab
J'ai choisi de procéder selon ce planning 
```
*/10 * * * * /home/pi/Desktop/led.py
1,11,21,31,41,51 * * * * /home/pi/Desktop/sendpix.py
1 */1 * * * /home/pi/Desktop/govideo.sh
```