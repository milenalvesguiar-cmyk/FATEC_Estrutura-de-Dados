# ============================================
# PROGRAMA: Fila de Atendimento (FIFO)
# AUTORA: Layla Costa
# DATA: 03/11/2025
# ============================================

from collections import deque

def menu():
    print("\n--- MENU DE ATENDIMENTO ---")
    print("1 - Adicionar pessoa à fila")
    print("2 - Atender pessoa")
    print("3 - Mostrar fila")
    print("4 - Sair")

fila = deque()

while True:
    menu()
    opcao = input("Escolha uma opção: ")

    if opcao == "1":
        nome = input("Digite o nome da pessoa: ")
        fila.append(nome)
        print(f"{nome} foi adicionado(a) à fila.")

    elif opcao == "2":
        if fila:
            atendido = fila.popleft()
            print(f"{atendido} foi atendido(a).")
        else:
            print("A fila está vazia! Ninguém para atender.")

    elif opcao == "3":
        if fila:
            print("\nFila atual:")
            for i, pessoa in enumerate(fila, start=1):
                print(f"{i}. {pessoa}")
        else:
            print("Nenhuma pessoa na fila no momento.")

    elif opcao == "4":
        print("Encerrando o sistema de atendimento...")
        break

    else:
        print("Opção inválida! Tente novamente.")
