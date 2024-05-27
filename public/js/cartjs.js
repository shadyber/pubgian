
var qnt=1;
function getqnt(){
    qnt = document.getElementById("qtybutton").value;


}

$( ".add-to-cart" ).click(function() {

    var itemid=$(this).attr("itemid");
    var cbtn=$(this);
    var itemqnt=$(this).attr('qnt')



    $.get("/multipleaddtocart/"+itemid+"/"+qnt, function(data){
        // Display the returned data in browser
        cbtn.animate({
            opacity: 0.25,
            left: "+=5000",
            top: "-=5000",
            height: "toggle"
        }, 50, function() {
            // Animation complete.
        });
        $('#cartCount').html(data);
    });
});
