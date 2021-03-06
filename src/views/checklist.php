<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckList</title>
    <link rel="stylesheet" href="assets/css/css.css">
</head>

<body>
<div class = "topper">
            <img src="assets/img/logo1.png" class="img-fluid" alt="...">
</div>
    <main>
        <section class="checklist">
            <div class="container">

                <div class="checklist__task">
                    <textarea name="task" class="checklist__task_label">Adicionar Nova Lista</textarea>
                    <textarea name="task" class="checklist__task_text" id="taskInputText" cols="30" rows="1" placeholder="tarefa 1"></textarea>
                </div>
                <div class="checklist__button">
                    <button class="button checklist_button">Adicionar Nova Tarefa</button>
					<button class="button checklist_compartilhamento1">Cadastrar</button>	
                </div>
                <div class="timeline"></div>
            </div>
        </section>
    </main>
    <script src="script/script.js"></script>
</body>

</html>