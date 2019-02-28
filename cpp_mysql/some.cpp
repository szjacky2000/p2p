#include "MyDataBase.h"
#include <vector>
using namespace std;

int main(int argc, char const *argv[])
{
	MyDataBase mdb;
	mdb.connect("localhost", "root", "");
	mdb.usedb("p2p");

	vector<vector<string>> ret = mdb.selectitem("loans", "*");
	for (auto temp: ret) {
		for (auto &str: temp)
			cout << str << " ";
		cout << endl;
	}

	mdb.disconnect();
	return 0;
}