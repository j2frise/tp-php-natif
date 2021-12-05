<?php   
    require_once APP_ROOT . '/Views/Include/Layout/site/header.php';
?>
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-9 blog-main">
            <div class="mt-3 mb-2 ">
                <a href="#" class="btn btn-warning">Editer <i class="fa fa-edit"></i></a>
                <a href="#" class="btn btn-danger">supprimer <i class="fa fa-trash"></i></a>
            </div>

          <h3 class="pb-3 mb-5 font-italic border-bottom">
            Description
          </h3>
        
          <div class="blog-post">
            <h2 class="blog-post-title">Another blog post</h2>
            <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
            <blockquote>
              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </blockquote>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          </div><!-- /.blog-post -->
          <div class="comments col-10">
              <form action="">
                    <div class="form-group">
                        <label for=""><strong>Auteur</strong></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Commentaire</strong></label>
                        <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Publier</button>
                    </div>
              </form>
          </div>

          <hr>
            <h4 class="mt-5">Les Commentaires</h4>
            <div class="container justify-content-center mt-3 mb-4">
                <div class="d-flex justify-content-center py-2">
                    <div class="second py-2 px-2"> <span class="text1">Type your note, and hit enter to add it</span>
                        <div class="d-flex justify-content-between py-1 pt-2 mt-2">
                            <small class="text-muted"><strong><i class="fa fa-user"></i> <span class="text2">Martha</span></strong></small>
                            <small>
                                <a href="#" class="text-success mr-2"><i class="fa fa-check-circle"></i></a>
                                <a href="#" class="text-danger mr-2"><i class="fa fa-trash"></i></a> | 
                               <i class="fa fa-calendar"></i> <span class="text4">12/12/2021</span>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center py-2">
                    <div class="second py-2 px-2"> <span class="text1">Type your note, and hit enter to add it</span>
                        <div class="d-flex justify-content-between py-1 pt-2 mt-2">
                            <small class="text-muted"><strong><i class="fa fa-user"></i> <span class="text2">Martha</span></strong></small>
                            <small>
                                <a href="#" class="text-success mr-2"><i class="fa fa-check-circle"></i></a>
                                <a href="#" class="text-danger mr-2"><i class="fa fa-trash"></i></a> | 
                               <i class="fa fa-calendar"></i> <span class="text4">12/12/2021</span>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center py-2">
                    <div class="second py-2 px-2"> <span class="text1">Type your note, and hit enter to add it</span>
                        <div class="d-flex justify-content-between py-1 pt-2 mt-2">
                            <small class="text-muted"><strong><i class="fa fa-user"></i> <span class="text2">Martha</span></strong></small>
                            <small>
                                <a href="#" class="text-success mr-2"><i class="fa fa-check-circle"></i></a>
                                <a href="#" class="text-danger mr-2"><i class="fa fa-trash"></i></a> | 
                               <i class="fa fa-calendar"></i> <span class="text4">12/12/2021</span>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="..." class="mt-4 mb-5">
                <ul class="pagination pagination-sm">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">1</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
              </nav>

        </div><!-- /.blog-main -->

        <?php require_once APP_ROOT . '/Views/Include/aside.php'; ?>

      </div><!-- /.row -->

    </main><!-- /.container -->
    <?php require_once APP_ROOT . '/Views/Include/Layout/site/footer.php'; ?>
