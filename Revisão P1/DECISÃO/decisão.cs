using System;

public class Program
{
    public static void Main(string[] args)
    {
        int temperatura = 15; // Variável para teste

        Console.WriteLine("--- Verificador de Temperatura em C# ---");
        Console.WriteLine($"Temperatura atual: {temperatura} graus Celsius\n");

        if (temperatura < 15)
        {
            Console.WriteLine("Status: Frio (Abaixo de 15°C)");
        }
        else if (temperatura <= 25) // Agradável: 15 <= temperatura <= 25
        {
            Console.WriteLine("Status: Agradavel (Entre 15°C e 25°C)");
        }
        else // Quente: Acima de 25
        {
            Console.WriteLine("Status: Quente (Acima de 25°C)");
        }
    }
}