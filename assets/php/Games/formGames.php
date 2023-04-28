<form action='./pageGames.php' method="POST">
    <div class="titre">
        <label for="EDIT">EDIT</label>
    </div>
    <div class="input-container">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="input-container">
        <label for="station">Station</label>
        <input type="text" name="station" id="station">
    </div>

    <div class="input-container">
        <label for="format">Format</label>
        <input type="text" name="format" id="format">
    </div>
    <input type="submit" value="Enregistrer">
</form>

<form action='./pageGames.php' method="POST">
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
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="input-container">
        <label for="station">Station</label>
        <input type="text" name="station" id="station">
    </div>

    <div class="input-container">
        <label for="format">Format</label>
        <input type="text" name="format" id="format">
    </div>
    <input type="submit" value="Enregistrer">
</form>