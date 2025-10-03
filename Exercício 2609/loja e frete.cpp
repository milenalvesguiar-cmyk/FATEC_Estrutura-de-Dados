#include <iostream>
using namespace std;

int main() {
    float valor;

    cout << "Digite o valor da sua compra: ";
    cin >> valor;

    if (valor >= 100) {
        cout << "Frete Grátis" << endl;
    } else {
        valor += 15;
        cout << "Valor total com frete: R$ " << valor << endl;
    }

    return 0;
}

