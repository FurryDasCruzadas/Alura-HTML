# Alunos: João Camilo Mallmann , Deivid
# Turma: 4º Ano Manha

from cmath import pi
import numpy as np
import matplotlib.pyplot as plt
from pytransform3d import rotations as pr  # github

print('Vetor 1')
x1 = int(input('valor x1: '))
y1 = int(input('valor y1: '))
z1 = int(input('valor z1: '))

print('Vetor 2')
x2 = int(input('valor x2: '))
y2 = int(input('valor y2: '))
z2 = int(input('valor z2: '))
r2 = int(input('\nValor De Rotacão\n0º & 360º = 0 \n90º = 1 \n180º = 2 \n270º= 31\nr = '))

# ---Rotaçao---
# 0º   =  0
# 90º  =  pi/2
# 180º =  pi
# 270º =  3*pi/2
# 360º =  0
# ---x---

if r2 == 0:
    r2 = 0
elif r2 == 1:
    r2 = pi/2
elif r2 == 2:
    r2 = pi
elif r2 == 3:
    r2 = 3*pi/2


ax = pr.plot_basis(R=np.eye(3), ax_s=4, lw=3)  # ponto 1
axis = 0
angle = np.pi


p = np.array([x1, y1, z1])  # ponto 2
euler = [0, 0, 0]
#euler[axis] = angle
R = pr.active_matrix_from_intrinsic_euler_zyx(euler)
pr.plot_basis(ax, R, p, lw=3)


p = np.array([x2, y2, z2])  # ponto 3
euler = [0, 0, r2]  # Rotação
#euler[axis] = angle
R = pr.active_matrix_from_intrinsic_euler_xyz(euler)
pr.plot_basis(ax, R, p, lw=3)


plt.show()
