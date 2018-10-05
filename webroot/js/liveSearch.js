
//Getting value from "ajax.php".

function fill(Value) {

   //Assigning value to "search" div in "search.php" file.

     $('#search').val(Value);




   //Hiding "display" div in "search.php" file.
   $('#show').hide();

}

$(document).ready(function() {
      
      $('#show').removeAttr('hidden');
      $('#show').hide();

   //On pressing ;a key on "Search box" in "search.php" file. This function will be called.

   $("#search").keyup(function() {

       //Assigning search box value to javascript variable named as "name".

       var name = $('#search').val();

       //Validating, if "name" is empty.

       if (name == null || name == ""  ) {

           //Assigning empty value to "display" div in "search.php" file.

           $('#show').html("");
           $('#show').hide();


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
               beforeSend: function(){
                 $('#spinner').removeAttr('hidden');
                 $('#spinner').show();
               },
               complete: function(){

                  $('#spinner').hide();
               },
               error: function(){
                   $('#spinner').hide();
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
                       var html = '<li id="liveSearchLi" style="border-radius:20px;">';
                       $.each( data, function( key, content ) {
                        for (var i = 0; i < content.length; i++) {
                            array1.push(content[i].content['Name']);
                            html += '<ul class="liveSearchLu"><a style="text-decoration: none" href=../detail/'+encodeURI(content[i].content['Name'])+'>'+ content[i].content['Name']+'</a></ul>';

                        }
                        html += '</li>';
                        $("#show").html(html).show().fadeIn();
                        });



                     }




               }

           });

       }

   });

});
