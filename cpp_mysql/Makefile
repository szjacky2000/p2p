all : some
some : some.o MyDataBase.o
	g++ -o some some.o MyDataBase.o -l mysqlclient
MyDataBase.o : MyDataBase.cpp
	g++ -std=c++11 -c MyDataBase.cpp
some.o : some.cpp
	g++ -std=c++11 -c some.cpp
clean:
	rm *.o