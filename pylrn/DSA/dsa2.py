arr = [1,2,3,4,5,6,7]
def dsa1(arr):
    # print(len(arr))
    temp = 0
    for i in range(int(len(arr)/2)) :
        temp = arr[i]
        arr[i] = arr[len(arr)-1-i]
        arr[len(arr)-1-i] = temp
        # for j in range(len(arr)-1,1,-1):
        # print(arr[len(arr)-1-i])
            # break
    print(arr)

def dsa2(arr):
    length = len(arr)
    print(arr[int(length/2)])

# dsa1(arr)

def dsa3(re):
    rev = re
    last = 0
    while rev > 0 :
        last = last*10 + rev%10
        rev = int(rev/10)
    print(last)

def dsa4(val) :
    suma = 0
    last = 0
    # valu = val
    while val > 0 :
        last = val%10
        suma = suma + last*last*last
        val = int(val/10)
    print(suma)

def dsa5(v1,v2) :
    cnt = 0 
    # n = int((v1+v2)/2)
    for i in range(v1,v2+1):
        n = 2
        while n < int(i/2)+2 :
            if i%n == 0 :
                break
            elif n == int(i/2)+1 and i%n != 0:
                cnt +=1
            n +=1          
    print(cnt)

# dsa5(3,9)

def linear_seraching(num,arr) :
    for i in range(len(arr)) :
        if arr[i] == num :
            print(i)
            break
        if i == len(arr)-1 :
            print('not available')

# linear_seraching(43,[1,2,4,3,45,56,23])

def swapping(x,y):
    # t=x
    # x = int((x+y - (x-y))/2)
    # y = int((t+y + (t-y))/2)
    x = x+y
    y = x-y
    x = x-y
# swapping(4,5)

def selection_sorting(arr) :
    for i in range(0,len(arr)-1):
        # break
        for j in range(i+1,len(arr)):
            if arr[i] > arr[j] :
                # swapping(arr[i],arr[j])
                arr[i] = arr[i]+arr[j]
                arr[j] = arr[i]-arr[j]
                arr[i] = arr[i]-arr[j]
    # print(arr)
    return arr    

# print(selection_sorting([1,2,4,3,45,56,23]))
def binary_searching(x,arr):
    arr = selection_sorting(arr)
    

