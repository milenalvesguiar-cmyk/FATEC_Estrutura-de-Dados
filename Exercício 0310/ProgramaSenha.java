import java.util.Scanner;

public class ProgramaSenha {

    public static void main(String[] args) {
        // Define a senha correta (constante)
        final String SENHA_CORRETA = "1234";
        String senhaDigitada = ""; // Variável para armazenar a entrada do usuário

        // Cria um objeto Scanner para ler a entrada do usuário
        Scanner scanner = new Scanner(System.in);

        System.out.println("--- Verificação de Senha ---");

        // Laço de repetição 'while'. Continua enquanto a senha digitada for diferente da correta.
        // O método 'equals()' é usado para comparar Strings em Java.
        while (!senhaDigitada.equals(SENHA_CORRETA)) {
            // Se não for a primeira tentativa (ou seja, a senha estava incorreta)
            if (!senhaDigitada.isEmpty()) {
                System.out.println("❌ Senha incorreta!");
            }

            // Solicita a senha
            System.out.print("Digite a senha: ");
            senhaDigitada = scanner.nextLine();
        }

        // Quando o loop 'while' é encerrado, significa que a senha correta foi digitada
        System.out.println("✅ Senha correta!");

        // Fecha o Scanner
        scanner.close();
    }
}