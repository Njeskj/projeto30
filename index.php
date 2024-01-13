<?php
include('inc/header.php');
include('inc/nav.php');
?>

    <div class="container-fluid">
        <div class="row">
      
          <!-- Navbar lateral esquerda -->
          <?php include('./inc/sidebar.php'); ?>


      <!-- Divisória sólida -->
      <div class="solid-divider"></div>


   <!-- Conteúdo principal -->
   <main id="principal" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <section>
        <h2>Principais Mecânicas do Jogo</h2>
        
        <section>
          <h2>Informações Gerais</h2>
          <div>
            <p>População: <span id="populacao">50</span></p>
          </div>
          <div>
            <p>Mensagens:</p>
            <ul id="mensagens">
              <!-- As mensagens importantes aparecerão aqui -->
            </ul>
          </div>
        </section>
      
        <section>
          <h3>Coleta de Recursos</h3>
          <p>
            Os jogadores devem coletar recursos essenciais para o desenvolvimento de sua civilização. Recursos incluem comida, madeira, ouro e pedra.
          </p>
          <div>
            <p>Recursos atuais:</p>
            <ul>
              <li>Comida: <span id="comida">100</span></li>
              <li>Madeira: <span id="madeira">50</span></li>
              <li>Ouro: <span id="ouro">30</span></li>
              <li>Pedra: <span id="pedra">20</span></li>
            </ul>
          </div>
          <button class="btn btn-primary" onclick="coletarRecursos()">Coletar Recursos</button>
        </section>
      
        <section>
          <h3>Construção de Edifícios</h3>
          <p>
            Os jogadores podem construir diversos tipos de edifícios, como casas para aumentar a população, quartéis para treinar tropas, minas para extrair recursos, entre outros.
          </p>
          <div>
            <p>Edifícios construídos:</p>
            <ul>
              <li>Casa: 3</li>
              <li>Quartel: 1</li>
              <li>Mina: 2</li>
            </ul>
          </div>
          <button class="btn btn-success" onclick="construirCasa()">Construir Casa</button>
          <button class="btn btn-success" onclick="construirQuartel()">Construir Quartel</button>
          <button class="btn btn-success" onclick="construirMina()">Construir Mina</button>
        </section>
      
        <section>
          <h3>Treinamento de Tropas</h3>
          <p>
            Para proteger sua civilização e expandir seu território, os jogadores podem treinar diferentes tipos de tropas, cada uma com suas habilidades e forças únicas.
          </p>
          <div>
            <p>Tropas treinadas:</p>
            <ul>
              <li>Soldado: 10</li>
              <li>Arqueiro: 5</li>
              <li>Cavaleiro: 2</li>
            </ul>
          </div>
          <button class="btn btn-warning" onclick="treinarSoldado()">Treinar Soldado</button>
          <button class="btn btn-warning" onclick="treinarArqueiro()">Treinar Arqueiro</button>
          <button class="btn btn-warning" onclick="treinarCavaleiro()">Treinar Cavaleiro</button>
        </section>

        <section>
          <h3>Sistema de Batalha</h3>
          <p>
            Os jogadores podem envolver suas tropas em batalhas para proteger seu território ou conquistar novos territórios. Simule uma batalha clicando no botão abaixo.
          </p>
          <button class="btn btn-danger" onclick="simularBatalha()">Simular Batalha</button>
        </section>
      
        <section>
          <h3>Pesquisa de Tecnologias</h3>
          <p>
            A pesquisa de tecnologias permite aos jogadores melhorar suas habilidades em diversas áreas, como agricultura para aumentar a produção de alimentos, metalurgia para melhores armas e armaduras, etc.
          </p>
          <div>
            <p>Tecnologias pesquisadas:</p>
            <ul>
              <li>Agricultura</li>
              <li>Metalurgia</li>
              <li>Táticas de Guerra</li>
            </ul>
          </div>
          <button class="btn btn-info" onclick="pesquisarAgricultura()">Pesquisar Agricultura</button>
          <button class="btn btn-info" onclick="pesquisarMetalurgia()">Pesquisar Metalurgia</button>
          <button class="btn btn-info" onclick="pesquisarTaticasGuerra()">Pesquisar Táticas de Guerra</button>
        </section>
      
        <!-- Adicione mais seções conforme necessário para outras mecânicas -->
      
      </section>

</main>
<!-- Fim do Conteúdo Principal -->

</div>

</div>

<?php
include('inc/footer.php');
include('inc/scripts.php');
include('inc/fim.php');
?>
