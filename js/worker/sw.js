/**
 * Thread de message pour verifier nouvelle data toutes les 10s
 * @author: Loic TORO
 */
self.addEventListener('message', function (event) {
    setTimeout(function () {
        postMessage("pong");
    }, 10000);
});
