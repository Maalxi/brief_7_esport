<form action='./pageTeams.php' method="POST">
    <div class="titre">
        <label for="ADD">ADD</label>
    </div>
    <div class="input-container">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="input-container">
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
    </div>
    <input type="submit" value="Enregistrer">
</form>

<form action='./pageTeams.php' method="POST">
    <div class="titre">
        <label for="EDIT">EDIT</label>
    </div>

    <div class="input-container">
        <label for="new_id">Team</label>
        <select name="new_id" id="new_id">
            <?php
            foreach ($allTeams as $team) {
                echo ('<option value="' . $team->getId() . '">' . $team->getName() . '</option>');
            }
            ?>
        </select>
    </div>
    <div class="input-container">
        <label for="new_name">New name</label>
        <input type="text" name="new_name" id="new_name">
    </div>
    <div class="input-container">
        <label for="new_description">New description</label>
        <input type="text" name="new_description" id="new_description">
    </div>
    <input type="submit" value="Enregistrer">
</form>