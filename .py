import matplotlib.pyplot as plt
from mpl_toolkits.mplot3d import Axes3D

fig = plt.figure(figsize=(6,6))

ax = fig.add_subplot(111, projection='3d')

ax.set_xlabel("X")
ax.set_ylabel("Y")
ax.set_zlabel("Z")

VecStart_start = [0,0,0,0]
VecEnd_x = [1,0,0,0]
VecEnd_y = [0,1,0,0]
VecEnd_z = [0,0,1,0]
for i in range(4):
  ax.plot([VecStart_start[i], VecEnd_x[i]], [VecStart_start[i],VecEnd_y[i]],[VecStart_start[i],VecEnd_z[i]])


VecStart_startx = [3,3,3,0]
VecStart_starty = [0,0,0,0]
VecStart_startz = [0,0,0,0]

VecEnd_x1 = [VecStart_startx[0]+1,VecStart_startx[1],VecStart_startx[2],VecStart_startx[3]]
VecEnd_y1 = [VecStart_starty[0],VecStart_starty[1]+1,VecStart_starty[2],VecStart_starty[3]]
VecEnd_z1 = [VecStart_startz[0],VecStart_startz[1],VecStart_startz[2]+1,VecStart_startz[3]]
for i in range(4):
  ax.plot([VecStart_startx[i], VecEnd_x1[i]], [VecStart_starty[i],VecEnd_y1[i]],[VecStart_startz[i],VecEnd_z1[i]])

plt.show()