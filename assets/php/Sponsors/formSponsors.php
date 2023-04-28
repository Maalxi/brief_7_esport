<form action='./pageSponsors.php' method="POST">
    <div>
        <label for="ADD">ADD</label>
    </div>
    <div class="input-container">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="input-container">
        <label for="team_id">Team</label>
        <select name="team_id" id="team_id">
            <?php
            foreach ($allTeams as $team) {
                echo ('<option value="' . $team->getId() . '">' . $team->getName() . '</option>');
            }
            ?>
        </select>
    </div>
    <input type="submit" value="Enregistrer">
</form>

<form action='./pageSponsors.php' method="POST">
    <div class="titre">
        <label for="EDIT">EDIT</label>
    </div>
    <div class="input-container">
        <label for="new_id">Sponsor</label>
        <select name="new_id" id="new_id">
            <?php
            foreach ($allSponsors as $sponsor) {
                echo ('<option value="' . $sponsor->getId() . '">' . $sponsor->getName() . '</option>');
            }
            ?>
        </select>
    </div>
    <div class="input-container">
        <label for="new_name">New sponsor</label>
        <input type="text" name="new_name" id="new_name">
    </div>
    <div class="input-container">
        <label for="new_team_id">New team</label>
        <select name="new_team_id" id="new_team_id">
            <?php
            foreach ($allTeams as $team) {
                echo ('<option value="' . $team->getId() . '">' . $team->getName() . '</option>');
            }
            ?>
        </select>
    </div>
    <input type="submit" value="Enregistrer">
</form>