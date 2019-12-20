<?php
namespace Controllers;

use Models\Coachs as ModelsCoachs;

class Coachs extends Controller
{
  public function listCoachs()
  {
    $modelsCoachs = new ModelsCoachs();
    $coachs = $modelsCoachs->getTheCoachs();

    $this->render('views/listCoachs.php', [
      'coachs' => $coachs,
    ]);
  }



  public function showCoach($id)
  {
    $modelsCoachs = new ModelsCoachs();
    $coach = $modelsCoachs->getCoachs($id);

    $this->render('views/showCoach.php', [
      'coach' => $coach,
    ]);
  }
}
