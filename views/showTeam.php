<div class="container text-center">
  <h1 class="font-weight-bold"><?= $team['name']; ?></h1>
  <div class="row">
    <img src="<?php echo $team['logo']?>" class="card-img-top rounded mx-auto d-block"style="width: 35rem;" alt="les équipes">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">President : </th>
          <th scope="col"><?php echo $team['president']; ?></th>
        </tr>
      </thead>
      <thead>
        <tr>
          <th scope="col">Date de fondation : </th>
          <th scope="col"><?php echo $team['fundation_date']; ?></th>
        </tr>
      </thead>
      <thead>
        <tr>
          <th scope="col">Entraineur : </th>
          <th scope="col"><a href="coach.php?id="><?php echo $team['coach']; ?></a></th>
        </tr>
      </thead>
      <thead>
        <tr>
          <th scope="col">Stade : </th>
          <th scope="col"><?php echo $team['name']?></th>
        </tr>
      </thead>
    </table>
  </div>
</div>
