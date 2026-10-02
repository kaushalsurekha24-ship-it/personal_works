no=int(input("Enter your Number"))
count=0
i=1;
while(i<no):
    if(no%i==0):
        count+=1
    i+=1
if(count==0 or count==1):
    print("Number is Prime:-",no)
else:
    print("Number is Not Prime",no)   