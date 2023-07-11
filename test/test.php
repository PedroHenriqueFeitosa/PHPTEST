<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>
    <?php
// Criar uma conexão com o banco mysql
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Contagem";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se a conexão foi bem sucedida
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Executar uma consulta sql para obter os dados do banco
$sql = "SELECT * FROM Carros";
$result = $conn->query($sql);

// Criar um array para armazenar os dados do banco
$data = array();

// Percorrer os resultados da consulta e adicionar ao array
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}

// Fechar a conexão com o banco
$conn->close();

// Converter o array em um formato json
$json_data = json_encode($data);

// Criar um arquivo temporário para armazenar o json
$tmp_file = tmpfile();
fwrite($tmp_file, $json_data);

// Obter o nome do arquivo temporário
$meta_data = stream_get_meta_data($tmp_file);
$tmp_filename = $meta_data["uri"];

// Executar o programa em python passando o nome do arquivo temporário como argumento
$python_program = "/home/hp/Área de Trabalho/VCodigos/Ultima Versão/[FINAL] HaarCascade_carDetectionTEST].py";
exec("python $python_program $tmp_filename");

// Fechar o arquivo temporário
fclose($tmp_file);
?>

</body>

</html>