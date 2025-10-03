#include <stdio.h>

int main() {
    int idade;

    printf("Digite sua idade:\n");
    if (scanf("%d", &idade) != 1) {
        printf("Entrada inválida!\n");
        return 1;
    }

    if (idade < 18) {
        printf("Você é menor de idade!\n");
    } else {
        printf("Você é maior de idade!\n");
    }

    return 0;
}
