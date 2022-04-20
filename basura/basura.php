
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Profe">
		<title></title>
        <style>
            .main {
                background-color: rgb(75, 63, 247);
                margin: 5%;
                padding: 5px 5px;
                border-radius: 5px;
                border: solid;
                border-color: red;
                padding-bottom: 40px;
                padding-top: 40px;
            }
        </style>
	</head>
    <body>
        <div id="includedContent"></div>
        <div class="main">
            <form action="./sender.php" method="get" target="_blank">
                <fieldset>
                    <legend>Informacion personal</legend>
                    <p>Nombre completo: <input type="text" name="nombrecompleto"></p>
                    <p>Dirección: <input type="password" name="direccion"></p>
                    <p>Teléfono: <input type="tel" name="telefono"></p>
                    <input type="image" name="XXXX">
                    <br />
                    <br />
                    <br />
                    <label for="">Número (min -10,max10):</label>
                    <br />
                    <br />
                    <br />
                    <input type="text" cols="50" name="XXXX" placeholder="asd" autocomplete="on" autofocus requiered>
                    <input type="name" cols="50" name="name" pattern="~[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="name" autocomplete="on" autofocus requiered>
                    <input type="email" cols="50" name="email" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="+34-666-45-678">
                    <input type="color" name="color_control" value="#858585">
                    <input  
                        type="url"
                        name="url_control"
                        placeholder="Escribe la URL de tu página web personal"
                    />
                    <br />
                    <br />
                    <br />
                    <input 
                        type="number" 
                        name="number_control"
                        min="-10"
                        max="10"
                        value="0"
                    />
                    <br />
                    <br />
                    <br />
                    <textarea style="width:200px;"></textarea>
                    <br />
                    <br />
                    <br />
                    <select multiple>
                        <optgroup label="personas">
                            <option value="juan">juan</option>
                            <option value="pedro">pedro</option>
                            <option></option>
                        </optgroup>
                        <optgroup label="objetos">
                            <option value="mesa">juan</option>
                            <option value="silla">pedro</option>
                        </optgroup>
                    </select>
                    <br />
                    <br />
                    <br />
                    <input type="range" name="XXXX">
                    <br />
                    <br />
                    <br />
                    <input type="week" name="XXXX">
                </fieldset>
            </form>
        </div>
    </body>
</html>