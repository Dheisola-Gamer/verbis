<div class="col h1"><?= Kohana::message('page', 'new.female') . " " . Kohana::message('institution', 'institution.singular') ?></div>
<div class="col-md-8 order-md-1">
    <form name="frmUserNew" enctype="multipart/form-data" action="<?= $actionForm ?>" method="post" accept-charset="uft-8" class="needs-validation" novalidate>
        <div class="row">
            <div class="col">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button title="<?= Kohana::message('button', 'save') ?>" name="btnSave" id="btnSave" type="submit" class="btn btn-primary"><?= HTML::image(Kohana::message('images', 'icons.save')) ?></button>                    
                    <button title="<?= Kohana::message('button', 'clear') ?>" name="btnClear" id="btnClear" type="reset" class="btn btn-primary"><?= HTML::image(Kohana::message('images', 'icons.clear')) ?></button>                    
                    <button title="<?= Kohana::message('button', 'return') ?>" name="btnBack" id="btnBack" onclick="back();" type="button" class="btn btn-primary"><?= HTML::image(Kohana::message('images', 'icons.back')) ?></button>
                    <button title="<?= Kohana::message('button', 'cancel') ?>" name="bnCancel" id="btnCancel" onclick="go('<?= URL::site('home') ?>');" type="button" class="btn btn-primary"><?= HTML::image(Kohana::message('images', 'icons.cancel')) ?></button>
                </div>
            </div>
        </div>
        <br/>
        <div class="mb-3">
            <label for="txtInstitution"><?= Kohana::message('Institution', 'institution.singular') ?></label>
            <input tabindex="1" name="txtInstitution" type="text" class="form-control" id="txtInstitution" placeholder="<?= Kohana::message('institution', 'institution.singular') ?>" required />
            <div class="invalid-feedback"><?= Kohana::message('warning', 'requiredField') ?></div>
        </div>
    </form>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';

        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>