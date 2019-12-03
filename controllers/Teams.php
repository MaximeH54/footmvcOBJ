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
      'toto' => 10,
      'super' => "ça marche"
    ]);
  }
}
