# pilha_bolo.py
# Tema: Pilha - Bolo 🎂
# Autor: [Seu Nome]
# Estrutura de Dados: PILHA (LIFO - Last In, First Out)
 
def mostrar_menu():
    print("\n=== 🎂 MONTE SEU BOLO ===")
    print("1 - Adicionar camada/ingrediente")
    print("2 - Remover camada (do topo)")
    print("3 - Ver última camada adicionada")
    print("4 - Mostrar bolo completo")
    print("5 - Finalizar montagem")
 
def main():
    pilha_bolo = []
 
    while True:
        mostrar_menu()
        opcao = input("Escolha uma opção: ")
 
        if opcao == '1':
            ingrediente = input("Digite o nome da camada ou ingrediente: ")
            pilha_bolo.append(ingrediente)
            print(f"🧁 Camada '{ingrediente}' adicionada ao topo do bolo!")
 
        elif opcao == '2':
            if len(pilha_bolo) > 0:
                removido = pilha_bolo.pop()
                print(f"❌ Camada '{removido}' foi removida do topo do bolo.")
            else:
                print("⚠️ O bolo ainda não tem camadas para remover!")
 
        elif opcao == '3':
            if len(pilha_bolo) > 0:
                topo = pilha_bolo[-1]
                print(f"👀 A última camada adicionada foi: '{topo}'.")
            else:
                print("🍰 O bolo está vazio! Nenhuma camada adicionada ainda.")
 
        elif opcao == '4':
            if len(pilha_bolo) > 0:
                print("\n🍰 Seu bolo está assim (de baixo para o topo):")
                print("🧁 Prato de bolo")
                for camada in pilha_bolo:
                    print(f"➡️ {camada}")
                print("🍒 Topo do bolo")
            else:
                print("😕 O bolo ainda não tem camadas!")
 
        elif opcao == '5':
            print("\n✅ Montagem finalizada! Seu bolo está pronto! 🎉")
            if len(pilha_bolo) > 0:
                print("\n🎂 BOLO FINAL:")
                print("🧁 Prato de bolo")
                for camada in pilha_bolo:
                    print(f"➡️ {camada}")
                print("🍒 Topo do bolo")
            print("\nObrigado por usar o montador de bolo! 👩‍🍳")
            break
 
        else:
            print("❌ Opção inválida! Tente novamente.")
 
if __name__ == "__main__":
    main()