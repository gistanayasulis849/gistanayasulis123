<! DOCTYPE html>
<html>
<head>
    <title> Contoh Papan Tanda Tangan PHP - ItSolutionStuff.com </title>
    <link rel = "stylesheet" type = "text / css" href = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css" >   
  
    <script type = "text / javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" > </script>   
    <link type = "text / css" href = "http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel = "stylesheet" >    
    <script type = "text / javascript" src = "http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" > </script>  
  
    <script type = "text / javascript" src = "asset / jquery.signature.min.js" > </script>  
    <link rel = "stylesheet" type = "text / css" href = "asset / jquery.signature.css" >   
  
    <style>
        . kbw - tanda tangan { width : 400px ; tinggi : 200px ;}  
        #sig kanvas {
            lebar: 100%! penting;
            tinggi: otomatis;
        }
    </style>
  
</head>
<body>
  
<div class = "container" > 
  
    <form method = "POST" action = "upload.php" >  
  
        <h1> Contoh Papan Tanda Tangan PHP - ItSolutionStuff.com </h1>
  
        <div class = "col-md-12" > 
            <label class = "" for = "" > Tanda tangan: </label>  
            <br/>
            <div id = "sig" > </div>  
            <br/>
            <button id = "clear" > Hapus Tanda Tangan </button> 
            <textarea id = "signature64" name = "signed" style = " display : none " > </textarei>   
        </div>
  
        <br/>
        <button class = "btn btn-success" > Kirim </button> 
    </form>
  
</div>
  
<script type = "text / javascript" > 
    var sig = $ ( '#sig' ). tanda tangan ({ syncField : '# signature64' , syncFormat : 'PNG' });  
    $ ( '#clear' ). klik ( fungsi ( e ) { 
        e . preventDefault ();
        sig . tanda tangan ( 'jelas' );
        $ ( "# signature64" ). val ( '' );
    });
</script>
  
</ Body>
</html>
