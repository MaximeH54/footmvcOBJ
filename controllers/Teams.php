<?php
namespace Controllers;

use Models\Teams as ModelsTeams;

class Teams extends Controller
{
  public function listTeams()
  {
    $modelsTeams = new ModelsTeams();
    $teams = $modelsTeams->getTeams();

    $this->render('views/listTeams.php', [
      'teams' => $teams,
    ]);
  }



  public function showTeam($id)
  {
    $modelsTeams = new ModelsTeams();
    $team = $modelsTeams->getTeam($id);
    $players = $modelsTeams->getPlayers($id);

    $this->render('views/showTeam.php', [
      'team' => $team,
    ]);
  }
}
