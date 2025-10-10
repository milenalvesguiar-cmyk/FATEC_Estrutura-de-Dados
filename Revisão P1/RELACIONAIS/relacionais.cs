using System;

public class Program
{
    public static void Main(string[] args)
    {
        int X = 15;
        int Y = 10;

        Console.WriteLine("--- Operadores Relacionais em C# ---");
        Console.WriteLine($"Valores: X = {X}, Y = {Y}\n");

        // Igual a (==)
        Console.WriteLine($"X == Y (15 == 10)? Resultado: {X == Y}");

        // Diferente de (!=)
        Console.WriteLine($"X != Y (15 != 10)? Resultado: {X != Y}");

        // Maior que (>)
        Console.WriteLine($"X > Y (15 > 10)? Resultado: {X > Y}");

        // Menor que (<)
        Console.WriteLine($"X < Y (15 < 10)? Resultado: {X < Y}");

        // Maior ou igual a (>=)
        Console.WriteLine($"X >= Y (15 >= 10)? Resultado: {X >= Y}");
        
        // Menor ou igual a (<=)
        Console.WriteLine($"X <= Y (15 <= 10)? Resultado: {X <= Y}");
    }
}