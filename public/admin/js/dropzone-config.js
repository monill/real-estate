let photos_counter = 0;

Dropzone.options.myDropzone = {
    paramName: "file",
    acceptedFiles: 'image/*',
    uploadMultiple: true,
    parallelUploads: 2,
    maxFilesize: 3,
    // previewsContainer: '#dropzonePreview',
    // previewTemplate: document.querySelector('#preview-template').innerHTML,
    addRemoveLinks: true,
    dictRemoveFile: 'Remover',
    dictFileTooBig: 'A imagem é maior que 3MB',
    timeout: 10000,

    // The setting up of the dropzone
    init: function () {
        this.on("removedfile", function (file) {
            $.ajax({
                type: 'POST',
                url: 'upload/delete',
                data: {id: file.name, _token: $('[name="_token"]').val()},
                dataType: 'html',
                success: function (data) {
                    let rep = JSON.parse(data)
                    console.log(data);
                    if (rep.code == 200) {
                        photos_counter--;
                        $("#photoCounter").text("(" + photos_counter + ")");
                        location.reload();
                    }
                    //Atualizar a pagina assim que terminar o upload
                    //Mas nao esta funcionando :(
                    location.reload();
                }
            });
        });
        this.on('completemultiple', function (file) {
            //Atualizar a pagina assim que terminar o upload
            //Mas nao esta funcionando :(
            location.reload();
        });
    },
    error: function (file, response) {
        if ($.type(response) === "string") {
            let message = response; //dropzone sends it's own error messages in string
        } else {
            let message = response.message;
        }
        file.previewElement.classList.add("dz-error");
        _ref = file.previewElement.querySelectorAll("[data-dz-errormessage]");
        _results = [];
        for (i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i];
            _results.push(node.textContent = message);
        }
        return _results;
    },
    success: function (file, done) {
        photos_counter++;
        $("#photoCounter").text("(" + photo_counter + ")");
        //Atualizar a pagina assim que terminar o upload
        //Mas nao esta funcionando :(
        location.reload();
    }
};