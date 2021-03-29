#!/usr/bin/env python3
#-- coding: utf-8 --
from time import sleep
import time
from picamera import PiCamera
import requests
import RPi.GPIO as GPIO

#Définit le mode de numérotation (Board)
GPIO.setmode(GPIO.BOARD) 
GPIO.setwarnings(False)

#Définition des broches des LED
LedList = [40,38,36,32,37,35,33,31]

#Initialisation de la caméra et contrôles GPIO
camera = PiCamera()
camera.resolution = (1920,1080)
for l in LedList:
	GPIO.setup(l, GPIO.OUT)

#Allumage des LED
for l in LedList:
	GPIO.output(l, GPIO.HIGH)

#Prise de vue après une attente de 2s (focus éventuel)
camera.start_preview(fullscreen=False, window = (50,50,192,108))
sleep(2)
tmp = (time.strftime("%m-%d-%H-%M-%S"))
fname = '/home/pi/Desktop/pix/pix_'+tmp+'.jpg'
camera.capture(fname)
camera.stop_preview()
sleep(2)

#Envoi du fichier vers le serveur
with open(fname, "rb") as f:
	s = requests.Session()
	r = s.post('https://[SERVEUR CIBLE]/saveme.php',
		data={'lacle':'[CLE SECRETE]'},
		files={'files':f})
	print(r.status_code)
    
#On éteint les LED
for l in LedList:
	GPIO.output(l, GPIO.LOW)