<?php

// Incluir base de datos
require __DIR__ . '/database.php';


// Variables
$_YEAR = $_GET['year'] ?? date('Y');
$_ERROR = null;
$_SUCCESS = null;
$premios = [];


// Importar CSV
if (isset($_FILES["file"]))
{
    // Si hay errores subiendo el archivo
    if ($_FILES["file"]["error"] > 0)
    {
        $_ERROR = "Error subiendo el archivo: " . $_FILES["file"]["error"];
    }
    else
    {
        // Obtener año
        $year = (int)$_POST['year'];
        $year_deleted = false;

        // Validar año
        if ($year < 1980 || $year > 2300)
        {
            $_ERROR = "Por favor, introduce un año válido";
        }

        // Guardar archivo
        $file_name = "import_" . md5(time() . rand(100, 999)) . ".csv";
        $file_dir = __DIR__ . "/uploads/";
        $storage_dir = $file_dir . $file_name;

        move_uploaded_file($_FILES["file"]["tmp_name"], $storage_dir);


        // Leer archivo
        $file = fopen($storage_dir, r);

        // Leer primera línea
        $firstline = fgets($file, 4096);

        // Calcular número de columnas
        $num = strlen($firstline) - strlen(str_replace(",", "", $firstline));

        // Almacenar las columnas en un array
        $fields = array();
        $fields = explode( ",", $firstline, ($num+1));

        $line = array();
        $i = 0;


        // Meter todos los datos en un array
        while ( $line[$i] = fgets ($file, 4096) ) {
        
            $dsatz[$i] = array();
            $dsatz[$i] = explode( ",", $line[$i], ($num+1) );
    
            $i++;
        }
    
        // Por cada fila
        foreach ($dsatz as $key => $number)
        {
            // Almacenar datos
            $premio_id = (int)$number[0] ?? null;
            $premio_premio = trim($number[1] ?? "");
            $premio_importe = (float)$number[2] ?? null;
            $premio_estado = trim($number[3] ?? "");

            // Comprobar si está verificado
            if ($premio_estado == "verificado")
            {
                // Validar datos
                if (!is_null($premio_id) && strlen($premio_premio) > 0 && !is_null($premio_importe))
                {
                    // Vaciar año si existe
                    if (!$year_deleted)
                    {
                        $db->delete('premios', ['año' => $year]);
                        $year_deleted = true;
                    }

                    // Insertar premio
                    $db->insert('premios', [
                        'id' => $premio_id,
                        'premio' => $premio_premio,
                        'importe' => $premio_importe,
                        'año' => $year
                    ]);

                    $_SUCCESS = "Se han importado los premios del año $year con éxito y has sido redirigido a este año";
                }
            }
        }

        // Redirigir al año importado
        header('Location: /?year=' . $year);
    }
}


// Validar año
if ($_YEAR < 1980 || $_YEAR > 2300)
{
    $_ERROR = "Por favor, introduce un año válido";
}
else
{
    // Obtener premios de este año
    $premios = $db->select('SELECT * FROM premios WHERE año = ?', [$_YEAR]) ?? [];
}