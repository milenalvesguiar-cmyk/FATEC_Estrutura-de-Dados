public class VerificadorTemperatura {
    public static void main(String[] args) {
        int temperatura = 5; // Variável para teste

        System.out.println("--- Verificador de Temperatura em Java ---");
        System.out.println("Temperatura atual: " + temperatura + " graus Celsius\n");

        if (temperatura < 15) {
            System.out.println("Status: Frio (Abaixo de 15°C)");
        } 
        else if (temperatura <= 25) { // Agradável: 15 <= temperatura <= 25
            System.out.println("Status: Agradavel (Entre 15°C e 25°C)");
        } 
        else { // Quente: Acima de 25
            System.out.println("Status: Quente (Acima de 25°C)");
        }
    }
}