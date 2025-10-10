#include <stdio.h>

int main() {
    int a = 20;
    int b = 7;
    int resultado;

    printf("Numeros: a = %d, b = %d\n", a, b);

    // Adição
    resultado = a + b;
    printf("Adicao (a + b): %d\n", resultado);

    // Subtração
    resultado = a - b;
    printf("Subtracao (a - b): %d\n", resultado);

    // Multiplicação
    resultado = a * b;
    printf("Multiplicacao (a * b): %d\n", resultado);

    // Divisão (Divisão inteira, o resultado é a parte inteira)
    resultado = a / b;
    printf("Divisao Inteira (a / b): %d\n", resultado);

    // Módulo (Resto da divisão)
    resultado = a % b;
    printf("Modulo (a %% b): %d\n", resultado);

    return 0;
}