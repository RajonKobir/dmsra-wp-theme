$( document ).ready(function() {
var onlineOfflineFieldID = dmsra_custom_js_data.onlineOfflineFieldID;
var coursesFieldID = dmsra_custom_js_data.coursesFieldID;
var priceFieldID = dmsra_custom_js_data.priceFieldID;


var onlineOfflineFieldValue = '';
var coursesFieldValue = '';
var newValue = '';

setTimeout(function(){

    function updatePriceField(){
        onlineOfflineFieldValue = $( '#nf-field-' + onlineOfflineFieldID ).val();
        coursesFieldValue = $( '#nf-field-' + coursesFieldID ).val();
        newValue = 1;

        switch (true) {
            case ( onlineOfflineFieldValue === 'online' ) :
                switch (true) {
                    case ( coursesFieldValue === '1' ) :
                        newValue = 5000;
                        break;
                    case ( coursesFieldValue === '2' ) :
                        newValue = 7000;
                        break;
                    case ( coursesFieldValue === '3' ) :
                        newValue = 500;
                        break;
                    case ( coursesFieldValue === '4' ) :
                        newValue = 7000;
                        break;
                    case ( coursesFieldValue === '5' ) :
                        newValue = 2500;
                        break;
                    case ( coursesFieldValue === '6' ) :
                        newValue = 1500;
                        break;
                    case ( coursesFieldValue === '7' ) :
                        newValue = 7000;
                        break;
                    default:
                        newValue = 0;
                }
                break;
            case ( onlineOfflineFieldValue === 'offline' ) :
                switch (true) {
                    case ( coursesFieldValue === '1' ) :
                        newValue = 7000;
                        break;
                    case ( coursesFieldValue === '2' ) :
                        newValue = 1000;
                        break;
                    case ( coursesFieldValue === '3' ) :
                        newValue = 1500;
                        break;
                    case ( coursesFieldValue === '4' ) :
                        newValue = 10000;
                        break;
                    case ( coursesFieldValue === '5' ) :
                        newValue = 3000;
                        break;
                    case ( coursesFieldValue === '6' ) :
                        newValue = 2500;
                        break;
                    case ( coursesFieldValue === '7' ) :
                        newValue = 10000;
                        break;
                    default:
                        newValue = 0;
                }
                break;
            default:
                newValue = 0;
        }

        $( '#nf-field-' + priceFieldID ).val( newValue ).trigger( 'change' );
    }

    updatePriceField();

    $( '#nf-field-' + onlineOfflineFieldID ).on('change', function() {
        updatePriceField();
    });

    $( '#nf-field-' + coursesFieldID ).on('change', function() {
        updatePriceField();
    });

}, 1000);


});