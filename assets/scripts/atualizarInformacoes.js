 // Exemplo de função para atualizar dinamicamente as informações na interface do usuário
 function atualizarInformacoes() {
    // Esses valores seriam obtidos do backend do jogo
    const estadoJogo = {
      recursos: {
        comida: 120,
        madeira: 60,
        ouro: 40,
        pedra: 25,
      },
      populacao: 65,
      mensagens: ["Nova construção concluída!", "Ataque inimigo detectado!"],
    };

    // Atualizar os elementos HTML com os novos valores
    document.getElementById("comida").textContent = estadoJogo.recursos.comida;
    document.getElementById("madeira").textContent = estadoJogo.recursos.madeira;
    document.getElementById("ouro").textContent = estadoJogo.recursos.ouro;
    document.getElementById("pedra").textContent = estadoJogo.recursos.pedra;
    document.getElementById("populacao").textContent = estadoJogo.populacao;

    const mensagensUl = document.getElementById("mensagens");
    // Limpar mensagens anteriores
    mensagensUl.innerHTML = "";
    // Adicionar novas mensagens
    estadoJogo.mensagens.forEach((mensagem) => {
      const li = document.createElement("li");
      li.textContent = mensagem;
      mensagensUl.appendChild(li);
    });
  }

  // Chamada inicial para exibir informações iniciais
  atualizarInformacoes();