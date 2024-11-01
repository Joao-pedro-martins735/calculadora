<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPIGOR</title>
</head>
<body>
    <center>
<h1>
        <?php 
        echo "Calculadora \u{1F30E}";
    $num1 =0;
    $num2 =0;
    $ValorTotal =0;
    $calcular ="somar"; 
    if (isset($_GET['num1'], $_GET['num2'], $_GET['calcular'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $calcular = $_GET['calcular'];

    }
    switch($calcular){
        case 'somar':
            $ValorTotal= $num1 + $num2;
            break;
            case 'subtrair':
                $ValorTotal= $num1 - $num2;
                break;
                case 'multiplicar':
                    $ValorTotal= $num1 * $num2;
                    break;
                    case 'dividir':
                        $ValorTotal= $num1 / $num2;
                        break;
    }
        ?>

    </h1>
    <p></p>
    <form>
        Primeiro Numero <br />
        <input type="Numero" name="num1"/><br />
        Segundo Numero <br />
        <input type="Numero" name="num2"/><br /> <br>
        <select name="calcular">
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option> <br>


        </select>
        <br>
        <input type="submit" value="Calcular"/> <br>
        <p>O Resultado é :<?= $ValorTotal ?></p>
         
    
    </form>
    </center>
    
</body>
</html>