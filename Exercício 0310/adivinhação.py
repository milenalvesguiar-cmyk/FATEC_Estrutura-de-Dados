import random

# 1. Escolhe um número aleatório entre 1 e 100
numero_secreto = random.randint(1, 100)
tentativas = 0
palpite = -1  # Inicializa com um valor que garanta a entrada no loop 'while'

print("--- Jogo da Adivinhação ---")
print("Tente adivinhar o número secreto entre 1 e 100.")

# 2. Laço de repetição 'while' para continuar o jogo até acertar
while palpite != numero_secreto:
    try:
        # Pede o palpite
        palpite = int(input("Digite o seu palpite: "))
        tentativas += 1

        # 3. Estrutura de decisão 'if/elif/else' para dar dicas
        if palpite < 1 or palpite > 100:
            print("🚨 Seu palpite deve estar entre 1 e 100. Tente novamente.")
        elif palpite < numero_secreto: # Usa operador relacional '<' (menor que)
            print("⬆️  Muito baixo! Tente um número maior.")
        elif palpite > numero_secreto: # Usa operador relacional '>' (maior que)
            print("⬇️  Muito alto! Tente um número menor.")
            
    except ValueError:
        print("❌ Entrada inválida. Por favor, digite um número inteiro.")
        
# 4. Saída do loop: o palpite é igual ao número secreto
print(f"\n🎉 Parabéns! Você acertou o número secreto ({numero_secreto})!")
print(f"Você precisou de {tentativas} tentativas.")