using System;

public class Program
{
    public static void Main(string[] args)
    {
        int a = 20;
        int b = 7;
        int resultado;

        Console.WriteLine("Numeros: a = " + a + ", b = " + b);

        // Adição
        resultado = a + b;
        Console.WriteLine("Adicao (a + b): " + resultado);

        // Subtração
        resultado = a - b;
        Console.WriteLine("Subtracao (a - b): " + resultado);

        // Multiplicação
        resultado = a * b;
        Console.WriteLine("Multiplicacao (a * b): " + resultado);

        // Divisão (Divisão inteira)
        resultado = a / b;
        Console.WriteLine("Divisao Inteira (a / b): " + resultado);

        // Módulo (Resto da divisão)
        resultado = a % b;
        Console.WriteLine("Modulo (a % b): " + resultado);
    }
}