#include<iostream>
#include"mydb.h"
using namespace std;
int main()
{
    MyDB db; 
    //连接数据库
    db.initDB("localhost","root","","p2p");
    //将用户信息添加到数据库
    db.exeSQL("INSERT banks values(1,1,'zhanghuaming',2,'2019-02-26 17:57:53','2019-02-26 17:57:53');");
    //将所有用户信息读出，并输出。
    db.exeSQL("SELECT * from banks;");
    return 0;
}