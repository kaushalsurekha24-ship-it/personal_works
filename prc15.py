no = input("Enter Your Numbers: ")
no = no.split(",")
my_list = []

for n in no:
    my_list.append(n.strip())

my_tuple = tuple(my_list)
print("list:", my_list)
print("tuple:", my_tuple)