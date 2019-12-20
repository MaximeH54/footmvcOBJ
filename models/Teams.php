<?php
namespace Models;

class Teams extends Model
{
  public function getTeams()
  {
    $stmt = $this->db->prepare('SELECT * FROM teams');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  public function getTeam($id)
  {
    $stmt = $this->db->prepare('SELECT teams.*, coachs.id AS coach_id, coachs.name AS coach, stadiums.name AS stadium
      FROM teams
      INNER JOIN coachs_has_teams
      ON teams.id = coachs_has_teams.id_team
      INNER JOIN coachs
      ON coachs_has_teams.id_coach = coachs.id
      INNER JOIN stadiums
      ON stadiums.id = teams.id_stadium
      WHERE teams.id = ' . $id);
    $stmt->execute();
    return $stmt->fetch();
  }

  public function getPlayers($id)
  {
    $stmt = $this->db->prepare('SELECT players.*, name
      FROM players
      INNER JOIN player_has_team
      ON teams.id = player_has_team.id_players
      INNER JOIN coachs
      ON coachs_has_teams.id_coach = coachs.id
      WHERE teams.id = ' . $id);      
    $stmt->execute();
    return $stmt->fetchAll();
  }
}


/**$stmt = $db->prepare('SELECT teams.*, coachs.id AS coach_id, coachs.name AS coach, stadiums.name AS stadium
  FROM teams
  INNER JOIN coachs_has_teams
  ON teams.id = coachs_has_teams.id_team
  INNER JOIN coachs
  ON coachs_has_teams.id_coach = coachs.id
  INNER JOIN stadiums
  ON stadiums.id = teams.id_stadium
  WHERE teams.id = ' . $id);
$stmt->execute();
$team = $stmt->fetch();


$stmt = $db->prepare('SELECT players.*, name
  FROM players
  INNER JOIN player_has_team
  ON teams.id = player_has_team.id_players
  INNER JOIN coachs
  ON coachs_has_teams.id_coach = coachs.id
  WHERE teams.id = ' . $id);
$stmt->execute();
$players = $stmt->fetchAll();

$stmt = $db->prepare('SELECT matchs.*
  FROM matchs
  INNER JOIN teams AS th
  ON team_home.id = matchs.id_team_home
  INNER JOIN teams AS ta
  ON ta.id = matchs.id_team_away
  WHERE ta.id =  ' . $id);
$stmt->execute();
$matchs = $stmt->fetchAll();**/
?>
