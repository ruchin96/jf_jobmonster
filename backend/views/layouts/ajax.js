$('.modal-body').on('submit','form',function (e) {
                e.preventDefault();
                var form = $(this);

                $.post(
                    form.attr('action'),
                    form.serialize()
                ).done(function(result){
                    if (result == 1) {
                        $('.message').html('<div class=\"note note-success\"> <strong>Success!</strong> Data added successfully</div>');
                        setTimeout(function(){
                            $('#allModal').modal('hide');
                            // location.reload();
                        },2000);
                    }else{
                        $('.message').html('<div class=\"note note-danger\"> <strong>Failed!</strong> Check There any field need to fill</div>');
                    }
                }).fail(function(){
                    console.log('server error');
                });
                return false;
            });