#include <iostream>

int main() {
    int temperatura = 28; // Variável para teste
    
    std::cout << "--- Verificador de Temperatura em C++ ---\n";
    std::cout << "Temperatura atual: " << temperatura << " graus Celsius\n\n";

    if (temperatura < 15) {
        std::cout << "Status: Frio (Abaixo de 15°C)\n";
    } 
    else if (temperatura <= 25) { // Agradável: 15 <= temperatura <= 25
        std::cout << "Status: Agradavel (Entre 15°C e 25°C)\n";
    } 
    else { // Quente: Acima de 25
        std::cout << "Status: Quente (Acima de 25°C)\n";
    }

    return 0;
}