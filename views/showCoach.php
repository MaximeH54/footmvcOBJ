<div class="container text-center">
  <h1 class="font-weight-bold"><?= $coach['name']; ?></h1>
  <div class="row">
    <img src="<?php echo $coach['photo']?>" class="card-img-top rounded mx-auto d-block"style="margin-bottom: 5rem; width: 17rem;" alt="les équipes">    
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Entraineur : </th>
          <th scope="col"><?php echo $coach['name']; ?></a></th>
        </tr>
        <tr>
          <th scope="col">Date de naissance : </th>
          <th scope="col"><?php echo $coach['birthday_date']; ?></a></th>
        </tr>
        <tr>
          <th scope="col">Nationalité : </th>
          <th scope="col"><?php echo $coach['nationality']; ?></a></th>
        </tr>
      </thead>
      <thead>
    </table>
  </div>
</div>
