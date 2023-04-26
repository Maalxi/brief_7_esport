<form action='./pagePlayers.php' method="POST">
    <div class="input-container" >
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name">
    </div>
    <div class="input-container" >
        <label for="second_name">Second Name</label>
        <input type="text" name="second_name" id="second_name">
    </div>

    <div class="input-container" >
        <label for="city">City</label>
        <input type="text" name="city" id="city">
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

    <div class="input-container" >
        <label for="game_id">Game</label>
        <select name="game_id" id="game_id">
            <?php 
                foreach ($allGames as $game) {
                    echo ('<option value="' . $game->getId() . '">' . $game->getName(). '</option>');
                }
            ?>
        </select>
    </div>
    <input type="submit" value="Enregistrer">
</form>