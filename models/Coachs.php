<?php
namespace Models;

class Coachs extends Model
{
  public function getTheCoachs()
  {
    $stmt = $this->db->prepare('SELECT * FROM coachs');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  public function getCoachs($id)
  {
    $stmt = $this->db->prepare('SELECT coachs.*, teams.name AS teamsName
      FROM coachs
      INNER JOIN coachs_has_teams
      ON coachs.id = coachs_has_teams.id_coach
      INNER JOIN teams
      ON teams.id = coachs_has_teams.id_team
      WHERE coachs.id = ' . $id);
    $stmt->execute();
    return $stmt->fetch();
  }
}

?>
