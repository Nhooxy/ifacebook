/**
 * @author: Loic TORO
 */
var notification = (function () {
    'use strict';
    var module = {};

    var n = null;

    /**
     * initialisation des notif
     */
    module.init = function () {
        canYouNotifyMe();
    };

    /**
     * Demande d'accord de notif
     */
    function canYouNotifyMe() {
        if (!('Notification' in window)) {
            alert('Ce navigateur ne supporte pas les notifications desktop');
        } else if (Notification.permission !== 'denied') {
            Notification.requestPermission(function (permission) {
                if (!('permission' in Notification)) {
                    Notification.permission = permission;
                }
            });
        }
    }

    /**
     * Faire aparaitre une notif
     *
     * @param theBody
     * @param theTitle
     */
    module.spawnNotification = function (theBody, theTitle) {
        var options = {
            body: theBody,
            icon: 'images/favicon.png'
        };
        if (null !== n) {
            n.close();
        }
        n = new Notification(theTitle, options);
        setTimeout(n.close.bind(n), 5000);
    };

    return module;
})();
