#include<bits/stdc++.h>
using namespace std;


string start, finish;
class Dfs {
int soLuong, countPath;
string tempX, tempY;
map<string, vector<string>> a;
vector<string> dsL;
map<string, string> father;
stack<string> path;
map<string, int> trongSo;
public:
	
	void input(){
		
		for(int i = 0; i < 100; i++) {
			cin >> tempX; // nhap dinh
			int x,s;// x: trong so dinh, s: so dinh ke.
			cin>>x>>s;
			trongSo[tempX] = x;
			for(int i=0;i<s;i++){
				cin>>tempY;
				a[tempX].push_back(tempY);
				father[tempY] = tempY;
			}
			father[tempX] = tempX;
		}	 
		
	}
	void dfs(string start, string finish) {
		stack<string> st;
		st.push(start);
		dsL.push_back(start);	
		cout << "Phat trien TT |  Trang thai ke\t| Danh sach L" << endl;
		cout << "----------------------------------------------" << endl;
		while(!st.empty()) {
			string temp = st.top();	
			cout << temp << "-" << trongSo[temp] << setw(14) << "|";
			dsL.pop_back();
			st.pop();		
			if(temp == finish) {
				cout << "\n----------------------------------------------" << endl;
				cout << "\nKet qua cua duong di DFS tu " << start << " -> " << finish <<  " la:\n";			
				while(father[finish] != finish) {
					path.push(finish);
					finish = father[finish];
				}			
				cout<<start;
				while(!path.empty()){
					cout<<" -> "<<path.top();
					path.pop();
				}
				return;
			}
			int count = 0;
			
			map<int, string> dsGiamDan;
			
			for(string test : a[temp]) {
				dsGiamDan[-trongSo[test]] = test;
			}
			
			for(auto next : dsGiamDan) {
				cout << next.second << "-" << -next.first << " ";
			}
			
			
			cout << "\t\t";
			
			for(auto next : dsGiamDan) {
				st.push(next.second);
				cout << left << next.second << "-" << -next.first << " " << setw(2);
				dsL.push_back(next.second);
				count++;
				
				father[next.second] = temp;
			}
			for(int i = count; i <= 5; i++) {
				cout << right << setw(2) << " ";
			}
			cout << "\t|";
			//in ds ke
			for(int i= dsL.size()-1 ;i>=0;i--){
				cout<<dsL[i] << "-" << trongSo[dsL[i]] <<" ";
			}
			cout << endl;
		}
		cout << "\n----------------------------------------------" << endl;
		cout << "\nKhong tim thay duong di tu " << start << " -> " << finish;
	}
};




int main() {
	freopen("input.txt", "r", stdin);
//	freopen("output.txt", "w", stdout);
	cin >> start >> finish;
	Dfs d;
	d.input();
	d.dfs(start, finish);
	
	return 0;
}
