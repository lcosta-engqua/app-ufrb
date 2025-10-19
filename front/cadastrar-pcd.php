<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main class="container">
    <div class="d-flex align-items-center justify-content-center vh-100">
      <div class="card card-pcd p-4">
        <div class="card-body">
          <div class="text-center mb-4">
            <h3 class="brand">App UFRB</h3>
            <p class="text-muted small"><strong>Cadastro do PCD</strong></p>
          </div>
          <form id="cadPcd" action="home.php"  method="post" novalidate>
            <div class="row g-3">
              <div class="col-12 col-md-4">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Seu nome" required>
                <div class="invalid-feedback">Por favor, insira seu nome.</div>
              </div>

              <div class="col-12 col-md-4">
                <label for="dtNastcimento" class="form-label">Data de nascimento</label>
                <input type="date" class="form-control" id="dtNastcimento" name="dtNastcimento" placeholder="dd/mm/yyyy" required>
                <div class="invalid-feedback">Por favor, insira um e-mail válido.</div>
              </div>

              <div class="col-12 col-md-4">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="seu@exemplo.com" required>
                <div class="invalid-feedback">Por favor, insira um e-mail válido.</div>
              </div>
              <div class="col-12 col-md-4">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="******" required>
                <div class="invalid-feedback">Por favor, insira um e-mail válido.</div>
              </div>

              <div class="col-12 col-md-6">
                <label for="tipoDeficiencia" class="form-label">Tipo de deficiência</label>
                <select class="form-select" id="tipoDeficiencia" name="tipoDeficiencia" required>
                  <option value="" selected disabled>Selecione o tipo de deficiência</option>
                  <option value="fisica">Física</option>
                  <option value="intelectual">Intelectual</option>
                  <option value="visual">Visual</option>
                  <option value="auditiva">Auditiva</option>
                  <option value="multipla">Múltipla</option>
                  <option value="nao-especificada">Não especificada</option>
                  <option value="nao-se-aplica">Não se aplica</option>
                </select>
                <div class="invalid-feedback">Por favor, selecione o tipo de deficiência.</div>
              </div>

              <div class="col-12 col-md-12">
                <label for="obs" class="form-label">OBS</label>
                <textarea class="form-control" id="obs" name="obs" rows="3" placeholder="" required></textarea>
                <div class="invalid-feedback">Por favor, insira uma observação válida.</div>
              </div>
              <div class="row mt-3">
                <div class="col-12 col-md-4 d-flex justify-content-center mx-auto">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </main>
  <!-- Bootstrap JS (opcional) e script pequeno para comportamento de UI -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>