<html>
    <title>Database Search</title>
    <style>
        body{
            background-color: #000000;
            margin: 0;
            padding: 0;
        }
        p{
            font-size: 50px;
            font-family: Arial, Helvetica, sans-serif;
            line-height: 5px;
            color: white;
        }
        p2{
            font-size: 30px;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
        }
        p3{
            font-size: 12px;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
        }
        p4{
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
        }
        p5 {
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            font-weight: bold;
        }
        a{
            font-size: 30px;
            color: #01ddff;
            font-family: Arial, Helvetica, sans-serif;
        }
        t{
            font-size: 25px;
            font-family: Arial, Helvetica, sans-serif;
        }
        result{
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
        }
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 100%;
            background-color: #9e1c00;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #841800;
        }
        #wrapper {
            text-align:center;
            margin-right:auto;
            margin-left:auto;
            margin-top:0px;
            height: 50px;
            background-color: #333333;
            padding:0px;
            color: white;
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            line-height: 50px;
            text-align: center;
        }
        .main {
            width: 90%;
            height: 90%;
            border-radius: 5px;
            padding: 20px;
            font-size: 20px;
        }
        .top {
            padding: 5px;
            width: 75%;
            border-radius: 5px;
            border-color: green;
            background-color: #333333;
        }
        .result {
            width: 50%;
            border-radius: 5px;
            /*background-color: #aaaaaa;*/
            padding: 20px;
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
        }
        a.header {
            text-decoration: none;
            color: white;
            font-size: 20px;
        }
        a:hover {
            color: #018758;
        }
        div.search {
            width: 50%;
            padding: 3px;
        }
    </style>
    <div id="wrapper">
		　<a class="header" target="_blank" href="contact">Contact</a>　<a class="header" target="_blank" href="dbs.php">Leaked Sites</a>　
	</div>
    <center><div class="main">
    <head>
    
    <center><b><p>Database Search</p></b></center>
    <br>
    </head>
    <body>
        
 <?php
	$lines = file('names.lst');
	$lines = preg_grep("/Johnson/", $lines);

	foreach($lines as $name) {
		echo "$name<br>";
	}

?>
	    
	    
	    
    </body>
</html>
