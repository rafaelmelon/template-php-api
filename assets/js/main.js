$(document).ready(function(){

  $('.js-lang').on('change', function() {
    var valueOption = this.value;
    switch (valueOption) {
      case "es":
        $('.symbol').html("€");
        $('.date').each(function() {
          var dateEs = $(this).text();
          dateEs = moment(dateEs, 'MM/DDYYYY').format('DD/MM/YYYY');
          $(this).text(dateEs);
        });
      break;
      case "en":
        $('.symbol').html("$");
        $('.date').each(function() {
          var dateEn = $(this).text();
          dateEn = moment(dateEn, 'DD/MM/YYYY').format('MM/DD/YYYY');
          $(this).text(dateEn);
        });
      break;
    }
  });

  $('.js-userTable').DataTable({
    searching: false,
    paging: false,
    info: false
  });

});
