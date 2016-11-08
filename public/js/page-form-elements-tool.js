var App = (function () {

  App.formElements = function( ){
    'use strict'


    

    $('#reporting').daterangepicker(
      {},//options
      function(start, end, label) {
        console.log("A new date range was chosen: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));

        $('#from').val(start.format('DD-MM-YYYY'));
        $('#to').val(end.format('DD-MM-YYYY'));
        $('#setDateRange').submit();
      }
    );
    

    

  };

  return App;
})(App || {});
