using System;

public class ProgramaVogais
{
    public static void Main(string[] args)
    {
        string palavra;
        int contadorVogais = 0;

        // Solicita a palavra ao usuário
        Console.Write("Digite uma palavra: ");
        palavra = Console.ReadLine();

        // Laço de repetição 'for' para percorrer cada caractere da palavra
        for (int i = 0; i < palavra.Length; i++)
        {
            char letra = palavra[i]; // Pega a letra na posição 'i'

            // Estrutura de decisão 'if' para verificar se a letra é uma vogal
            // Verifica tanto maiúsculas quanto minúsculas.
            if (letra == 'a' || letra == 'e' || letra == 'i' || letra == 'o' || letra == 'u' ||
                letra == 'A' || letra == 'E' || letra == 'I' || letra == 'O' || letra == 'U')
            {
                contadorVogais++; // Incrementa o contador se for uma vogal
            }
        }

        // Imprime o resultado final
        Console.WriteLine($"\nA palavra \"{palavra}\" possui {contadorVogais} vogais.");
    }
}