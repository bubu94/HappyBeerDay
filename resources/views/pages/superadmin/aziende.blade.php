<div class="tab-pane fade" id="aziende-12" role="tabpanel" >

  <ul class="events__list">
     <li class="events__item">
        <div class="events__item--left">
           <span class="events__name" style="font-size: 28px;">AZIENDE</span>
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
        <th scope="col">Azienda</th>
        <th scope="col">Icona</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php if($aziende && count($aziende) > 0){ $conter=1;?>
        <?php foreach($aziende as $azienda_obj){ ?>
          <tr>
            <th scope="row"><?= $conter++ ?></th>
            <td><?= strtoupper($azienda_obj->nome) ?></td>
            <td></td>
            <td style="text-align:center">
              <i fata-toggle="tooltip" title="Vai alla pagina dell'Azienda" style="color:#1e97ff;cursor:pointer" class="fa fa-link"></i>
            </td>
          </tr>
        <?php } ?>
      <?php } ?>
    </tbdy>
  </table>


</div>
