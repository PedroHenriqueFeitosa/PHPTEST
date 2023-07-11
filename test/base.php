<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
    </script>

    <style>
    .box {
        width: 750px;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-top: 100px;
    }
    </style>
</head>

<body>
    <div class="container box">
        <h3 align="center">
            Geeks for Geeks Import JSON
            data into database
        </h3><br />

        <?php
          
            // Server name => localhost
            // Username => root
            // Password => empty
            // Database name => test
            // Passing these 4 parameters
            $connect = mysqli_connect("localhost:3306", "root", "", "Contagem");
            $query = '';
            $table_data = '2023-06-04';
            
            // json file name
            $filename = "Pedro.json";
            
            // Read the JSON file in PHP
            $data = file_get_contents($filename); 
            
            // Convert the JSON String into PHP Array
            $array = json_decode($data, true); 
            
            // Extracting row by row
            foreach($array as $row) {
  
                // Database query to insert data 
                // into database Make Multiple 
                // Insert Query 
                $query .= 
                "INSERT INTO Carros VALUES 
                ('".$row["idcarro"]."', '".$row["Data e Hora"]."', 
                '".$row["Carros"]."'); "; 
               
                $table_data .=
                '
                <tr>
                    <td>'.$row["idcarro"].'</td>
                    <td>'.$row["Data e Hora"].'</td>
                    <td>'.$row["Carros"].'</td>
                </tr>
                '; // Data for display on Web page
            }
  
            if(mysqli_multi_query($connect, $query)) {
                echo '<h3>Inserted JSON Data</h3><br />';
                echo '
                <table class="table table-bordered">
                <tr>
                    <th width="45%">Name</th>
                    <th width="10%">Gender</th>
                    <th width="45%">Subject</th>
                </tr>
                ';
                echo $table_data;  
                echo '</table>';
            }
          ?>
        <br />
    </div>
</body>

</html>