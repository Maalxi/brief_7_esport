<form action='./pageInscriptions.php' method="POST">
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
    <div class="input-container">
        <label for="competition_id">Competition</label>
        <select name="competition_id" id="competition_id">
            <?php
            foreach ($allCompetitions as $competition) {
                echo ('<option value="' . $competition->getId() . '">' . $competition->getName() . '</option>');
            }
            ?>
        </select>
    </div>
    <input type="submit" value="Enregistrer">
</form>