<?php include("cabecalho.php") ?>
<?php include("menu.php") ?>
<main class="bg-light row pe-3 ps-3 ">
    <div class="row">
        <h2 class="mt-4 h1">Entre em contato</h2>
        <hr>
    </div>
    <div class="row">
        <div class="col">
            <form action="">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label"></label>
                    <input type="text" class="form-control bg-secondary-subtle" id="formGroupExampleInput" placeholder="Nome">
                </div>
                <div class="mb-3">
                    <label class="form-label"></label>
                    <input type="email" class="form-control bg-secondary-subtle" id="formGroupExampleInput2" placeholder="E-mail">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label"></label>
                    <input type="text" class="form-control bg-secondary-subtle" id="formGroupExampleInput2" placeholder="Assunto">
                </div>
                <div class="mb-3 ">
                    <textarea class="form-control bg-secondary-subtle" placeholder="Mensagem" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2"></label>
                </div>

                <input class="btn btn-secondary" type="submit" value="Enviar">

            </form>
        </div>
        <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14716.264259706984!2d-47.3412927!3d-22.762929399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1712019359449!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   
        </div>
    </div>  
</main>
<?php include("rodape.php") ?>