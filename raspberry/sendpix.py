#!/usr/bin/env python3
#-- coding: utf-8 --
import requests
import glob
import os

#Recherche du dernier fichier
lst = glob.glob('/home/pi/Desktop/pix/*') # * means all if need specific format then *.csv
fname = max(lst, key=os.path.getctime)

#Envoi du fichier vers le serveur
with open(fname, "rb") as f:
	s = requests.Session()
	r = s.post('https://[SERVEUR CIBLE]/saveme.php',
		data={'lacle':'[CLE SECRETE]'},
		files={'files':f})
	print(r.status_code)
    


