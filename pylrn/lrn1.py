

#fibonacci series

'''

x=0

y=1

z=0

i=1

n=int(input('please enter no.'))

while i<=n :

    print(x)

    z=x+y

    x=y

    y=z

    

    i+=1

'''



#Prime Number Series

'''

i=1

n= int(input('enter no.'))

while i<=n :

    z=int(i/2)+1

    x=2

    if i == 1 :

        print(i)



    while x <= z :

        if i % x == 0 :

            if x == i :

                print(i)

            else : 

                break



        else :

            if x == z :

                print(i)

        x+=1        

    i+=1

'''



#Palindrome number

    #creating function to get the no. of digits in entered no.

def fdigits(n) :

    d=0

    while n>0 :

        n= int(n/10)

        d+=1

    return d



def reversenum(n) :

    arr = []

    r=0

    x = fdigits(n)

    y= n

    # print(x)

    while y>0 :

        if int(x)<2:

            print('invalid no.')

        else: 

            dig = y % 10   #access every single in a given number

            arr.append(dig)

            r= int(r * 10 + dig)

            y= int(y/10)

    # if r == n :

    #     print('palindrome')

    # else: 

    #     print('not palinderome')

    arr.reverse()

    # print(r)

    return arr





# factorial

def fact(n) :

    x=1

    while n>1 :

        x = int(x * n)

        n -= 1

    print(x)





#armstrong number

def armstrong(n) :

    arr=reversenum(n)

    # print(type(arr))

    sum = 0

    l = len(arr)

    # print(l)

    for i in range(0,l) :

        sum = sum + arr[i]*arr[i]*arr[i]

    if sum == n :

        print('armstrong')

    else :

        print('not armstrong')

    return sum



# swaping with and without 3rd variable

def swap(x,y) :

    x = x+y

    y= x-y

    x= x-y

    # temp = x

    # x= y 

    # y= temp





# Selection Sorting

def selectsort(arr) :

    l = len(arr)

    for i in range(0,l-1) :

        # min = arr[i]

        for j in range(i+1,l) :

            if arr[i] > arr[j] :

                # my swap function is not working here

                temp = arr[i]

                arr[i]= arr[j]

                arr[j]= temp

                # swap(arr[i],arr[j]) 

    return arr



# arr= [34,56,76,43,55,12,32]

# print(selectsort(arr))



# insertion sorting

def insertsort(arr) :

    l = len(arr)

    for i in range(1,l) :

        # print(i)

        k = arr[i]

        j =i-1

        while j >= 0 :

            if k < arr[j] :

                temp= arr[j]

                arr[j]= k

                arr[j+1]=temp

                # print(arr)

            j-=1

    return arr



# print(insertsort(arr))





#Linear searching

def linearsearch(n) :

    cnt = 0

    ps = []

    l = len(arr)

    for i in range(l) :

        if arr[i] == n :

            ps.append(i)

            cnt+=1

    return cnt, ps

# print(linearsearch(n))





# n = int(input('enter num.'))

# Binery Searching

arr= [34,33,56,76,65,43,56,21,34,32,65]

def binarysearch(n) :

    l = len(arr)

    arr1=[]

    arr1 = insertsort(arr)

    print(arr1)

    ps = []

    cnt = 0

    x = l

    a = 0 

    b = l

    while x >= 0 :

        l = int((a + b)/2)

        # print(l)

        if arr1[l] == n :

            cnt += 1

            ps = l

            arr1.remove(arr1[l])

        elif arr1[l] > n :

            b = l

        else :

            a = l

        x -=1

    print('no. occurs', cnt ,'times at the position' ,ps)



# binarysearch(n)





# String related functions

    # Number of a character in a string



def findchar(char, c) :

    print(char)

    l = len(char)

    pos = []

    cnt = 0

    for i in range(0,l) :

        if char[i] == c :

            pos.append(i)

            cnt += 1

    print(pos, cnt)

# c = input('enter the char: ')

# findchar(str,c)





    # a string made of the first, middle and last character

def fml (char) :

    l = len(char)

    m = int(l/2)

    # print('fml of the given string is: ',char[0]+char[m]+char[l-1])

    return char[0]+char[m]+char[l-1]

# fml('str')





    # fml of two strings

def fml2 (s1,s2) :

    s1 = fml(s1)

    s2 = fml(s2)

    # print(s1,s2)

    concat = ''

    for i in range(0,3) :

        # break

        concat = concat + s1[i] + s2[i]

    return concat

# print(fml2(s1,s2))





    # Lowercase Uppercase Character example

        #use the ascii relation 

def lucase(ch) :

    l = len(ch)

    for i in range(l) :

        ts = ord(ch[i])

        # if 

        print(ts)

# lucase(s1)





# 1st and last of two strings

def flstr(s1,s2) :

    l1 = len(s1)

    l2 = len(s2)

    j = l2-1

    str = ''

    for i in range(0,l1) :

        while j >= 0 :

            x = l2-1 -j

            if x == i :

                str= str + s1[i]+s2[j]

                break

            j -= 1

    print(str)

# flstr(s1,s2)





#String characters balance Test

