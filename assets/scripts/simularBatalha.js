  // ... (funções anteriores) ...

  function simularBatalha() {
    // Lógica de simulação de batalha (pode ser substituída pela sua lógica real)
    // Aqui, podemos chamar o backend PHP para processar a simulação

    // Exemplo de requisição AJAX para o backend PHP (substitua pelo seu método preferido)
    // Aqui, usaremos o método fetch para simplicidade
    fetch('inc/db.php?action=simularBatalha', { method: 'POST' })
      .then(response => response.json())
      .then(data => {
        // Exibir resultado da batalha nas mensagens
        const mensagensUl = document.getElementById("mensagens");
        const li = document.createElement("li");
        li.textContent = `Batalha: ${data.resultado}`;
        mensagensUl.appendChild(li);

        // Atualizar informações após a batalha
        atualizarInformacoes();
      })
      .catch(error => console.error('Erro:', error));
  }