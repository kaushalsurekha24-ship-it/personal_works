a=int(input("enter First number"))
b=int(input("enter Secound number"))

while b!=0:
    a,b=b, a%b
    print("Gcd of Given Numbers is=",a)