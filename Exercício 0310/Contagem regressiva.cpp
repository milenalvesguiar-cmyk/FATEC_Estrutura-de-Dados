#include <iostream>

int main() {
    int numero;

    // Solicita o número inteiro positivo ao usuário
    std::cout << "Digite um número inteiro positivo para iniciar a contagem regressiva: ";
    std::cin >> numero;

    std::cout << "\n--- Contagem Regressiva ---\n";

    // Laço de repetição 'while' para continuar enquanto o número for maior ou igual a 0
    while (numero >= 0) {
        // Imprime o número atual da contagem
        std::cout << numero << "\n";

        // Decrementa o valor do número
        numero--;
    }

    std::cout << "Fim da contagem!\n";

    return 0;
}