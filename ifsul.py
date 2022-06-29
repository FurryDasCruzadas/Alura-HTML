import matplotlib.pyplot as plt
from mpl_toolkits.mplot3d import Axes3D

fig = plt.figure(figsize=(4,4))

ax = fig.add_subplot(111, projection='3d')

ax.set_xlabel("X")
ax.set_ylabel("Y")
ax.set_zlabel("Z")


VecStart_start = [0,0,0]
VecEnd_x = [1,0,0]
VecEnd_y = [0,1,0]
VecEnd_z = [0,0,1]
for i in range(3):
  ax.plot([VecStart_start[i], VecEnd_x[i]], [VecStart_start[i],VecEnd_y[i]],zs=[VecStart_start[i],VecEnd_z[i]])

VecStart_start = [3,0,3]
VecEnd_x = [6,4,0]
VecEnd_y = [4,6,0]
VecEnd_z = [4,4,0]

for i in range(3):
  ax.plot([VecStart_start[i], VecEnd_x[i]], [VecStart_start[i],VecEnd_y[i]],zs=[VecStart_start[i],VecEnd_z[i]] color=red)


plt.show()


plt.close()