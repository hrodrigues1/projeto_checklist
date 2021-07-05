<?php include_once "../fachada.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/363bd6cb5f.js" crossorigin="anonymous"></script>

    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class = "topper">
            <img src="assets/img/logo1.png" class="img-fluid" alt="...">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"><i class="fas fa-bars"></i></button>

            <h5 class="display-5">Listas disponíveis :</h5>
        </div>
      
        <div class="list-group-item">
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Menu de Opções</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
            <div class="offcanvas-body">
              <div class="btn-group-vertical">
                <div class="d-grid gap-2">
				          <a href="checklist.php" button type="button" class="btn btn-outline-secondary">Criar Nova Lista</button></a>
                  <button type="button" class="btn btn-outline-secondary" href="checklist_view.php">Listas Disponíves</button>
                  <a href="help.php" button type="button" class="btn btn-outline-secondary">Sobre nós</button></a>
                  <button type="button" class="btn btn-outline-secondary">Sair</button>
                </div>
              </div>
            </div>
          </div>

          <?php
          
            // Inicia sessão 
            session_start();  
            $id_usuario = $_SESSION["id_usuario"];
            $dao = $factory->getChecklistDAO();
            $lista_checklist = $dao->busca_checklists_usuario_logado($id_usuario);

            foreach($lista_checklist as $checklist)
            {
              $nome = $checklist->getNome_checklist();

              echo "<div>";
              echo "<a href='#' class='list-group-item list-group-item-action list-group-item-primary'>$nome"; 
              echo "<button type='button' class='btn btn-outline-primary' style='margin: 0 15px'><i class='fas fa-pencil-alt'></i></button>";
              echo "<button type='button' class='btn btn-outline-danger'><i class='fas fa-trash-alt' style='margin: 0 15px'></i></button>"; 
              echo "</a>";
              echo "</div>";
            }
          
          ?>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>