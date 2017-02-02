var App = (function () {

  App.dataTables = function( ){
    'use strict'
    
    //Add dataTable Icons
    var functions = $('<a class="btn btn-danger btn-xs delete" href="#" data-original-title="Remove" data-toggle="tooltip"><i class="fa fa-times"></i></a>');
    var assessment = false;
    $("#datatable-icons tbody tr td:last-child").each(function(){
      $(this).html("");
      if($("#datatable-icons").attr('data-assessments') && !assessment){
        functions = functions.add($('<a class="btn btn-success btn-xs resend md-trigger" data-modal="resend-modal" href="#" data-original-title="Resend Assessment" data-toggle="tooltip"><i class="fa fa-envelope-o"></i></a>'));
        assessment = true;
      }
      functions.clone().appendTo(this);
    });

    //Horizontal Icons dataTable
    $('#datatable-icons').dataTable();
    $('#datatable-icons').on( 'draw.dt', function () {
      $('.md-trigger').modalEffects();
    } );
    //Search input style
    $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
    $('.dataTables_length select').addClass('form-control');  
  };

  return App;
})(App || {});
