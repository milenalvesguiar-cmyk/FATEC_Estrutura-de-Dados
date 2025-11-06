# ============================================
# PROGRAMA: Fila de Pedidos - Lanchonete
# AUTORA: Layla Costa
# DATA: 03/11/2025
# ============================================

from collections import deque
import time

pedidos = deque()

def mostrar_menu():
    print("\n--- LANCHONETE POWERBURG ---")
    print("1 - Novo pedido")
    print("2 - Preparar pedido")
    print("3 - Mostrar pedidos em espera")
    print("4 - Sair")

while True:
    mostrar_menu()
    escolha = input("Escolha uma opção: ")

    if escolha == "1":
        cliente = input("Nome do cliente: ")
        pedido = input("Pedido: ")
        pedidos.append((cliente, pedido))
        print(f"Pedido de {cliente} ({pedido}) adicionado à fila.")

    elif escolha == "2":
        if pedidos:
            cliente, pedido = pedidos.popleft()
            print(f"\nPreparando pedido de {cliente}...")
            time.sleep(1)
            print(f"✅ Pedido '{pedido}' pronto para {cliente}!")
        else:
            print("Nenhum pedido na fila.")

    elif escolha == "3":
        if pedidos:
            print("\nPedidos na fila:")
            for i, (cliente, pedido) in enumerate(pedidos, start=1):
                print(f"{i}. {cliente} - {pedido}")
        else:
            print("Fila vazia no momento.")

    elif escolha == "4":
        print("Encerrando o sistema da lanchonete...")
        break

    else:
        print("Opção inválida! Tente novamente.")
