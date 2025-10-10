public class Repeticao {
    public static void main(String[] args) {
        int soma = 0;
        int limite = 10;

        System.out.println("--- Soma de 1 a 10 em Java (usando for) ---");

        // O laço 'for' executa 10 vezes
        for (int i = 1; i <= limite; i++) {
            soma += i;
        }

        System.out.println("A soma dos numeros de 1 a " + limite + " e: " + soma);
    }
}