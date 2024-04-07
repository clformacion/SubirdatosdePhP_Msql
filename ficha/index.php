<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

     <nav class="navbar navbar-expand navbar-light bg-primary">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#" aria-current="page"
                >Home <span class="visually-hidden">(current)</span></a
            >
            <a class="nav-item nav-link" href="#">Home</a>
        </div>
     </nav>
    
    <body>
        <br>
        <h1 style="text-align: center; color:blue">BASE DE DATOS DE ESTUDIANTES</h1>

    <div
        class="container-fluid" style="margin-top: 100px;"
    >
    
        <form action="registracurso.php" method="post">

        nombre:
        <input type="text" name="nombre">
        apellido:
        <input type="text" name="apellido">
        Pais:
        <input type="text" name="pais">
        curso: 
        <input type="text" name="curso">
        Email 
        <input type="text" name="email">
        Telefono:
        <input type="text" name="telefono"><br><br>
        <button type="submit">Registrar Estudiante</button>
         <button type="reset" style="float:right;">borrar datos</button-->
        </form>
    </div>

    


    







        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
