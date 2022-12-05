def getno(n) :
    i = 0
    # j = n
    while(i<n) :
        # print('t')
        # if()
        j = n-1
        while(j>=i):
            print('t ',end='')
            j-=1
        print('\r')
        i+=1
# getno(3)

def pyramid(n) :
    x = 2*n
    for i in range(n) :
        for j in range(x) :
            if(j<n-i-1) :
                print(' ',end='')
            elif(j>n+i-1) :
                print(' ',end='')
            else :
                print('t',end='')
        print('\r')
# pyramid(8)
def invpyramid(n):
    x = 2*n
    for i in range(n) :
        for j in range(x) :
            if(j<n-i-1) :
                print(' ',end='')
            elif(j>n+i-1) :
                print(' ',end='')
            else :
                print('t',end='')
        print('\r')

# invpyramid(8)

def invpyramidn(n):
    x = 2*n
    for i in range(n) :
        t=0
        z+=1
        for j in range(x) :
            if(j<n-i-1) :
                # t+=1
                print(' ',end='')
            elif(j>n+i-1) :
                # t+=1
                print(' ',end='')
            # elif(j == n-1):
            #     # z=1
            #     print(1,end='')
            else :
                t+=n-z-1
                print(t,end='')
        print('\r')

invpyramidn(3)