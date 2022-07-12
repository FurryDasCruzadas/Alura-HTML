from cmath import pi
import numpy as np
import matplotlib.pyplot as plt
from pytransform3d import rotations as pr


ax = pr.plot_basis(R=np.eye(3), ax_s=4, lw=3) #ponto 1
axis = 0
angle = np.pi


p = np.array([2,0,0])#ponto 2
euler = [0, 0, 0]
#euler[axis] = angle
R = pr.active_matrix_from_intrinsic_euler_zyx(euler)
pr.plot_basis(ax, R, p, lw=3)


p = np.array([2,3,0])#ponto 3
euler = [0, 0, pi]
#euler[axis] = angle
R = pr.active_matrix_from_intrinsic_euler_xyz(euler)
pr.plot_basis(ax, R, p,lw=3)



plt.show()