def baltest (s1,s2) :

    l1 = len(s1)

    l2 = len(s2)

    j = 0

    cnt = 1

    for i in range(0,l2) :

        # print(cnt)

        j = 0

        cnt = 0

        while j < l1 :

            if s2[i] == s1[j] :

                # print(j)

                cnt += 1

                break

            # elif j == l1-1 and cnt == 0 and i ==l2-1 :

            #     print('false')

            # elif j == l1-1 and cnt == 1 and i ==l2-1 :

            #     print('true')

            j += 1

        # print(cnt)

        if cnt == 0 :

            print(i)

            print('false')

            break

    if cnt != 0 :

        print('true')   

# baltest(s1,s2)





# Find all occurrences of a substring in a given string by ignoring the case

def stroccur (s1,s2) :

    l1 = len(s1)

    l2 = len(s2)

    cnt = 0

    # c = 0

    ps = []

    # mine try

    # for i in range(0,l1) :

    #     for j in range(0,l2) :

    #         if s2[j] != s1[i] and c == 0 :

    #             # print(s2[j])

    #             break

    #         elif s2[j] == s1[i] and j < l2-1 :

    #             c += 1

    #             break

    #         elif s2[j] == s1[i] and j == l2-1 :

    #             cnt += 1

    #             c = 0

    #             ps.append(i)

    for i in range(0,l1-l2) :

        for j in range(0,l2) :

            if s1[i+j] != s2[j] :

                break

            if j == l2-1 :

                cnt += 1

                ps.append(i)

    # print(cnt)

    # print(ps)
    return [cnt,ps]



# stroccur(s1,s2)



# Write a program to count occurrences of all characters within a string

def charoccur(ch) :

    l = len(ch)

    cnt = 0

    ch_occur = {}

    for i in range(l) :

        cnt = 0

        for j in range(l) :

            if ch[i] == ch[j] :

                cnt += 1

                ch_occur[ch[i]] = cnt

    print(ch_occur)


# charoccur('Apple')


# Reverse a given string
def reverse(str) :
    l = len(str)-1
    rev = ''
    while l >= 0 :
        rev += str[l]
        l -= 1
    print(rev)
# reverse('Apple') 


# Find the last position of a given substring   
def chloccur(s1,s2) :
    l1 = len(s1) 
    l2 = len(s2)
    cnt = 0
    ps = 0
    for i in range(l1) :
       for j in range(l2) :
           if s1[i+j] != s2[j] :
               break
           elif j == l2 - 1 :
               cnt += 1
               ps = i
    print(cnt)
    print(ps)
# chloccur(s1,s2)


# Number of words occur in a sentence
def word_occur(str):
    l = len(str)
    word = ''
    occur = {}
    for i in range(l):
        if str[i]=='.':
            continue
        elif str[i] != ' ':
            word += str[i]
        elif str[i] == ' ':
            occur_no = stroccur(str,word)
            occur[word] = occur_no[0]
            word = ''
    print(occur)        
# word_occur(s1)


# remove special character
def rmspchar(str):
    l = len(str)
    nstr = ''
    for i in range(l):
        if str[i] == ' ' or ord(str[i])>ord('A') and ord(str[i])<ord('Z') or ord(str[i])>ord('a') and ord(str[i])<ord('z') or ord(str[i])>ord('0') and ord(str[i])<ord('9'):
            nstr += str[i]
        # else :
        #     continue
    return nstr
    # print(nstr)
# rmspchar(s1)


#
# s2 =input('enter str2: ')
# s1 =input('enter str1: ')

# function to get the unique value from an array or string
# def uniquearr(arr) :
#     l = len(arr)
#     arrinp = []
#     for i in range(l):
#         l2= len(arrinp)
#         # print(l2)
#         if l2==0:
#             arrinp.append(arr[i])
#         else:
#             for j in range(l2) :
#                 if arr[i] == arrinp[j]:
#                     break
#                 elif j==l2-1 :
#                     arrinp.append(arr[i])
#     print(arrinp)

# testing code without append function
def uniquearr(arr) :
    l = len(arr)
    arrinp = []
    for i in range(l):
        l2= len(arrinp)
        # print(l2)
        if l2==0:
            arrinp=arrinp+[arr[0]]
        else:
            for j in range(l2) :
                if arr[i] == arrinp[j]:
                    break
                elif j==l2-1 :
                    arrinp=arrinp+[arr[i]]
    print(arrinp)

# uniquearr('appleapple')


# position of occurance of a string a string
def indx(srch, strng) :
    ps = 0
    c = 0
    cntstr = 0
    for i in range(len(srch)) :
        for j in range(ps,len(strng)) :
            if srch[i] == strng[j] :
                c+=1
                ps = j+1
                cn+=1
                break
            elif c == 0 :
                cn = 0
            else :
                cn = 0
                break
        # if i == len(srch)-1 and cn == 0 :
        #     print('no match')
        # elif 
    if cn == 0 :
        print('no match')
    else :
        cntstr += 1
        print(ps-len(srch))

# indx('le','this apple')


# no. of occurance of string in a string

def strtimes(srch, strng) :
    ps = []
    cnt = 0 
    for i in range(len(strng)) :
        for j in range(len(srch)) :
            if strng[i+j] != srch[j]:
                break
            elif j == len(srch)-1 :
                ps.append(i)
                cnt +=1
    print(ps,cnt)   
# strtimes('le','le john le apple')

def mxstr (s1,s2) :
    i = 0
    z = len(s2) -1
    str = ''
    while(i < len(s1)):
        str += s1[i]+s2[z-i]
        i+=1
    print(str)




