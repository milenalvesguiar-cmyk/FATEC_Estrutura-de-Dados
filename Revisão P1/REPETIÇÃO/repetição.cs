using System;

public class Program
{
    public static void Main(string[] args)
    {
        int soma = 0;
        int limite = 10;

        Console.WriteLine("--- Soma de 1 a 10 em C# (usando for) ---");

        // O laço 'for' executa 10 vezes
        for (int i = 1; i <= limite; i++)
        {
            soma += i;
        }

        Console.WriteLine($"A soma dos numeros de 1 a {limite} e: {soma}");
    }
}