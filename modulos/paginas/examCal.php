<div class="card mt-5 m-5 p-0">
  <div class="card-body">
    <div class="row">
        <div class="col-4"><p class="h5">Erick Madrigal Flores</p></div>
        <div class="col-4"><p class="h5">Grupo: VISC2-803</p></div>
        <div class="col-4"><p class="h5">Materia: Programacion de sistemas</p></div>

        <div class="col-12 mt-5">
            <div class="alert alert-primary" role="alert">
                calificacion del examen 8.5>=10
            </div>
            <div class="alert alert-danger" role="alert">
                calificacion del examen 7<=8.4   
            </div>
            <div class="alert alert-warning" role="alert">
                calificacion del examen <=6.9
            </div>
        </div>
    </div>
  </div>
</div>
<div class="mt-5 m-5 p-0">
    <?php for($i=0; $i<35; $i++):?>
        <div class="card mt-5">
            <div class="card-header">
                Pregunta?
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="custom-control custom-radio m-3">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="custom-control custom-radio m-3">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="custom-control custom-radio m-3">
                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio3">Toggle this custom radio</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="custom-control custom-radio m-3">
                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio4">Or toggle this other custom radio</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alert alert-primary" role="alert">
                Correcto 
            </div>
            <div class="alert alert-warning" role="alert">
                Incorrecto 
            </div>
        </div>
    <?php endfor;?>
</div>