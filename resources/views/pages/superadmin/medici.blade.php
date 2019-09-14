<div class="tab-pane fade" id="medici-12" role="tabpanel" >

  <ul class="events__list">
       <li class="events__item">
          <div class="events__item--left">
             <span class="events__name" style="font-size: 28px;">MEDICI</span>
             <span class="events__date" style="font-size: 15px;">Impostazioni</span>
          </div>
          <span class="">
            <!-- <button data-toggle="tooltip" title="Aggiungi un nuovo Sport" class="btn btn-sm btn-warning"><i class="fa fa-plus-circle"></i> AGGIUNGI</button> -->
          </span>
       </li>
  </ul>


  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Medico</th>
        <th scope="col">Icona</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php if($medici && count($medici) > 0){ $conter=1;?>
        <?php foreach($medici as $medico){ ?>
          <tr>
            <th scope="row"><?= $conter++ ?></th>
            <td><?= strtoupper($medico->name) ?></td>
            <td></td>
            <td style="text-align:center">
              <i fata-toggle="tooltip" title="Vai alla pagina del Medico" style="color:#1e97ff;cursor:pointer" class="fa fa-link"></i>
            </td>
          </tr>
        <?php } ?>
      <?php } ?>
    </tbdy>
  </table>

</div>
