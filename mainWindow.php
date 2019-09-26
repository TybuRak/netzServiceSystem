<!doctype html>
<html lang="pl-pl">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf8;">
    <title>NSS</title>
</head>
<body>
<nav>
<div class="nav-wrapper">
    <a class="brand-logo center">Netz Service System</a>
</div>
</nav>
<form action="form-data.php" method="post" id="form">
    <div class="collection">
        <div class="collection-item">
        <label>S/N Urządzenia:</label><br />
        <input name="sn" type="text" id="sn"><br><br>
            <label>S/N Części</label><br />
            <input name="snczesc" type="text" id="sn-czesc"><br><br>
        </div>
        <div class="collection-item">
        <label>Część:</label><br>
            <div class="first">
            <p>
                <label>
                    <input name="czesc" id="dysk" type="checkbox" value="dysk" />
                    <span>Dysk</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="czesc" id="zasilacz" type="checkbox" value="zasilacz" />
                    <span>Zasilacz</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="czesc" id="matryca" type="checkbox" value="matryca" />
                    <span>Matryca</span>
                </label>
            </p>
            </div>
        <div class="second">
            <p>
                <label>
                    <input name="czesc" id="pamiec-ram" type="checkbox" value="pamiec RAM" />
                    <span>Pamięć RAM</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="czesc" id="obudowa" type="checkbox" value="obudowa" />
                    <span>Obudowa</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="czesc" id="klawiatura" type="checkbox" value="klawiatura" />
                    <span>Klawiatura</span>
                </label>
            </p>
        </div>
            <div class="third">
            <p>
                <label>
                    <input name="czesc" id="zawiasy" type="checkbox" value="zawiasy" />
                    <span>Zawiasy</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="czesc" id="modul-gsm" type="checkbox" value="modul-gsm" />
                    <span>Moduł GSM</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="czesc" id="modul-bt" type="checkbox" value="modul Bluetooth"/>
                    <span>Moduł Bluetooth</span>
                </label>
            </p>
            </div>
            <p>
                <label>
                    <input type="text">
                </label>
            </p>
            <div>
            <label>Procedura:</label><br><br>
                <p>
                    <label>
                        <input name="procedura" value="Włożenia" type="checkbox" />
                        <span>Włożenia</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="procedura" value="Wyjęcia" type="checkbox" />
                        <span>Wyjęcia</span>
                    </label>
                </p>
            </div>
        <div class="collection-item">
        <span>Data wykonania:</span><br>
            <input name="data" type="date" id="data">
            <br><br>
            <button class="btn waves-effect waves-light" type="submit" <!--onclick="moveData();"-->>Zatwierdź
                <i class="material-icons right"></i>
            </button>
            <label>Znajdź urządzenie:</label><br/>
            <input type="text" id="">
        </div>
    </div>
</form>
<script src="script.js"></script>
</body>
</html>