stud={"name":"kaushal","age":20,"subject":"python","marks":90}

print("given Dictionory is=",stud)
print("Length OF Dictionary is=",len(stud))
print("keys of Dictionary is=",stud.keys())
print("values of Dictionary is=",stud.values())
print("Items of Dictinary is=",stud.items())
print("name=",stud.get("name"))
stud.update({"marks":99}),print("after Update",stud)
stud.pop("age"),print("After pop:-",stud)
stud.popitem(),print("After pop:-",stud)
stud.clear(),print("after Clear",stud)