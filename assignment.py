diameter=(input)
if diameter <= 0: 
  print("reenter diameter number must be greater than 0")
elif diameter > 0:
  def calc(d):
    r=d/2
    print(r)
    area= math.pi*r**2
    circumference=2*math.pi*2
    print(circumference)
    print(area)
