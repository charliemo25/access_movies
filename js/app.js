$(document).ready(function () {
      $('.carousel').carousel();
        
    var tab = [];
    var tags = [
                'romance',
                'action',
                'comédie',
                'drame',
                'musical',
                'fantastique',
                'aventure',
                'science-fiction',
                'policier',
                'thriller',
                'road-trip',
                'feel-good',
                'animation',
                'historique'
            ];

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
        },
        placeholder: 'Entrer les genres'
    });

    $('.chips').on('chip.add', function (e, chip) {
        // you have the added chip here
        tab.forEach(function (index) {
            if (chip.tag == index) {
                return false;
            }
        });
        tab.push(chip.tag);
        console.log(tab);
    });

    $('.chips').on('chip.delete', function (e, chip) {
        // you have the deleted chip here
        tab = tab.filter(function (e) {
            return e != chip.tag;
        });
        console.log(tab);
    });

    $('form').submit(function (e) {
        $('#tags').val(tab);
        
        console.log(tab);
    });

});
