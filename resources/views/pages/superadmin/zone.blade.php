<div class="tab-pane fade" id="zone-12" role="tabpanel" >

  <ul class="events__list">
     <li class="events__item">
        <div class="events__item--left">
           <span class="events__name" style="font-size: 28px;">ZONE</span>
           <span class="events__date" style="font-size: 15px;">Impostazioni</span>
        </div>
        <span class="">
          <button onclick="addZona();" data-toggle="tooltip" title="Aggiungi una nuova Zona" class="btn btn-sm btn-warning">
            <i class="fa fa-plus-circle"></i> AGGIUNGI
          </button>
        </span>
     </li>
  </ul>



  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Zona</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php if($zone && count($zone) > 0){ $conter=1;?>
        <?php foreach($zone as $zone_obj){ ?>
          <tr>
            <th scope="row"><?= $conter++ ?></th>
            <td><?= strtoupper($zone_obj->nome) ?></td>
            <td style="text-align:center">
              <i onclick="deleteZona(<?= $zone_obj->id ?>,'<?= strtoupper($zone_obj->nome) ?>')" style="color:red;cursor:pointer" data-toggle="tooltip" title="Elimina" class="fa fa-trash" aria-hidden="true"></i>
            </td>
          </tr>
        <?php } ?>
      <?php } ?>
    </tbdy>
  </table>


</div>



<!-- MODALE AGGIUNTA -->
<div class="modal" id="modale-add-zona" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">AGGIUNGI ZONA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="/zona/add" id="formAddZona">
        <div class="modal-body">
          <div style="background:#fff;">
             <div class="contact-form border-form row">
                <div class="col-md-12">
                   <label for="">Luogo</label>
                   <input type="text" class="form-control" id="nomeZona" name="nome">
                </div>

                <div class="col-md-12">
                   <label for="">Descrizione</label>
                   <textarea type="text" class="form-control" id="descrizioneZona" name="descrizione"></textarea>
                </div>

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn" data-dismiss="modal">ANNULLA</button>
          <button type="button" onclick="submitAddZona()" class="btn btn-warning">SALVA</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- MODALE AGGIUNTA -->


<form method="POST" action="/zona/del" id="formDelZona">
  <input type="hidden" name="id">
</form>
