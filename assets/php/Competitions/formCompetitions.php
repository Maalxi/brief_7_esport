<form action='./pageCompetitions.php' method="POST">
    <div class="input-container" >
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="input-container" >
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
    </div>
    <div class="input-container" >
        <label for="city">City</label>
        <input type="text" name="city" id="city">
    </div>
    <div class="input-container" >
        <label for="format">Format</label>
        <input type="text" name="format" id="format">
    </div>
    <div class="input-container" >
        <label for="cash_prize">Cash prize</label>
        <input type="number" name="cash_prize" id="cash_prize">
    </div>
    <input type="submit" value="Enregistrer">
</form>