#include <iostream>

int main() {
    int soma = 0;
    int limite = 10;

    std::cout << "--- Soma de 1 a 10 em C++ (usando for) ---\n";

    // O laço 'for' executa 10 vezes
    for (int i = 1; i <= limite; i++) {
        soma += i; // Forma curta de 'soma = soma + i;'
    }

    std::cout << "A soma dos numeros de 1 a " << limite << " e: " << soma << "\n";
    
    return 0;
}