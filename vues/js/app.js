$(document).ready(function () {

    var tab = [];
    var x = 0;

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100, // Creates a dropdown of 15 years to control year,
        today: 'Today',
        clear: 'Clear',
        close: 'Ok',
        closeOnSelect: false // Close upon selecting a date,
    });
    
    $('.chips-autocomplete').material_chip({
    autocompleteOptions: {
      data: {
        'romance': null,
        'action': null,
        'comédie': null,
        'drame': null,
        'musical': null,
        'fantastique': null,
        'aventure': null,
        'science-fiction': null,
        'policier': null,
        'thriller': null,
        'road-trip': null,
        'feel-good': null,
        'animation': null,
        'historique': null
      },
      limit: Infinity,
      minLength: 1
    }
  });
    
    $('.chips').on('chip.add', function (e, chip) {
        // you have the added chip here
        tab.push(chip.tag);
        console.log(tab);
    });

    $('.chips').on('chip.delete', function (e, chip) {
        // you have the deleted chip here
        console.log(chip.tag);
    });
    /*Utiliser les event add et delete*/

    $('form').submit(function(){
        //Faire une condition pour ne récuperer que l'année
        $('#tags').val(tab);
    });

});
