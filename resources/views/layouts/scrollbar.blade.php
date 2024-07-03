<style type="text/css">
    .content {
        background-image: url("img/slider02.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        height: 70vh;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
    }

    .box {
        position: relative;
        background: rgba(0, 0, 0, 0.751);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 70vh;
    }
</style>

<header class="content h-md-100">
    <div class="h-md-100 box w-100">
        <div class="row mb-0 ml-0 mr-0">
            <div class="col-md-12 col-md-offset-2 col-xs-10 col-xs-offset-1">
                <h2 style="color:white" class="text-center"> Trouvez un nom de domaine qui vous convient </h2>
                <div class="row" style="background:white; margin-top:50px; padding:20px 0px 0px 0px; ;">
                    <div class="col-md-2"> 
                        <input id="inputCaptcha" type="text" readonly = "readonly" name="" maxlength="5" class="form-control" style="background:#f1f1f1; border: 0px solid #ccc; box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.1);" placeholder="www."/>
                    </div>
                    <div class="col-md-6"> 
                        <input id="inputCaptcha" type="text" name="sld" class="form-control" style="background:#f1f1f1; border: 0px solid #ccc; box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.1);" placeholder="Votre nom de domaine" />
                    </div>
                    <div class="col-md-2"><select class="form-control" style="background:#f1f1f1; border: 0px solid #ccc; box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.1);">
                            <option value=".com.bf">.com.bf</option>
                            <option value=".org.bf">.org.bf</option>
                            <option value=".net.bf">.net.bf</option>
                            <option value=".edu.bf">.edu.bf</option>
                            <option value=".univ.bf">.univ.bf</option>
                            <option value=".perso.bf">.perso.bf</option>
                            <option value=".com">.com</option>
                            <option value=".net">.net</option>
                            <option value=".org">.org</option>
                            <option value=".online">.online</option>
                            <option value=".site">.site</option>
                            <option value=".website">.website</option>
                        </select> <input type="hidden" name="action" value="check" />
                    </div>
                    <div class="col-md-2">
                        <button type="submit" style="background:#0f4371; color:white;" class="btn domain-check-availability">Rechercher</button>
                    </div>
                    <div class="col-md-12" style="background:#0f4371; margin-top: 10px;">
                        <ul class="breadcrumb bread-danger" style="background:none; margin-bottom: 5px; padding: 10px;">
                            <li><a href="#" style="color:white;">Recherche de domaines par lot / </a></li>
                            <li><a href="#" style="color:white;"> / Transfert de domaines</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
