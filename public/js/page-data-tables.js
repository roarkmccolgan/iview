var App = (function () {

  App.dataTables = function( ){
    'use strict'
    
    //Add dataTable Icons
    var functions = $('<a class="btn btn-danger btn-xs delete" href="#" data-original-title="Remove" data-toggle="tooltip"><i class="fa fa-times"></i></a>');
    $("#datatable-icons tbody tr td:last-child").each(function(){
      $(this).html("");
      functions.clone().appendTo(this);
    });

    //Horizontal Icons dataTable
    $('#datatable-icons').dataTable();
    //Search input style
    $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
    $('.dataTables_length select').addClass('form-control');  
  };

  return App;
})(App || {});
