<?php

/* # Firma para shell personalizada 'DevMartin' con caracteres ASCII con ANSI Shadow patorjk.com
echo -e "\n\e[1;36m██████╗ ███████╗██╗   ██╗    ███╗   ███╗ █████╗ ██████╗ ████████╗██╗███╗   ██╗";
echo -e "██╔══██╗██╔════╝██║   ██║    ████╗ ████║██╔══██╗██╔══██╗╚══██╔══╝██║████╗  ██║";
echo -e "██║  ██║█████╗  ██║   ██║    ██╔████╔██║███████║██████╔╝   ██║   ██║██╔██╗ ██║";
echo -e "██║  ██║██╔══╝  ╚██╗ ██╔╝    ██║╚██╔╝██║██╔══██║██╔══██╗   ██║   ██║██║╚██╗██║";
echo -e "██████╔╝███████╗ ╚████╔╝     ██║ ╚═╝ ██║██║  ██║██║  ██║   ██║   ██║██║ ╚████║";
echo -e "╚═════╝ ╚══════╝  ╚═══╝      ╚═╝     ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝╚═╝  ╚═══╝";
echo -e "                                                                              \e[0m\n"; */

/* echo "
██████╗ ███████╗██╗   ██╗    ███╗   ███╗ █████╗ ██████╗ ████████╗██╗███╗   ██╗
██╔══██╗██╔════╝██║   ██║    ████╗ ████║██╔══██╗██╔══██╗╚══██╔══╝██║████╗  ██║
██║  ██║█████╗  ██║   ██║    ██╔████╔██║███████║██████╔╝   ██║   ██║██╔██╗ ██║
██║  ██║██╔══╝  ╚██╗ ██╔╝    ██║╚██╔╝██║██╔══██║██╔══██╗   ██║   ██║██║╚██╗██║
██████╔╝███████╗ ╚████╔╝     ██║ ╚═╝ ██║██║  ██║██║  ██║   ██║   ██║██║ ╚████║
╚═════╝ ╚══════╝  ╚═══╝      ╚═╝     ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝╚═╝  ╚═══╝
"; */

// Firma personalizada 'DevMartin' con caracteres ASCII con ANSI Shadow patorjk.com
echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevMartin ASCII Art</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #f8f9fa;
            color: #212529;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        pre {
            font-size: 16px;
            line-height: 1.2;
            padding: 20px;
            background-color: #ffffff;
            border: 2px solid #ced4da;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            white-space: pre-wrap; /* Para manejar saltos de línea */
            word-wrap: break-word; /* Para envolver palabras largas */
            max-width: 80%;
            overflow: auto; /* Agregar barra de desplazamiento si es necesario */
        }
    </style>
</head>
<body>
    <div>
        <pre>
██████╗ ███████╗██╗   ██╗    ███╗   ███╗ █████╗ ██████╗ ████████╗██╗███╗   ██╗
██╔══██╗██╔════╝██║   ██║    ████╗ ████║██╔══██╗██╔══██╗╚══██╔══╝██║████╗  ██║
██║  ██║█████╗  ██║   ██║    ██╔████╔██║███████║██████╔╝   ██║   ██║██╔██╗ ██║
██║  ██║██╔══╝  ╚██╗ ██╔╝    ██║╚██╔╝██║██╔══██║██╔══██╗   ██║   ██║██║╚██╗██║
██████╔╝███████╗ ╚████╔╝     ██║ ╚═╝ ██║██║  ██║██║  ██║   ██║   ██║██║ ╚████║
╚═════╝ ╚══════╝  ╚═══╝      ╚═╝     ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝╚═╝  ╚═══╝
        </pre>
    </div>
</body>
</html>
HTML;

?>