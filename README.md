#xperienceBio

🌱 Suivi d'expérience bio par timelapse

##Nécessite:
- 1 Raspberry Pi
- 1 Pi Camera
- 8 LED (avec de quoi les brancher)
- 1 serveur PHP

##Principe
Rythme de prise de vue définit par la crontab. Assemblage des prise de vue sous forme de vidéo avec mencoder, selon intervalle définit par la crontab.
Envoi des fichiers sur serveur (avec création de miniature par PHP)

##Installation
- réparatir les fichiers sur le Raspberry et le serveur PHP
- remplacer la valeur [CLE SECRETE] dans les script
- remplacer la valeur [SERVEUR CIBLE] dans les script
- ajouter les script à la crontab

👀 Plus d'info: https://www.metalmonkey.eu/2021/03/27/suivi-de-la-germination-des-lentilles/

