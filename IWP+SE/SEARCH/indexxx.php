<html>
  <head>
    <title>Ajax Search Box using PHP and MySQL</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="typeahead.min.js"></script>
    <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'questto',
        remote:'search.php?key=%QUERY',
        limit : 10
    });
});
    </script>
   
  </head>
  <body bgcolor="red">
    
 
  <input type='text' name='quest' class="typeahead tt-query" id='sear' autocomplete="off" spellcheck="false" placeholder ='Ask A Question'>
  <input type='text' name='quest' class="typeahead tt-query" id='sear' autocomplete="off" spellcheck="false" placeholder ='Ask A Question'>

  </body>
</html>
