#Liste des images dans un fichier txt
ls /home/pi/Desktop/pix/*.jpg > /home/pi/Desktop/stills.txt

#Création de la vidéo à partir de la liste des images
mencoder -nosound -of lavf -ovc x264 -x264encopts preset=ultrafast:threads=auto -vf scale=1920:1080 -o /home/pi/Desktop/tmlps.mp4 -mf type=jpeg:fps=24 mf://@/home/pi/Desktop/stills.txt

#Script python envoyant la vidéo en ligne
/home/pi/Desktop/sendvid.py