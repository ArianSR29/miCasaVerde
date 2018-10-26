<?php
    $password = $_POST['tb_password'];
    if ($password == 'Micasaverde29'){

        header("Content-Type: application/vnd.ms-excel");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("content-disposition: attachment;filename=Canjea-credito.xls");

                $NombreBD = "micasdm2_micasaverde";
                $Servidor = "199.79.62.12";
                $Usuario = "micasdm2_INTOusr";
                $Password ="INTOverde29";
                $IdConexion = mysqli_connect($Servidor, $Usuario, $Password);
                mysqli_select_db($IdConexion, $NombreBD);
                $resul = mysqli_query($IdConexion,"SELECT * FROM calcularinfo ORDER BY ID DESC;" );
                $gen_1 = html_entity_decode("
                    <html>
                    <body>
                    <TABLE BORDER=1 align='center' CELLPADDING=1 CELLSPACING=1>
                        <TR>
                            <TD>ID</TD>
                            <TD>NOMBRE</TD>
                            <TD>CORREO</TD>
                            <TD>TELEFONO</TD>
                            <TD>FECHA</TD>
                        </TR>
                    ");
                    echo $gen_1;
                while($row = mysqli_fetch_array($resul)) {
                    printf("
                        <tr>
                            <td>&nbsp;%s</td>
                            <td>&nbsp;%s</td>
                            <td>&nbsp;%s</td>
                            <td>&nbsp;%s</td>
                            <td>&nbsp;%s</td>
                        </tr>",
                            $row["id"],
                            $row["nombre"],
                            $row["correo"],
                            $row["telefono"],
                            $row["fecha"]);
                        }
                        mysqli_free_result($resul);
                        mysqli_close($IdConexion);

                        $gen_3 = html_entity_decode("
                        </table>
                    </body>
                    </html>
                        ");
                echo $gen_3;
    }else{
        echo "<script>alert('DATOS INCORRECTOS')</script>";
        echo "<script> window.location.href =  '../reporte.php' </script>";
        //echo ("CONTRASEÑA INCORRECTA");
    }
?>