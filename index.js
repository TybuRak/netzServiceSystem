const electron = require('electron');
const url  = require('url');
const path = require('path');

const {app, BrowserWindow, Menu}  = electron;

let mainWindow;
let addWindow;

app.on('ready', function(){
    //Create new window
    mainWindow = new BrowserWindow({
        width: 900,
        height: 650,
        title: 'NSS - NetzServiceSystem',
        webPreferences: {webSecurity: false, nodeIntegration: true}
    });
    // Load html window
    mainWindow.loadURL(url.format({
        pathname: path.join(__dirname, 'mainWindow.html'),
        protocol: 'file:',
        slashes: true
    }));
    //mainWindow.webContents.openDevTools();
    // Build menu from template
    const mainMenu = Menu.buildFromTemplate(mainMenuTemplate);
    // Insert menu
    Menu.setApplicationMenu(mainMenu);
});
/*
// Handle create add window
function createAddWindow(){
    //Create new window
    addWindow = new BrowserWindow({
        width: 300,
        height:200,
        title:'Włóż'
    });
    // Load html window
    addWindow.loadURL(url.format({
        pathname: path.join(__dirname, 'addWindow.html'),
        protocol: 'file:',
        slashes: true
    }));
}
*/
// Create menu  template
const mainMenuTemplate = [
    /*{
        label:'Włóż',
        click(){
            createAddWindow();
        }
    },
    {
        label:'Wyjmij'*/
]