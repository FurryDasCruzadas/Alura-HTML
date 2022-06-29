import numpy as np
import matplotlib.pyplot as plot
from mpl_toolkits import mplot3d

axes=plot.axes(projection="3d")

x_data=np.arange(0,50,0.1)
y_data=np.arange(0,50,0.1)
z_data=np.sin(x_data) * np.cos(y_data)

axes.plot(x_data,y_data,z_data)

plot.show()