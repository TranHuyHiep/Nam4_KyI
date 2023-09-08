#include<bits/stdc++.h>
using namespace std;

int a[26][26], soLuong, countPath;
char start, finish, tempX, tempY;
char dsL[10005], father[26], path[10005];

void initFather() {
	for(int i = 0; i < 26; i++) {
		father[i] = '.';
	}
}

void dfs(char start, char finish) {
	initFather();
	stack<char> st;
	st.push(start);
	soLuong++;
	
	cout << "Phat trien TT |  Trang thai ke  | Danh sach L" << endl;
	cout << "----------------------------------------------" << endl;
	while(!st.empty()) {
		char temp = st.top();	
		cout << temp << setw(14) << "|";
		soLuong--;
		st.pop();
		
		if(temp == finish) {
			cout << "\n----------------------------------------------" << endl;
			cout << "\nKet qua cua duong di DFS la:\n";

			while(father[finish - 'A'] != '.') {
				path[countPath++] = finish;
				finish = father[finish - 'A'];
			}
			
			cout << start;
			
			for(int i = countPath - 1; i >= 0; i--) {
				cout << " -> " << path[i];
			}
			return;
		}
		
		int count = 0;
		for(int i = 0; i < 26; i++) {
			if(a[temp - 'A'][i] == 1) {
				char next = (char) (i + 'A');
				st.push(next);
				cout << next << " ";
				dsL[soLuong++] = next;
				count++;
				
				if(father[next - 'A'] == '.') {
					father[next - 'A'] = temp;
				}
			}
		}
		for(int i = count; i <= 5; i++) {
			cout << "  ";
		}
		
		cout << "\t\t|";
		
		for(int i = soLuong - 1; i >= 0; i--) {
			cout << dsL[i] << " ";
		}
		cout << endl;
	}
}

int main() {
	freopen("input.txt", "r", stdin);
	freopen("output.txt", "w", stdout);
	cin >> start >> finish;
	for(int i = 0; i < 100; i++) {
		cin >> tempX >> tempY;
		a[tempX - 'A'][tempY - 'A'] = 1;
	}	 
	
	dfs(start, finish);
	
	return 0;
}
