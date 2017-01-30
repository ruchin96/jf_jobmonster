$('.btn-action-modal').click(function(e){
        // alert('a');
        e.preventDefault();
        var url = $(this).val()
        $.ajax({
          url: url,
          type:'GET',
          success: function(data){
              $("#allModal .modal-body").load(target, function() { 
                  $('#allModal').modal('show');
              });
                // $('#allModal').find('.modal-body').html(data);                
                // $('#allModal').modal('show');
            }
        });


        $('button[data-target=#myModal]').click(function(e){
        // alert('a');
        e.preventDefault();
        var url = $(this).val()
        $.ajax({
          url: url,
          type:'GET',
          success: function(data){
              $("#allModal .modal-body").load(target, function() { 
                  $('#allModal').modal('show');
              });
                // $('#allModal').find('.modal-body').html(data);                
                // $('#allModal').modal('show');
            }
        });
    })