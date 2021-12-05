<?php   
    require_once APP_ROOT . '/Views/Include/Layout/site/header.php';
?>
<main role="main" class="container">
    <div class="row mt-5 mb-5">
    <div class="col-md-5">
        <h3 class="pb-3 mb-5 font-italic">
        Formulaire de contact
        </h3>
    
        <div class="blog-post">
        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
        </div>

    </div>
    <div class="col-md-7">
        <form action="">
            <div class="form-group">
                <label for=""><strong>Nom complet</strong></label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for=""><strong>Email</strong></label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for=""><strong>Sujet</strong></label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for=""><strong>Contenu</strong></label>
                <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Envoyer</button>
            </div>
        </form>
    </div>

    </div><!-- /.row -->

</main><!-- /.container -->
<?php require_once APP_ROOT . '/Views/Include/Layout/site/footer.php'; ?>
