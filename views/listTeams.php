<div class="container">
  <div class="row hidden-md-up">
    <?php foreach ($teams as $team)  { ?>
      <div class="col-md-4">
        <div class="card border shadow-lg p-3 mb-5 bg-white rounded" style="height: 38rem; width: 18rem;">
          <img src="<?php echo $team['logo']?>" class="card-img-top" alt="les équipes">
          <div class="card-body">
            <h5 class="card-title">
              <a href="./teams/<?php echo $team['id']?>"><?php echo $team['name']; ?></a>
            </h5>
            <p class="card-text"><strong>Date de création : </strong><?php echo $team['fundation_date']?></p>
            <p class="card-text"><strong>Président du club : </strong><?php echo $team['president']?></p>
            <p class="card-text"><strong>Stadium: </strong><?php echo $team['name']?></p>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
