public class OperadoresAritmeticos {
    public static void main(String[] args) {
        int a = 20;
        int b = 7;
        int resultado;

        System.out.println("Numeros: a = " + a + ", b = " + b);

        // Adição
        resultado = a + b;
        System.out.println("Adicao (a + b): " + resultado);

        // Subtração
        resultado = a - b;
        System.out.println("Subtracao (a - b): " + resultado);

        // Multiplicação
        resultado = a * b;
        System.out.println("Multiplicacao (a * b): " + resultado);

        // Divisão (Divisão inteira)
        resultado = a / b;
        System.out.println("Divisao Inteira (a / b): " + resultado);

        // Módulo (Resto da divisão)
        resultado = a % b;
        System.out.println("Modulo (a % b): " + resultado);
    }
}