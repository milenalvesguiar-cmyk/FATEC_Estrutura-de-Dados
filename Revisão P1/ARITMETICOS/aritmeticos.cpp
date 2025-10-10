#include <iostream>

int main() {
    int a = 20;
    int b = 7;
    int resultado;

    std::cout << "Numeros: a = " << a << ", b = " << b << std::endl;

    // Adição
    resultado = a + b;
    std::cout << "Adicao (a + b): " << resultado << std::endl;

    // Subtração
    resultado = a - b;
    std::cout << "Subtracao (a - b): " << resultado << std::endl;

    // Multiplicação
    resultado = a * b;
    std::cout << "Multiplicacao (a * b): " << resultado << std::endl;

    // Divisão (Divisão inteira)
    resultado = a / b;
    std::cout << "Divisao Inteira (a / b): " << resultado << std::endl;

    // Módulo (Resto da divisão)
    resultado = a % b;
    std::cout << "Modulo (a % b): " << resultado << std::endl;

    return 0;
}