no=int(input("enter Your number:-"))
temp=no
rev=0
while(no>0):

    rem=no%10
    rev=rev*10+rem
    no=no//10
if(temp==rev):
    print("Number is Palindrome",temp)    
else:
     print("Number is not Palindrome",temp)    