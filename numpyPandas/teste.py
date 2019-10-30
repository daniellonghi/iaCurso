import numpy as np
newArray = np.zeros([10000,10000])
np.savetxt("testeAula", newArray)

loadFile = np.loadtxt("testeAula")

print(loadFile)

#!ls
