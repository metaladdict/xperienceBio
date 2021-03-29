#!/usr/bin/env python3
#-- coding: utf-8 --
import requests

with open("/home/pi/Desktop/tmlps.mp4", "rb") as f:
	s = requests.Session()
	r = s.post('https://[SERVEUR CIBLE]/savevi.php',
		data={'lacle':'[CLE SECRETE]'},
		files={'files':f}
	)
	print(r.status_code)
