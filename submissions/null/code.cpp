#include <iostream>
using namespace std;
int sum(int a,int b);
int main()
{
	int a,b;
	cin>>a>>b;
	cout<<"Sum is="<<sum(a,b);
	return 0;
}
int sum(int a,int b){
 cout<<"hi"; 
return a+b;
}