#include <stdio.h>

int main() {
    int soma = 0;
    int limite = 10;

    printf("--- Soma de 1 a 10 em C (usando for) ---\n");
    
    // O laço 'for' executa 10 vezes (de i=1 até i=10)
    for (int i = 1; i <= limite; i++) {
        soma = soma + i; // Acumula o valor de 'i' na variável 'soma'
    }

    printf("A soma dos numeros de 1 a %d e: %d\n", limite, soma);
    
    return 0;
}