<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es.18 Nencini</title>

    <style>
        table, tr, td, th {
            border: black solid 1px;
            padding: 5px;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    
    <table>
        <tr>
            <th>Indirizzo civico</th>
            <th>Metri quadri</th>
            <th>Prezzo/metro quadro</th>
            <th>Costo totale</th>
        </tr>
    <?php
        $house = array("address" => "Via Figliano-Ferracciano, 2A",
                        "square_meters" => 300.0,
                        "price_per_meter" => 1166.0,);  
        $house["total_price"] = $house["square_meters"]*$house["price_per_meter"];
        $table_output = "<tr>";
        foreach ($house as $value) {
            $table_output .= "<td> $value </td>";
        }
        echo $table_output .= "</tr>";
    ?>

    </table>

</body>
</html>