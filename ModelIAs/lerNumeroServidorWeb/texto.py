#!/usr/bin/python3
try:
	import sys
	from PIL import Image
	from pytesseract import image_to_string
except ImportError:
   textRead = True

filename = sys.argv[1]

img = Image.open(filename).convert('LA')

textRead = image_to_string(img)
textRead = textRead.encode('ascii', 'ignore').decode('ascii')

print(textRead)

#f = open("texto.txt", "a")
#print(textRead, file=f)
#f.close()