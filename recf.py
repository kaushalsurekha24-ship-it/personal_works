def rec(x):
    f=1
    if(x==1):
        return 1
    f=x*rec(x-1)
    return f

no=int(input("Enter Your Number"))  
res=rec(no)  
print(res)