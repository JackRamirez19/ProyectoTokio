using System;

namespace HolaMundo
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("¡Hola, mundo!");
        }
    }
}
using System;

class Program
{
    static void Main()
    {
        while (true)
        {
            Console.Clear();
            Console.WriteLine("=== CALCULADORA BÁSICA ===");
            Console.Write("Ingrese el primer número: ");
            double num1 = Convert.ToDouble(Console.ReadLine());

            Console.Write("Ingrese el operador (+, -, *, /): ");
            string oper = Console.ReadLine();

            Console.Write("Ingrese el segundo número: ");
            double num2 = Convert.ToDouble(Console.ReadLine());

            double resultado = 0;
            bool valido = true;

            switch (oper)
            {
                case "+":
                    resultado = num1 + num2;
                    break;
                case "-":
                    resultado = num1 - num2;
                    break;
                case "*":
                    resultado = num1 * num2;
                    break;
                case "/":
                    if (num2 == 0)
                    {
                        Console.WriteLine("⚠️ No se puede dividir entre cero.");
                        valido = false;
                    }
                    else
                    {
                        resultado = num1 / num2;
                    }
                    break;
                default:
                    Console.WriteLine("❌ Operador no válido.");
                    valido = false;
                    break;
            }

            if (valido)
                Console.WriteLine($"✅ Resultado: {resultado}");

            Console.WriteLine("\n¿Deseas hacer otro cálculo? (s/n): ");
            string continuar = Console.ReadLine().ToLower();
            if (continuar != "s") break;
        }

        Console.WriteLine("Gracias por usar la calculadora 😄");
    }
}
