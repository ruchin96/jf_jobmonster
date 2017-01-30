$(function(){
    App.init();
    Dashboard.init();
    TableManageResponsive.init();
    alert('aa');
    $('.btn-action-modal').click(function(e){
        // alert('a');
        e.preventDefault();
        // jQuery.noConflict();
        var url = $(this).val()
        $.ajax({
          url: url,
          type:'GET',
          cache: false,
          // async: true,
          success: function(data){
              // alert(data);  
              // $('#allModal .modal-body').html(data);                
              $('#allModal').modal('show');
          }
        });
    })
});