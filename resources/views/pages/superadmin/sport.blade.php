  <div class="tab-pane fade " id="sport-12" role="tabpanel"
     aria-labelledby="home-12-tab">

    <ul class="events__list">
         <li class="events__item">
            <div class="events__item--left">
               <span class="events__name" style="font-size: 28px;">SPORT</span>
               <span class="events__date" style="font-size: 15px;">Impostazioni</span>
            </div>
            <span class="">
              <button onclick="addSport();" data-toggle="tooltip" title="Aggiungi un nuovo Sport" class="btn btn-sm btn-warning">
                <i class="fa fa-plus-circle"></i> AGGIUNGI
              </button>
            </span>
         </li>
    </ul>



    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Sport</th>
          <th scope="col">Icona</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php if($sport && count($sport) > 0){ $conter=1;?>
          <?php foreach($sport as $sport_obj){ ?>
            <tr>
              <th scope="row"><?= $conter++ ?></th>
              <td><?= strtoupper($sport_obj->nome_sport) ?></td>
              <td><?= $sport_obj->icona ?></td>
              <td style="text-align:center">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                <i onclick="deleteSport(<?= $sport_obj->id ?>,'<?= strtoupper($sport_obj->nome_sport) ?>')" style="color:red;cursor:pointer" data-toggle="tooltip" title="Elimina" class="fa fa-trash" aria-hidden="true"></i>
              </td>
            </tr>
          <?php } ?>
        <?php } ?>
      </tbdy>
    </table>

</div>



<!-- MODALE AGGIUNTA -->
<div class="modal" id="modale-add-sport" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">AGGIUNGI SPORT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div style="background:#fff;">
           <div class="contact-form border-form row">
              <div class="col-md-12">
                 <label for="">Nome Sport</label>
                 <input type="text" class="form-control" id="nomeSport" name="name">
              </div>

              <div class="col-md-12">
                 <label for="">Descrizione</label>
                 <textarea type="text" class="form-control" id="descrizioneSport" name="name"></textarea>
              </div>

          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn" data-dismiss="modal">ANNULLA</button>
        <button type="button" class="btn btn-warning">SALVA</button>
      </div>
    </div>
  </div>
</div>
<!-- MODALE AGGIUNTA -->
