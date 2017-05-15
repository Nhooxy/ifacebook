<div id="chatModal" class="hidden-xs">
    <form name="form" method="post" class="form-horizontal">
        <div class="form-group">
            <label title="message" class="col-sm-2 control-label required" for="form_message">
                Votre message
            </label>
            <div class="col-sm-10">
                    <textarea id="form_message" name="form[message]" required="required"
                              class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group text-center">
            <button type="button" id="chat-submit" name="form_envoyer" class="btn btn-success btn-lg"
                    value="Envoyer">
                <i class="glyphicon glyphicon-ok"></i>
                <span>Envoyer</span>
            </button>
        </div>
    </form>
    <hr/>
    <div id="receive-ajax-chat" class="container-fluid"></div>
    <div id="chat-contenu" class="container-fluid"></div>
</div>