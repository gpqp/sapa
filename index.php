<?php
require __DIR__ . '/includes/auth.php';

$currentUser = sapa_current_user();
if ($currentUser) {
    header('Location: dashboard.php');
    exit;
}

$title = 'SAPA — Sistema de Alerta Preditivo por Agentes';
$activeNav = 'home';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<?php include __DIR__ . '/includes/head.php'; ?>
</head>
<body>
<?php include __DIR__ . '/includes/header.php'; ?>

  <main id="conteudo-principal">
    <section class="hero">
      <div class="hero__signal" aria-hidden="true"></div>

      <div class="hero__copy">
        <span class="hero__eyebrow">Sistema de Alerta Preditivo por Agentes</span>
        <h1>Um agente observa seu desempenho antes que ele vire motivo para desistir.</h1>
        <p>
          O SAPA acompanha notas e frequência em segundo plano e avisa cedo,
          com o motivo exato de cada alerta — nunca só uma cor. Construído
          para ser usado por qualquer estudante, incluindo quem usa leitor
          de tela, precisa de alto contraste, se distrai com movimento na
          tela ou lê melhor com mais espaçamento.
        </p>
        <div class="hero__actions">
          <a href="cadastro.php" class="btn btn--primary">Criar minha conta</a>
          <a href="login.php" class="btn btn--ghost">Já tenho conta</a>
        </div>
      </div>

      <div class="hero__panel" aria-label="Exemplo de painel de acompanhamento">
        <h3>Exemplo de painel</h3>
        <div class="hero__panel-stat">
          <span>Disciplinas cursando</span>
          <strong>5</strong>
        </div>
        <div class="hero__panel-stat">
          <span>Em atenção</span>
          <strong>1</strong>
        </div>
        <div class="hero__panel-stat">
          <span>Frequência média</span>
          <strong>91%</strong>
        </div>
      </div>
    </section>

    <section class="feature-grid" aria-label="Recursos da plataforma">
      <div class="card">
        <h3>Alertas com motivo, não só cor</h3>
        <p>Cada alerta explica exatamente por que apareceu — nota, frequência ou os dois.</p>
      </div>
      <div class="card">
        <h3>Acessível de verdade</h3>
        <p>Navegação por teclado, leitura em voz alta, alto contraste, fonte ajustável e modo foco, em qualquer página.</p>
      </div>
      <div class="card">
        <h3>Rede de apoio à vista</h3>
        <p>Monitorias, apoio psicopedagógico e auxílios financeiros indicados no momento em que fazem diferença.</p>
      </div>
    </section>

    <section class="faq-cta" data-a11y-block aria-label="Dúvidas frequentes">
      <div class="faq-cta__text">
        <h2>Perguntas?</h2>
        <p>Acesse nosso FAQ para obter as respostas!</p>
      </div>
      <a href="faq.php" class="btn btn--ghost">Ver FAQ</a>
    </section>

    <section class="partners" data-a11y-block aria-label="Parceiros institucionais">
      <span class="partners__label">Parceiros institucionais</span>
      <div class="partners__row">
        <img src="img/parceiros/ic-ufal.png" alt="Instituto de Computação — UFAL" />
        <img src="img/parceiros/nees-15-anos.png" alt="NEES — 15 anos" />
        <img src="img/parceiros/escola-defesa-civil.png" alt="Escola de Defesa Civil — SEDC Jaboatão dos Guararapes" />
        <img src="img/parceiros/cmf-jaboatao.png" alt="CMF — Centro Municipal de Formação, Jaboatão dos Guararapes" />
      </div>
    </section>
  </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
