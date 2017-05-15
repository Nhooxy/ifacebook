<h2 id="liste-messages">Mur général</h2>

<div class="well">
    <form name="form" method="post" class="form-horizontal">
        <div class="form-group">
            <label title="publication" class="col-sm-2 control-label required" for="form_publication">
                Votre publication
            </label>
            <div class="col-sm-8">
                <textarea id="form_publication" name="form[publication]" required="required"
                          class="form-control"></textarea>
            </div>
            <div class="col-sm-2">
                <button type="button" id="publication-submit" name="form_envoyer" class="btn btn-success btn-lg"
                        value="Envoyer">
                    <i class="glyphicon glyphicon-ok"></i>
                    <span>Envoyer</span>
                </button>
            </div>
            <input type="hidden" id="img-name" value="">
            <input type="hidden" id="id-user" value="<?php echo $context->__get('user')->getId() ?>">
        </div>
    </form>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#dropZoneCollapse"
            aria-expanded="false" aria-controls="dropZoneCollapse">
        Ajouter une image
    </button>
    <div class="collapse" id="dropZoneCollapse">
        <form action="?action=uploadImg" class="dropzone" id="monDropzone"></form>
    </div>
    <div id="receive-ajax-message"></div>

    <?php
    /** @var \ifacebook\model\Message\Message $data */
    foreach ($context->__get('data') as $data) { ?>
    <?php if ($data->getEmetteur()) { ?>
        <div class="well">
            <div class="row">
                <div class="col-md-2 hidden-xs">
                    <img src='<?php echo $data->getEmetteur()->getAvatar(); ?>' alt='avatar' width='100' height='100'/>
                </div>
                <div class="col-md-10 col-xs-12">
                <span class="full-name">
                    <a href="?action=profil&id=<?php echo $data->getEmetteur()->getId(); ?>"
                       title="vers profil de <?php echo $data->getEmetteur()->getFullName(); ?>">
                        <?php echo $data->getEmetteur()->getFullName(); ?>
                    </a>
                </span>
                    <span class="date"><?php echo $data->getPost()->getDate()->format('d-m-Y H:i:s'); ?> </span>
                    <?php
                    if (null !== $data->getDestinataire() && $data->getDestinataire()->getId() !== $data->getEmetteur(
                        )->getId()
                    ) {
                        ?>
                        <span class="destination">Sur le mur de
                        <a href="?action=profil&id=<?php echo $data->getDestinataire()->getId(); ?>"
                           title="vers profil de <?php echo $data->getDestinataire()->getFullName(); ?>">
                        <?php echo $data->getDestinataire()->getFullName(); ?>
                        </a>
                    </span>
                        <?php
                    }
                    if (null !== $data->getParent()) {
                        ?>
                        <span class="partage-de">A partagé(e) de
                        <a href="?action=profil&id=<?php echo $data->getParent()->getId(); ?>"
                           title="vers profil de <?php echo $data->getParent()->getFullName(); ?>">
                        <?php echo $data->getParent()->getFullName(); ?>
                        </a>
                    </span>
                        <?php
                    }
                    ?>
                    <p class="flow-text">
                        <?php echo $data->getPost()->getTexte();
                        ?>
                    </p>
                    <?php
                    if ($data->getPost()->hasImage()) { ?>
                        <img src='<?php echo $data->getPost()->getImage(); ?>' alt='image de post'
                             class="img-responsive max-img"/>
                        <?php
                    }
                    ?>
                    <span id="like-<?php echo $data->getId(); ?>" class="like">
                    <?php echo $data->getAime() ?>
                        <i class="fa fa-heart" aria-hidden="true"></i>
                </span>
                    <span id="partage-<?php echo $data->getId(); ?>" class="partage">
                    <i class="fa fa-share" aria-hidden="true"></i>
                    Partager
                </span>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>
</div>
