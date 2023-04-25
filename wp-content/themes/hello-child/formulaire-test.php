<form id="compteur-form" action="http://localhost/OPCR%20XAMP/projet6/planty4/wp-content/themes/hello-child/commander.php" method="post">
<div class="formidentitelivraison">
    <div class="identite">
        <h2>Vos informations</h4>
        <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom">
        <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="nom">
        <label for="email">Email</label>
            <input type="text" id="email" name="nom">
    </div>
    <div class="livraison">
        <h2>Livraison</h4>
        <label for="adresse">Adresse</label>           
            <input type="text" id="adresse" name="nom">
        <label for="cp">Code postale</label>
            <input type="text" id="cp" name="nom">
        <label for="ville">Ville</label>
            <input type="text" id="ville" name="nom">
    </div>
</div>
 <div class="envoyer-form">
 <button type="submit" class="envoyer">Commander</button>
</div>
</form>