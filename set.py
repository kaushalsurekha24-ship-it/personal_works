a = {1,2,3,4} 
b = {3,4,5,6}
print("Set A:-",a), print("Set B:-",b)

print("union:-",a|b)
print("diffrence:-",a-b)
print("Intersection:-",a&b)
a.add(7),print("after adding 7:-",a)
a.remove(7),print("after removing 7:-",a)
b.discard(6),print("after Discarding",b)
print("length of the set",len(a))
a.update([7,8]),print("after multiple value",a)
c={1,2},print("subset:-",a.issubset(a))



