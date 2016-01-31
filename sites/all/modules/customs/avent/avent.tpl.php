<div class="avent">
  <a href="http://www.toutpourmonchien.fr" target="_blank">
    <img class="papanoel" width="250px" src="http://www.toutpourmonchien.fr/sites/all/modules/customs/avent/images/noun_87160_cc_blanc.png" />
  </a>
  <h1>
    Le Calendrier de l'Avent de Tout Pour Mon Chien
  </h1>
  <div class="intro">
  Chaque jour, un cadeau à gagner en participant à notre tirage au sort !
</div>
  <?php if ($actif): ?>
  <ul class="noel">
    <?php foreach ($all as $k => $data): ?>
      <?php if ($data['link']): ?>
        <a href="<?php echo $data['link']; ?>" target="_blank">
      <?php endif; ?>
      <li class="<?php echo $data['class']; ?>">
          <span class="jour"><?php echo $k; ?></span>
          <?php if ($data['past']): ?>
            <img class="past" src="<?php echo $data['past']; ?>" />
          <?php endif; ?>
      </li>
    <?php if ($data['link']): ?>
    </a>
    <?php endif; ?>
    <?php endforeach; ?>
  </ul>
  <?php else: ?>
    <h2>
      Encore un peu de patience ... 
  </h2>
  <?php endif; ?>
  <a style="display:block;text-align:center;color:#ffffff" target="_blank" href="http://www.toutpourmonchien.fr/resultats-des-gagnants-au-calendrier-de-lavent">Voir les résultats du Jeu</a>
  <a style="display:block;text-align:center;" href="http://www.toutpourmonchien.fr" target="_blank">
    <img class="" width="250px" src="http://www.toutpourmonchien.fr/sites/all/modules/customs/avent/images/logo_tpmc.png" />
  </a>
</div>