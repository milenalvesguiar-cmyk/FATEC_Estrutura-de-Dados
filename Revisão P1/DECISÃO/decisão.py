temperatura = 20 # Variável para teste

print("--- Verificador de Temperatura em Python ---")
print(f"Temperatura atual: {temperatura} graus Celsius\n")

if temperatura < 15:
    # Bloco para Frio
    print("Status: Frio (Abaixo de 15°C)")
elif temperatura <= 25: 
    # Bloco para Agradável: 15 <= temperatura <= 25
    print("Status: Agradavel (Entre 15°C e 25°C)")
else:
    # Bloco para Quente: Acima de 25
    print("Status: Quente (Acima de 25°C)")