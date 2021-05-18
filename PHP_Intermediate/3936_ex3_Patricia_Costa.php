<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de data e hora</title>
</head>
<body>
    
    <?php

        date_default_timezone_set("Europe/Lisbon");

        function data_de_hoje()
        {         
            $agora = getdate();
            
            $dias_semana_pt = [
                "Domingo",
                "2ª Feira",
                "3ª Feira",
                "4ª Feira",
                "5ª Feira",
                "6ª Feira",
                "Sábado"
            ];

            $meses_pt = [
                "Janeiro",
                "Fevereiro",
                "Março",
                "Abril",
                "Maio",
                "Junho",
                "Julho",
                "Agosto",
                "Setembro",
                "Outubro",
                "Novembro",
                "Dezembro"
            ];

            $dia_da_semana = $dias_semana_pt[$agora["wday"]];
            $dia_do_mes = $agora["mday"];
            $mes = $meses_pt[$agora["mon"] - 1];
            $ano = $agora["year"];

            $data = sprintf("Hoje é %s, %d de %s, %d.", $dia_da_semana, $dia_do_mes, $mes, $ano);

            return $data;
        }

        function hora_atual()
        {
            $agora = getdate();

            $hora = $agora["hours"];
            $minuto = $agora["minutes"];

            $horas = sprintf("São %d horas e %d minutos.", $hora, $minuto);
            return $horas;
        }

        echo "<p>" . data_de_hoje() . "</p>";
        echo "<p>" . hora_atual() . "</p>";

    ?>

    <p>Horário de Portugal Continental.</p>

    <style>

        p {
            text-align: center;
            font-size: 40px;
            color: #d5d5d5;
        }

        body {
            background-color: #2a2a2a;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

    </style>

</body>
</html>