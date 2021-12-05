<?php   
    require_once APP_ROOT . '/Views/Include/Layout/site/header.php';
?>
<main role="main" class="container">
    <div class="row">
    <div class="col-md-9 blog-main">
        <a href="#" class="mt-3 mb-2 btn btn-success"><i class="fa fa-plus"></i> Ajouter</a>
        <h3 class="pb-3 mb-5 font-italic border-bottom">
        Liste des articles
        </h3>
    
        <div class="album py-5">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
                <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Lire <i class="fa fa-eye"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">25 Commentaires <i class="fa fa-comment-alt"></i></button>
                    </div>
                    <small class="text-muted">9 mins</small>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-warning">Editer <i class="fa fa-pencil"></i></button>
                        <button type="button" class="btn btn-sm btn-danger">Supprimer <i class="fa fa-trash"></i></button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Lire <i class="fa fa-eye"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">25 Commentaires <i class="fa fa-comment-alt"></i></button>
                    </div>
                    <small class="text-muted">9 mins</small>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-warning">Editer <i class="fa fa-pencil"></i></button>
                        <button type="button" class="btn btn-sm btn-danger">Supprimer <i class="fa fa-trash"></i></button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Lire <i class="fa fa-eye"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">25 Commentaires <i class="fa fa-comment-alt"></i></button>
                    </div>
                    <small class="text-muted">9 mins</small>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-warning">Editer <i class="fa fa-pencil"></i></button>
                        <button type="button" class="btn btn-sm btn-danger">Supprimer <i class="fa fa-trash"></i></button>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Lire <i class="fa fa-eye"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">25 Commentaires <i class="fa fa-comment-alt"></i></button>
                    </div>
                    <small class="text-muted">9 mins</small>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-warning">Editer <i class="fa fa-pencil"></i></button>
                        <button type="button" class="btn btn-sm btn-danger">Supprimer <i class="fa fa-trash"></i></button>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            </div>

            <nav aria-label="..." class="mt-4">
            <ul class="pagination pagination-sm">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
            </nav>

        </div>
        </div>
    </div><!-- /.blog-main -->

    <?php require_once APP_ROOT . '/Views/Include/aside.php'; ?>

    </div><!-- /.row -->

</main><!-- /.container -->
<?php require_once APP_ROOT . '/Views/Include/Layout/site/footer.php'; ?>

