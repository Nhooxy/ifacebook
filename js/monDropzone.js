/**
 * @author: Pierre PEREZ
 */
var monDropzone = (function () {
    'use strict';
    var module = {};

    /**
     * Initialisation du dropzone pour le mur
     */
    module.init = function () {
        mur();
        avatar();
    };

    /**
     * Initialisation du dropzone pour le mur
     */
    function mur() {
        $('#monDropzone').dropzone({
            url: '?action=uploadImg',
            maxFiles: 1,
            dictDefaultMessage: 'Veuillez glisser votre image ici (ou cliquer)',
            dictRemoveFile: 'Retirez cette image',
            dictMaxFilesExceeded: 'Vous ne pouvez mettre qu\'une seul image !',
            addRemoveLinks: true,
            success: function (file, response) {
                if (file.previewElement) {
                    var tmp = JSON.parse(response);
                    $('#img-name').val(tmp.data.imgname);

                    return file.previewElement.classList.add("dz-success");
                }
            }
        });
    }

    /**
     * Initialisation du dropzone pour l'avatar du profil
     */
    function avatar() {
        $('#monDropzoneAvatar').dropzone({
            url: '?action=uploadImg&avatar=true',
            maxFiles: 1,
            dictDefaultMessage: 'Veuillez glisser votre image ici (ou cliquer)',
            dictRemoveFile: 'Retirez cette image',
            dictMaxFilesExceeded: 'Vous ne pouvez mettre qu\'une seul image !',
            addRemoveLinks: true,
            success: function (file, response) {
                if (file.previewElement) {
                    var tmp = JSON.parse(response);
                    $('#img-avatar-name').val(tmp.data.imgname);

                    return file.previewElement.classList.add("dz-success");
                }
            }
        });
    }

    return module;
})();
