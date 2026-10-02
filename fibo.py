no=int(input("Enter Your Name:-"))
fno=0
sno=1
i=1
while(no>i):
    sum=fno+sno
    print(sum)
    fno=sno
    sno=sum
    i+=1