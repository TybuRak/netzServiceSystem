const fs = require('fs');
function moveData() {
    /*var fso = new ActiveXObject("Scripting.FileSystemObject");
    var a = fso.CreateTextFile("D:\\praca\\strony www\\strony\\netzServiceIO", true);
    a.WriteLine("This is a test.");
    a.Close();
    set obj = CreateObject("Scripting.FileSystemObject");
    set text = obj.CreateTextFile("<D:\\praca\\strony www\\strony>/filename.txt", True);

    var sn =  document.getElementById("sn");
    var czesc = document.getElementById("czesc");
    var date = document.getElementById("data");

    text.writeline("Numer seryjny: " + sn + "\n");
    text.writeline("Część: " + czesc + "\n");
    text.writeline("Czas wykonania: " + date + "\n");
    text.writeline("\n" + "\n" + "\n");
    text.writeline("---------------------------");
    text.Close();*/
    fs.writeFileSync('file.txt', document.getElementById('sn').value);
}