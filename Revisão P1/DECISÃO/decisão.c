#include <stdio.h>

int main() {
    int temperatura = 18; // Variável para teste
    
    printf("--- Verificador de Temperatura em C ---\n");
    printf("Temperatura atual: %d graus Celsius\n\n", temperatura);

    if (temperatura < 15) {
        printf("Status: Frio (Abaixo de 15°C)\n");
    } 
    else if (temperatura <= 25) { // Agradável: 15 <= temperatura <= 25
        printf("Status: Agradavel (Entre 15°C e 25°C)\n");
    } 
    else { // Quente: Acima de 25
        printf("Status: Quente (Acima de 25°C)\n");
    }

    return 0;
}