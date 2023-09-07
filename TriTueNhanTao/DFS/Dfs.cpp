#include<iostream>
using namespace std;

int a[26][26];
char start, finish, tempX, tempY;

void dfs(char start, char finish) {
	
}

int main() {
	freopen("input.txt", "r", stdin);
	
	cin >> start >> finish;
	for(int i = 0; i < 100; i++) {
		cin >> tempX >> tempY;
		a[tempX - 'A'][tempY - 'A'] = 1;
	}	 
	
	dfs(start, finish);
	
	return 0;
}
