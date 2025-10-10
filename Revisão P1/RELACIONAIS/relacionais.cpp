#include <iostream>
#include <iomanip> // Para std::boolalpha

int main() {
    int X = 15;
    int Y = 10;

    std::cout << "--- Operadores Relacionais em C++ ---\n";
    std::cout << "Valores: X = " << X << ", Y = " << Y << "\n\n";

    // O manipulador std::boolalpha faz com que o resultado seja True/False
    std::cout << std::boolalpha; 
    
    // Igual a (==)
    std::cout << "X == Y (15 == 10)? Resultado: " << (X == Y) << "\n";

    // Diferente de (!=)
    std::cout << "X != Y (15 != 10)? Resultado: " << (X != Y) << "\n";

    // Maior que (>)
    std::cout << "X > Y (15 > 10)? Resultado: " << (X > Y) << "\n";

    // Menor que (<)
    std::cout << "X < Y (15 < 10)? Resultado: " << (X < Y) << "\n";

    // Maior ou igual a (>=)
    std::cout << "X >= Y (15 >= 10)? Resultado: " << (X >= Y) << "\n";
    
    // Menor ou igual a (<=)
    std::cout << "X <= Y (15 <= 10)? Resultado: " << (X <= Y) << "\n";

    return 0;
}