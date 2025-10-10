soma = 0
limite = 10

print("--- Soma de 1 a 10 em Python (usando for) ---")

# O laço 'for' itera sobre a sequência de números 1, 2, ..., 10
# range(1, 11) -> Começa em 1 (inclusivo) e vai até 11 (exclusivo)
for i in range(1, limite + 1):
    soma += i

print(f"A soma dos numeros de 1 a {limite} e: {soma}")