<form action='./pageGames.php' method="POST">
    <div class="titre">
        <label for="ADD">ADD</label>
    </div>
    <div class="input-container">
        <label for="name">Name</label>
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
        <label for="new_id">Name</label>
        <select name="new_id" id="new_id">
            <?php
            foreach ($allGames as $game) {
                echo ('<option value="' . $game->getId() . '">' . $game->getName() . '</option>');
            }
            ?>
        </select>
    </div>

    <div class="input-container">
        <label for="new_name">New name</label>
        <input type="text" name="new_name" id="new_name">
    </div>
    <div class="input-container">
        <label for="new_station">New station</label>
        <input type="text" name="new_station" id="new_station">
    </div>

    <div class="input-container">
        <label for="new_format">New format</label>
        <input type="text" name="new_format" id="new_format">
    </div>
    <input type="submit" value="Enregistrer">
</form>