$('.modal-body').on('submit','form',function (e) {
                e.preventDefault();
                var form = $(this);
                var formData = form.serialize();
                // var formData = new FormData(form);

                $.ajax({
                    url:form.attr('action'),
                    data: formData,
                    type: 'POST',
                    // dataType: 'JSON',
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(result){
                        if (result == 1) {
                            $('.message').html('<div class=\"note note-success\"> <strong>Success!</strong> Data added successfully</div>');
                            setTimeout(function(){
                                $('#allModal').modal('hide');
                                // location.reload();
                            },2000);
                        }else{
                            $('.message').html('<div class=\"note note-danger\"> <strong>Failed!</strong> Check There any field need to fill</div>');
                        }
                    },
                    error: function(){
                        alert('ERROR at PHP side!!');
                    }
                });
                return false;
            });