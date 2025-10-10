#include <stdio.h>

int main() {
    int X = 32;
    int Y = 17;
    
    printf("--- Operadores Relacionais em C ---\n");
    printf("Valores: X = %d, Y = %d\n\n", X, Y);

    // Igual a (==)
    printf("X == Y (32 == 17)? Resultado: %d\n", X == Y);

    // Diferente de (!=)
    printf("X != Y (32 != 17)? Resultado: %d\n", X != Y);

    // Maior que (>)
    printf("X > Y (32 > 17)? Resultado: %d\n", X > Y);

    // Menor que (<)
    printf("X < Y (32 < 17)? Resultado: %d\n", X < Y);

    // Maior ou igual a (>=)
    printf("X >= Y (32 >= 17)? Resultado: %d\n", X >= Y);
    
    // Menor ou igual a (<=)
    printf("X <= Y (32 <= 17)? Resultado: %d\n", X <= Y);

    return 0;
}