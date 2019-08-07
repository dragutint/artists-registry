<?php
    include 'konekcija.php';
    include 'film.php';
    include 'glumac.php';
    include 'nominacija.php';

    $search = $_GET['search'];

    $nominacije = Nominacija::vratiSveNominacijeSearch($konekcija,$search);


 ?>
<table class="table table-hover">
  <thead>
    <tr>
        <th>Glumac</th>
        <th>Film</th>
        <th>Produkcija</th>
        <th>Godina</th>
        <th>Razlog nominacije</th>
    </tr>
  </thead>
  <tbody>
    <?php
          foreach($nominacije as $n){
     ?>
     <tr>
       <td><?php echo $n->getGlumac()->getIme(); ?></td>
       <td><?php echo $n->getFilm()->getNaziv(); ?></td>
       <td><?php echo $n->getFilm()->getProdukcija(); ?></td>
       <td><?php echo $n->getFilm()->getGodina(); ?></td>
       <td><?php echo $n->getRazlogNominacije(); ?></td>
     </tr>
<?php } ?>
  </tbody>
</table>
