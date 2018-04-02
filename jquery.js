$(document).ready(function(){
      $('#traks').keyup(function(){
           let query = $(this).val();
           if(query != '')
           {
                $.ajax({
                     url:"suggest.php",
                     method:"POST",
                     data:{query:query},
                     success:function(data)
                     {
                          $('#traklist').fadeIn();
                          $('#traklist').html(data);
                     }
                });
           }
      });
      $(document).on('click', 'li', function(){
           $('#traks').val($(this).text());
           $('#traklist').fadeOut();
      });
 });
 

 $(document).ready(function(){
    $('#traksetter').click(function(){
     let query2 = $('#traks').val();
      if(query2 != '')
           {        $.ajax({
                     url:"traksearch.php",
                     method:"POST",
                     data:{query2:query2},
                     success:function(data)
                     {

                      $('#strengthfind').html(data);}

        });

        $.ajax({
        url : 'traksearch.php',
        type : 'POST',
        data : data,
        dataType : 'json',
        success : function (data) {
           $('#minutes').html(data)
        },
        error : function () {
           alert("error");
        }
    });

      }
  })

});
