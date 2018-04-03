var photo_counter = 0;
Dropzone.options.realDropzone = {

    uploadMultiple: false,
    parallelUploads: 10000,
    // maxFilesize: 10,
    autoProcessQueue: false,
    previewsContainer: '#dropzonePreview',
    previewTemplate: document.querySelector('#preview-template').innerHTML,
    addRemoveLinks: true,
    dictRemoveFile: 'Remove',
    dictFileTooBig: 'Image is bigger than 40MB',

    // The setting up of the dropzone
    init:function() {

      var myDropzone = this;
      $('#submitfiles').on("click", function (e) {

        e.preventDefault();
        e.stopPropagation();

        if(myDropzone.getQueuedFiles().length > 0){
          myDropzone.processQueue();
        }else{
          alert('No Files to upload!');
        }

      });

    },
    accept: function(file, done) {
        //console.log(file);
        return done();
    }
    /*
    ,
    totaluploadprogress : function(progress) {
        $("#total-progress .progress-bar").style.width = progress + "%";
    },
    queuecomplete : function(progress) {
        document.querySelector("#total-progress").style.opacity = "0";
    },
    sending : function(file) {
        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1";
        // And disable the start button
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
    }
    */
}
