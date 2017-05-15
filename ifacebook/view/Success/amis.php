<h2 id="liste-amis">Mes ami(e)s</h2>
<?php
/** @var \ifacebook\model\Utilisateur\Utilisateur $data */
foreach ($context->__get('data') as $data) {
    ?>
    <a href="?action=profil&id=<?php echo $data->getId(); ?>"
       title="vers profil de <?php echo $data->getFullName(); ?>">
        <div class="well">
            <div class="row">
                <div class="col-md-2 hidden-xs">
                    <img src='<?php echo $data->getAvatar(); ?>' alt='avatar' width='50' height='50'/>
                </div>
                <div class="col-md-10 col-xs-12">
                    <p class="flow-text">
                        <?php echo $data->getFullName(); ?>
                    </p>
                </div>
            </div>
        </div>
    </a>
<?php } ?>
