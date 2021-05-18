<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&family=Open+Sans&display=swap" rel="stylesheet">

    <title>Formulário Enviado com Sucesso</title>
</head>

<body>

    <div class="center">
        <h1 class="gradient-text">Sucesso!</h1>
    </div>

    <style> 
    
        .gradient-text {
            /* Fallback: Set a background color. */
            background-color: red;
            
            /* Create the gradient. */
            background-image: linear-gradient(to bottom right, #12c2e9 0%, #c471ed  51%, #f64f59 100%);
            
            /* Set the background size and repeat properties. */
            background-size: 100%;
            background-repeat: repeat;

            /* Use the text as a mask for the background. */
            /* This will show the gradient as a text color rather than element bg. */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent; 
            -moz-background-clip: text;
            -moz-text-fill-color: transparent;
        }

        body {
            background-color: #2a2a2a;
            overflow: hidden;
        }

        .center {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        h1 {
            font-family: 'Oleo Script Swash Caps', cursive;
            font-size: 100px;
            animation:  hover 1s ease-in-out infinite;
        }

        @keyframes hover {
            0% {
            transform: translatey(-10px) perspective(200px)
                translatez(0);
            }
            50% {
            transform: translatey(-10px) perspective(200px)
                translatez(50px);
            }
            100% {
            transform: translatey(-10px) perspective(200px)
                translatez(0);
            }
        
        }

    </style>
</body>

</html>