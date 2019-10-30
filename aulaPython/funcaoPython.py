def imprimeFuncao(nomesHub,letraEntrada):
	for i in range(len(nomesHub)):
	    if not nomesHub[i].upper().startswith(letraEntrada.upper()):
	        print(nomesHub[i])