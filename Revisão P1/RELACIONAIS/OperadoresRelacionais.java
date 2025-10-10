public class OperadoresRelacionais {
    public static void main(String[] args) {
        int X = 15;
        int Y = 10;

        System.out.println("--- Operadores Relacionais em Java ---");
        System.out.println("Valores: X = " + X + ", Y = " + Y + "\n");

        // Igual a (==)
        System.out.println("X == Y (15 == 10)? Resultado: " + (X == Y));

        // Diferente de (!=)
        System.out.println("X != Y (15 != 10)? Resultado: " + (X != Y));

        // Maior que (>)
        System.out.println("X > Y (15 > 10)? Resultado: " + (X > Y));

        // Menor que (<)
        System.out.println("X < Y (15 < 10)? Resultado: " + (X < Y));

        // Maior ou igual a (>=)
        System.out.println("X >= Y (15 >= 10)? Resultado: " + (X >= Y));
        
        // Menor ou igual a (<=)
        System.out.println("X <= Y (15 <= 10)? Resultado: " + (X <= Y));
    }
}