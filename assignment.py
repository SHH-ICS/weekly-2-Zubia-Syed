import math
diameter = float(input("Enter diameter: "))  
if diameter <= 0:
  print("reenter diameter number must be greater than 0")
else:
  def calc(d):
    r=d/2
    print(r)
    area= math.pi*r**2
    circumference = 2 * math.pi * r


    print(area)
    print(circumference)
calc(diameter)

