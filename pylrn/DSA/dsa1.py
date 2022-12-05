row = 5
col = 5
def pattern1() :
    for i in range(row) :
        for j in range(col) :
            print('*',end='')
        print('\r')
# pattern1()

def pattern2() :
    length = row-1
    lengthcol = col-1
    for i in range(row) :
        for j in range(col) :
            if i == 0 or i == length :
                print('*',end='')
            if i > 0 and i < length :
                if j == 0 or j == lengthcol :
                    print('*',end='')
                else :
                    print(' ',end='')
        print('\r')
# pattern2()

def pattern3() :   #mine code which will take memory
    colinner = col
    for i in range(row) :
        for j in range(colinner) :
            print('*',end='')
        colinner -= 1
        print('\r')
# pattern3()
def pattern3() :
    for i in range(row,0,-1) :
        for j in range(i) :
            print('*',end='')
        print('\r')
# pattern3()

def pattern4() :
    for i in range(row) :
        for j in range(row) :
            if j >= row-i-1 :
                print('*',end='')
            else : 
                print(' ',end='')
        print('\r')
# pattern4()

def pattern5() :
    for i in range(row) :
        for j in range(i+1) :
            print(i+1,end='')
        print('\r')
# pattern5()

def pattern6() :
    cnt = 1
    for i in range(row) :
        for j in range(i+1) :
            print(cnt,end=' ')
            cnt += 1
        print('\r')
# pattern6()

def pattern7():
    for i in range(2*row):
        for j in range(2*row):
            if i <= row:
                if j <= i or j >= 2*row-i-1:
                    print('*',end='')
                else:
                    print(' ',end='')
            else:
                if j >= i or j <= 2*row-i-1:
                    print('*',end='')
                else:
                    print(' ',end='')
        print('\r')
# pattern7()

def pattern8():
    for i in range(row,0,-1):
        for j in range(i) :
            print(j+1,end=' ')
        print('\r')
# pattern8()

def pattern9(): # min code 
    k = 1
    for i in range(row):
        for j in range(row):
            # if k <= row * row:
            if j <= i:
                if k%2 != 0:
                    print(1,end=' ')
                else:
                    print(0,end=' ')
            k += 1 
        print('\r')

def pattern9():
    for i in range(row):
        for j in range(i+1):
            if (i+j)%2 != 0 :
                print('0',end=' ')
            else:
                print('1',end=' ')
        print('\r')
# pattern9()

def pattern10():
    for i in range(row):
        for j in range(2*row):
            if j >row-i-1 and j < 2*row -i:
                print('*',end=' ')
            else:
                print(' ',end=' ')
        print('\r')
# pattern10()

def pattern11():
    for i in range(row):
        num = 1
        for j in range(2*row):
            # num = 1
            if (i+j)%2 != 0:
                print(' ',end=' ')
            else:
                if j >=row-i-1 and j< row+i:
                    print(num,end=' ')
                    num+=1
                else:
                    print(' ',end=' ')
        print('\r')
# pattern11()
# row=3
def pattern12():
    for i in range(row):
        for j in range(2*row-1):
            if j<row :
                if j < row - i - 1:
                    print(' ',end='')
                else :
                    print(row-j,end='')
            else :
                if j >= row + i :
                    print(' ',end='')
                else :
                    print(j-row+2,end='')
        print('\r')
# pattern12()

def pattern13():
    k = 2*row-1
    for i in range(2*row):
        for j in range(2*row-1):
            if i < row:
                if j>=row-i-1 and j<row+i:
                    print('*',end=' ')
                else:
                    print(' ',end=' ')
            else:
                if j>=i-row+1 and j<k-1:
                    print('*',end=' ')
                else:
                    print(' ',end=' ')
        if i >=row:
            k-=1
        print('\r')
# pattern13()

def pattern14():
    for i in range(2*row):
        if i<row:
            for j in range(2*row):
                if j >=row-i-1 and j<row+i:
                    print('*',end=' ')
                else:
                    print(' ',end=' ')
        else:
            for j in range(2*row):
                if j >=i-row+1 and j<2*row-(i-row)-2:
                    print('*',end=' ')
                else:
                    print(' ',end=' ')
        print('\r')
# pattern14()

def pattern15():
    dist = 10
    # x = ''
    x = []
    while dist > 0 :
        if dist%2 == 0 :
            x.append(0)
            # x = x + '0'
        if dist%2 != 0 :
            # x = x + '1'
            # dist = dist/2
            x.append(1)
        dist = int(dist/2)
    print(x)

# pattern15()

def pattern16():
    for i in range(1,row+1,1):
        for j in range(1,2*row,1):
            if j <= row :
                if j == row-i+1 :
                    print(j,end='')
                else :
                    print(' ',end='')
            if j>row :
                if j == row+i-1 :
                    print(j,end='')
                else :
                    print(' ',end='')    
        print('\r')

pattern16()



