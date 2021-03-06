/**
 * @author: LOIC TORO
 */
var editionProfil = (function () {
    'use strict';
    var module = {};

    module.init = function () {
        edition();
    };

    /**
     * permet d'envoyer les modifications voulu sur le profil
     */
    function edition() {
        $('#submit-edit').click(function () {
            $.ajax({
                dataType: 'json',
                data: {
                    status: $.trim($('#form_status_edit').val()),
                    by: $('#id-edition-user').val(),
                    avatar: $('#img-avatar-name').val()
                },
                url: '?action=editionProfil',
                success: function (reponse) {
                    'undefined' !== reponse.data.avatar ? $('#profil-avatar').attr('src', reponse.data.avatar) : null;
                    'undefined' !== reponse.data.status ? $('#profil-status').html(reponse.data.status) : null;
                    'undefined' !== reponse.data.avatar ? $('#menu-avatar').attr('src', reponse.data.avatar) : null;
                    'undefined' !== reponse.data.status ? $('#menu-status').html(reponse.data.status) : null;

                    $('#form_status_edit').val('');
                    $('#img-avatar-name').val('');
                    $('.dz-success').remove();
                    $('#EditCollapse').collapse('hide')
                }
            });
        });
    }

    /**
     * strucuter html pour un message
     * @param reponse
     */
    function structureMessage(reponse) {
        var ajouter = '';
        var tmp = JSON.parse(reponse.data.message);
        if (null !== tmp) {
            null !== tmp.destinataire ? tmp.destinataire = JSON.parse(tmp.destinataire) : tmp.destinataire;
            null !== tmp.emetteur ? tmp.emetteur = JSON.parse(tmp.emetteur) : tmp.emetteur;
            null !== tmp.parent ? tmp.parent = JSON.parse(tmp.parent) : tmp.parent;
            null !== tmp.post ? tmp.post = JSON.parse(tmp.post) : tmp.post;
            ajouter = "<div class='well'>"
                + "<div class='row'>"
                + "<div class='col-md-2 hidden-xs'>"
                + tools.structureAvatar(tmp.emetteur.avatar, 100)
                + "</div>"
                + "<div class='col-md-10 col-xs-12'>"
                + "<span class='full-name'>"
                + "<a href='?action=profil&id=" + tmp.emetteur.id + "'"
                + "title='vers profil de " + tmp.emetteur.prenom + ' ' + tmp.emetteur.nom + "'>"
                + tmp.emetteur.prenom + ' ' + tmp.emetteur.nom
                + "</a>"
                + "</span>"
                + "<span class='date'>" + tmp.post.date.date + "</span>";
            if (null !== tmp.destinataire && tmp.destinataire.id !== tmp.emetteur.id) {
                ajouter += "<span class='destination'>Sur le mur de "
                    + "<a href='?action=profil&id=" + tmp.destinataire.id + "'"
                    + "title='vers profil de " + tmp.destinataire.prenom + ' ' + tmp.destinataire.nom + "'>"
                    + tmp.destinataire.prenom + ' ' + tmp.destinataire.nom
                    + "</a>"
                    + "</span>";
            }
            if (null !== tmp.parent) {
                ajouter += "<span class='partage-de'>A partager de "
                    + "<a href='?action=profil&id=" + tmp.parent.id + "'"
                    + "title='vers profil de " + tmp.parent.prenom + ' ' + tmp.parent.nom + "'>"
                    + tmp.parent.prenom + ' ' + tmp.parent.nom
                    + "</a>"
                    + "</span>";
            }
            ajouter += "<p class='flow-text'>" + tmp.post.texte.sanitize() + "</p>";

            if (null !== tools.structureImgPost(tmp.post.image)) {
                ajouter += tools.structureImgPost(tmp.post.image);
            }
            ajouter += "<span id='like-" + tmp.post.id + "' class='like'>"
                + tmp.aime + " "
                + "<i class='fa fa-heart' aria-hidden='true'></i>"
                + "</span>"
                + "<span id='partage-" + tmp.post.id + "' class='partage'>"
                + "<i class='fa fa-share' aria-hidden='true'></i>"
                + "Partager" + " "
                + "</span>"
                + "</div>"
                + "</div>"
                + "</div>";

            $('#receive-ajax-message').prepend(ajouter);
        }
    }

    return module;
})();
