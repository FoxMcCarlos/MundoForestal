
//Getting value from "ajax.php".

function fill(Value) {

   //Assigning value to "search" div in "search.php" file.

     $('#search').val(Value);




   //Hiding "display" div in "search.php" file.
   $('#show').hide();
}

$(document).ready(function() {


   //On pressing ;a key on "Search box" in "search.php" file. This function will be called.

   $("#search").keyup(function() {

       //Assigning search box value to javascript variable named as "name".

       var name = $('#search').val();

       //Validating, if "name" is empty.

       if (name == null || name == ""  ) {

           //Assigning empty value to "display" div in "search.php" file.

           $('#show').html("");

       }

       //If name is not empty.

       else {

           //AJAX is called.

           $.ajax({

               //AJAX type is "Post".

               type: "POST",

               //Data will be sent to "ajax.php".

               url: "../Pages/buscar",

               //Data, that will be sent to "ajax.php".
               datatype:JSON,
               data: {

                   //Assigning value of "name" into "search" variable.

                   search: name

               },

               //If result found, this funtion will be called.

               success: function(data) {

                   //Assigning result to "display" div in "search.php" file.

                     if ($('#search').val() == "" || $('#search').val() == null) {
                          $('#show').hide();
                     }else if (jQuery.isEmptyObject(data['data'])) {
                        $('#show').hide();
                        $('#show').html("");

                     }
                     else {

                       var array1 = [];
                       $.each( data, function( key, content ) {
                        for (var i = 0; i < content.length; i++) {
                            array1.push(content[i].Contents['Name']);
                            html = $('<div>'+ content[i].Contents['Name']+'</div>');
                            $("#show").html(array1).show();
                        }
                        });



                     }




               }

           });

       }

   });

});
