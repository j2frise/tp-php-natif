<?php   
    require_once APP_ROOT . '/Views/Include/Layout/dashboard/header.php';
?>
 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 pb-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Mon profil</h1>
        </div>
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1"><h6>Mes informations</h6></a></li>
                <li><a href="#tabs-2"><h6>Mon compte</h6></a></li>
            </ul>
            <div id="tabs-1">
                <form action="/profile" method="PUT" enctype="multipart/form-data" class="mt-5" id="common-form-profile">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <div class="form-group message-profile"></div>
                            <div class="form-group">
                                <label for="">Avatar </label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Pseudo <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="<?=$data['current_user']["userName"]?>">
                            </div>
                            <div class="form-group">
                                <label for="">Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="<?=$data['current_user']["email"]?>">
                            </div>
                            <div class="form-group">
                                <label for="">Nom <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="<?=$data['current_user']["lastName"]?>">
                            </div>
                            <div class="form-group">
                                <label for="">Prénom <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="<?=$data['current_user']["firstName"]?>">
                            </div>
                            <div class="form-group">
                                <label for="">Desctiption</label>
                                <textarea name="" id="" cols="30" rows="10" class="form-control"><?=$data['current_user']["description"]?></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" rel="profile">Enregistrer</button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-5 text-center">
                            <h3 class="mb-4"><strong>Mon avatar</strong></h3>
                            <img class="rounded-circle" src="<?=$data['current_user']["avatar"]?>" alt="" width="120" height="120">
                        </div>
                    </div>
                </form>
            </div>
            <div id="tabs-2">
                <form action="" class="mt-5">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <div class="form-group">
                                <label for="">Ancien mot de passe <span class="text-danger">*</span></label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nouveau mot de passe <span class="text-danger">*</span></label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Confirmer le mot de passe <span class="text-danger">*</span></label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </main>
<?php require_once APP_ROOT . '/Views/Include/Layout/dashboard/footer.php'; ?>

