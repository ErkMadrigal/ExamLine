<link href="<?php echo $raizE;?>css/quill.snow.css" rel="stylesheet">

<div class="row m-0 w-100 mt-5">
   <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">set up your exam</h5>
                <form action="">
                    <div class="row">
                        <div class="form-grup mt-4 col-12 mb-5">
                            <div style="" id="editor"></div>
                            <div class="invalid-tooltip">
                                Por favor ingresa una pregunta.
                            </div>  
                        </div>
                        <div class="form-grup mt-4 col-lg-6 col-md-6 col-sm-12">
                          <textarea id="resp1" class="form-control is-valid" placeholder="write a correct answer" required name="correct" id="" cols="20" rows="2"></textarea> 
                            <div class="valid-feedback">
                                good question!
                            </div>
                            <div class="invalid-tooltip">
                                Por favor ingresa una Respuesta Correcta.
                            </div>  
                        </div>   
                        <div class="form-grup mt-4 col-lg-6 col-md-6 col-sm-12">
                            <textarea id="resp2"class="form-control is-invalid" placeholder="write a wrong answer" required name="error1" id="" cols="20" rows="2"></textarea>
                            <div class="invalid-tooltip">
                                Por favor ingresa una Respuesta Erronea.
                            </div>
                            <div class="invalid-feedback">
                                wrong question
                            </div>
                        </div>
                        <div class="form-grup mt-4 col-lg-6 col-md-6 col-sm-12">
                            <textarea id="resp3"class="form-control is-invalid" placeholder="write a wrong answer" required name="error2" id="" cols="20" rows="2"></textarea>
                            <div class="invalid-tooltip">
                                Por favor ingresa una Respuesta Erronea.
                            </div>
                            <div class="invalid-feedback">
                                wrong question
                            </div>
                        </div>
                        <div class="form-grup mt-4 col-lg-6 col-md-6 col-sm-12">
                            <textarea id="resp4"class="form-control is-invalid" placeholder="write a wrong answer" required name="error3" id="" cols="20" rows="2"></textarea>
                            <div class="invalid-tooltip">
                                Por favor ingresa una Respuesta Erronea.
                            </div>
                            <div class="invalid-feedback">
                                wrong question
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <a href="#" class="card-link">Cancel</a>
                        <a href="#" class="card-link">rise</a>
                    </div>
                </form>
            </div>
        </div>
   </div>
</div>
<div class="m-3 mt-5">
    <div class="alert alert-primary col-lg-12" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="alert-heading">exam view</h4>
        <p>the questions will be stored after uploading and you can see them in a timely manner</p>
        <hr>
        <p class="mb-0">if you delete a question, just execute the action on the button that is on the footer</p>
    </div>
</div>
<div class="row m-0 mt-5">
    <?php for($i=0; $i<45; $i++):?>
        <div class="col-lg-4 col-md-3">
            <div class="card border-info mb-3">
                <div class="card-header">Pregunta <?php echo $i+1;?></div>
                <div class="card-body text-info">
                    <h5 class="card-title text-dark">Que es el movimiento?</h5>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio3">Toggle this custom radio</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio4">Or toggle this other custom radio</label>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <button type="button" class="btn btn-danger">remove</button>
                </div>
            </div>
        </div>
    <?php endfor;?>
</div>

<!-- Include the Quill library -->
<script src="<?php echo $raizE;?>js/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor', {     
    placeholder: 'write your question...',
    theme: 'snow',

  });

</script>

