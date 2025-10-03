import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        String codigo;

        System.out.print("Digite o código de acesso: ");
        codigo = sc.nextLine();

        if (codigo.equals("Admin123")) {
            System.out.println("✅ Bem-vindo, Administrador!");
        } else if (codigo.equals("User123")) {
            System.out.println("✅ Bem-vindo, Usuário!");
        } else {
            System.out.println("❌ Código incorreto");
        }

        sc.close();
    }
}
