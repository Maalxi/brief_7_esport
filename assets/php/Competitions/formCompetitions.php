<form action='./pageCompetitions.php' method="POST">
    <div>
        <label for="ADD">ADD</label>
    </div>
    <div class="input-container">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="input-container">
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
    </div>
    <div class="input-container">
        <label for="city">City</label>
        <input type="text" name="city" id="city">
    </div>
    <div class="input-container">
        <label for="format">Format</label>
        <input type="text" name="format" id="format">
    </div>
    <div class="input-container">
        <label for="cash_prize">Cash prize</label>
        <input type="number" name="cash_prize" id="cash_prize">
    </div>
    <input type="submit" value="Enregistrer">
</form>

<form action='./pageCompetitions.php' method="POST">
    <div class="titre">
        <label for="EDIT">EDIT</label>
    </div>

    <div class="input-container">
        <label for="new_id">Competition</label>
        <select name="new_id" id="new_id">
            <?php
            foreach ($allCompetitions as $competition) {
                echo ('<option value="' . $competition->getId() . '">' . $competition->getName() . '</option>');
            }
            ?>
        </select>
    </div>

    <div class="input-container">
        <label for="new_name">New competition</label>
        <input type="text" name="new_name" id="new_name" value>
    </div>

    <div class="input-container">
        <label for="new_desc">New description</label>
        <input type="text" name="new_desc" id="new_desc">
    </div>

    <div class="input-container">
        <label for="new_city">New city</label>
        <input type="text" name="new_city" id="new_city">
    </div>

    <div class="input-container">
        <label for="new_format">New format</label>
        <input type="text" name="new_format" id="new_format">
    </div>

    <div class="input-container">
        <label for="new_cash_prize">New cash prize</label>
        <input type="number" name="new_cash_prize" id="new_cash_prize">
    </div>

    <input type="submit" value="Enregistrer">
</form>