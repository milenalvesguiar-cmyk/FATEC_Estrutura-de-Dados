using System;

class Program {
    static void Main() {
        double nota;

        Console.Write("Digite a nota do aluno: ");
        nota = Convert.ToDouble(Console.ReadLine());

        if (nota <= 5) {
            Console.WriteLine("Reprovado");
        } else if (nota <= 6) {
            Console.WriteLine("Recuperação");
        } else {
            Console.WriteLine("Aprovado");
        }
    }
}
