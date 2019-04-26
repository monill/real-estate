let total_photos_counter = 0;

Dropzone.options.myDropzone = {
    paramName: "file",
    uploadMultiple: true,
    parallelUploads: 2,
    maxFilesize: 3,
    addRemoveLinks: true,
    dictRemoveFile: 'Remover arquivo',
    dictFileTooBig: 'A imagem é maior que 3MB',
    timeout: 10000,

    init: function () {
        this.on("removedfile", function (file) {
            $.post({
                url: '/delete-images',
                data: {id: file.name, _token: $('[name="_token"]').val()},
                dataType: 'json',
                success: function (data) {
                    total_photos_counter--;
                    $("#counter").text("# " + total_photos_counter);
                }
            });
        });
    },
    success: function (file, done) {
        total_photos_counter++;
        $("#counter").text("# " + total_photos_counter);
    }
};