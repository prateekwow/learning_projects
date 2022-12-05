
def inplist():
    l = int(input('enter limit: '))
    lst = []
    lsinp = ''
    i =0
    while i<l :
        lsinp = input('enter char: ')
        lst.append(lsinp)        
        i += 1
    return lst
# inplist(l,lst,lsinp)


# remove selected list item
def rmitem(list,list2):
    lst = []
    for i in list :
        for j in list2 :
            if i==j:
                break
            elif i!=j and list2.index(j)!=len(list2)-1:
                continue
            elif i!=j and list2.index(j)==len(list2)-1:
                lst.append(i)
    return lst
# rmitem(list,list2)


# 
list = inplist()
list2 = inplist()