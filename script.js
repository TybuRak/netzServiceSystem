const fs = require('fs');

function moveData() {
    let input = document.getElementById("form").getElementsByTagName("input");
    for(i=1; i<=9; i++){
        if(input[i].checked == true){
            var czesc = input[i].value;
        }
        else{
            value = input[10].value;
        }
    }
    for(i=11; i<=12; i++){
        if(input[i].checked == true){
            var procedure = input[i].value;
        }
    }

    var path=window.__dirname;

    function create() {
        var fso = new ActiveXObject("Scripting.FileSystemObject");
        fso.CreateFolder(path);
        fso = null;
    }

function noWords() {
        if(procedure == undefined){
            procedure = "";
            czesc = "";
        }
    if (document.getElementById("sn").value | document.getElementById("data").value | procedure | czesc | document.getElementById("data").value   == "") {
        alert("Wszystie pola muszą być wypełnione!");
    }
    else{
    }
}
noWords();

    fs.writeFileSync( "Zapis " + document.getElementById("sn").value + ".txt",
        "Numer Seryjny: " + document.getElementById("sn").value.toUpperCase() + "\n" +
        "Część: " + czesc + "\n" + "Procedura: " + procedure + "\n" + "Data wykonania: " + document.getElementById('data').value);
    }
