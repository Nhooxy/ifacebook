<h2>Formulaire de contact</h2>

<form name="form_contact" method="post" class="form-horizontal" action="#">
    <div class="form-group">
        <label title="Nom" class="col-sm-2 control-label required" for="form_name">
            Nom
        </label>
        <div class="col-sm-10">
            <input type="text" id="form_name" name="form_contact[nom]" required="required" placeholder="Nom"
                   class="form-control"/>
        </div>
    </div>

    <div class="form-group">
        <label title="Prenom" class="col-sm-2 control-label required" for="form_first_name">
            Prenom
        </label>
        <div class="col-sm-10">
            <input type="text" id="form_first_name" name="form_contact[Prenom]" required="required" placeholder="Prenom"
                   class="form-control"/>
        </div>
    </div>

    <div class="form-group">
        <label title="email" class="col-sm-2 control-label required" for="form_mail">
            E-mail
        </label>
        <div class="col-sm-10">
            <input type="email" id="form_mail" name="form_contact[email]" required="required" placeholder="email"
                   class="form-control"/>
        </div>
    </div>

    <div class="form-group">
        <label title="comments" class="col-sm-3 control-label required" for="form_comments">
            Commentaires
        </label>
        <div class="col-sm-9">
            <textarea id="form_comments" name="form_contact[comments]" required="required" class="form-control">
            </textarea>
        </div>
    </div>

    <div class="form-group text-center">
        <button type="submit" id="submit" name="form_envoyer" class="btn btn-success btn-lg" value="Envoyer">
            <i class="glyphicon glyphicon-ok"></i>
            <span>Envoyer</span>
        </button>
    </div>
</form>