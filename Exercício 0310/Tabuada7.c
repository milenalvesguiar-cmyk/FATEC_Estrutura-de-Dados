#include <stdio.h>

int main() {
    int numero;
    int i; // Variável para o laço de repetição (sequência de 1 a 10)
    int resultado;

    // Solicita o número ao usuário
    printf("Digite um número para ver a tabuada: ");
    scanf("%d", &numero);

    printf("\n--- Tabuada de %d ---\n", numero);

    // Laço de repetição 'for' para multiplicar o número de 1 a 10
    for (i = 1; i <= 10; i++) {
        resultado = numero * i;
        // Imprime a multiplicação no formato: número x i = resultado
        printf("%d x %d = %d\n", numero, i, resultado);
    }

    return 0;
}