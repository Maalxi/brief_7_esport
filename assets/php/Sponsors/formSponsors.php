<form action='./pageSponsors.php' method="POST">
    <div class="input-container" >
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="input-container" >
        <label for="team_id">Team</label>
        <select name="team_id" id="team_id">
            <?php 
                foreach ($allTeams as $team) {
                    echo ('<option value="' . $team->getId() . '">' . $team->getName(). '</option>');
                }
            ?>
        </select>
    </div>
    <input type="submit" value="Enregistrer">
</form>