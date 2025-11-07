# sanduiche_pilha.py
# Simulação de montagem de sanduíche usando estrutura de dados PILHA (LIFO)

def menu():
    print("\n=== MONTAGEM DO SEU SANDUÍCHE ===")
    print("1 - Adicionar ingrediente")
    print("2 - Remover ingrediente (do topo)")
    print("3 - Ver último ingrediente adicionado")
    print("4 - Mostrar sanduíche completo")
    print("5 - Finalizar pedido")

def main():
    pilha = []  # lista representando a pilha de ingredientes

    while True:
        menu()
        opcao = input("Escolha uma opção: ")

        # 1 - Adicionar ingrediente
        if opcao == '1':
            ingrediente = input("Digite o nome do ingrediente a adicionar: ").strip()
            if ingrediente:
                pilha.append(ingrediente)
                print(f"✅ Ingrediente '{ingrediente}' adicionado ao topo do sanduíche!")
            else:
                print("⚠️ Nome de ingrediente inválido!")

        # 2 - Remover ingrediente (do topo)
        elif opcao == '2':
            if pilha:
                removido = pilha.pop()
                print(f"❌ Ingrediente removido: '{removido}' (do topo).")
            else:
                print("⚠️ O sanduíche está vazio! Nenhum ingrediente para remover.")

        # 3 - Ver último ingrediente adicionado
        elif opcao == '3':
            if pilha:
                print(f"🔝 Último ingrediente adicionado: {pilha[-1]}")
            else:
                print("⚠️ O sanduíche está vazio!")

        # 4 - Mostrar sanduíche completo
        elif opcao == '4':
            if pilha:
                print("\n🍞 Seu sanduíche até agora:")
                for i, ingrediente in enumerate(pilha):
                    if i == 0:
                        print(f"{ingrediente} (base)")
                    else:
                        print(f"{ingrediente}")
                print("⬆️ (Topo do sanduíche)")
            else:
                print("⚠️ O sanduíche ainda não tem ingredientes!")

        # 5 - Finalizar pedido
        elif opcao == '5':
            print("\n🥪 Pedido finalizado! Bom apetite!")
            break

        else:
            print("❌ Opção inválida! Escolha entre 1 e 5.")

# Executa o programa
if __name__ == "__main__":
    main()
