var cursus_arr = new Array("ITStart", "Cursus2", "Réseau 2000");

// States
var s_a = new Array();
s_a[0]="";
s_a[1]="01|02|03|04|05|06|07";
s_a[2]="01|02|03";
s_a[3]="01|02|03|04";

var s_b = new Array();
s_b[0]="";
s_b[1]="Anglais|JavaScript|Administration réseau|Culture informatique|Communication";
s_b[2]="Module 1|Module 2|Module 3";
s_b[3]="Serveur Linux|Serveur Windows|HelpDesk|Administration client";

function funcSession(cursusElementId,sessionElementId){
  
  var selectedCursusIndex = document.getElementById(cursusElementId).selectedIndex;

  var sessionElement = document.getElementById(sessionElementId);  
  sessionElement.options[0] = new Option('Session','');
  sessionElement.selectedIndex = 0;
  
  var session_arr = s_a[selectedCursusIndex].split("|");
  
  for (var i=0; i<session_arr.length; i++) {
    sessionElement.options[sessionElement.length] = new Option(session_arr[i],session_arr[i]);
  }
}

function funcModule(cursusElementId, moduleElementId){
  
  var selectedCursusIndex = document.getElementById(cursusElementId).selectedIndex;

  var moduleElement = document.getElementById(moduleElementId);
  if (typeof moduleElement.options)
    moduleElement.options[0] = new Option('Module','');
  moduleElement.selectedIndex = 0;
  
  var module_arr = s_b[selectedCursusIndex].split("|");
  
  for (var i=0; i<module_arr.length; i++) {
    moduleElement.options[moduleElement.length] = new Option(module_arr[i],module_arr[i]);
  }
}

function funcCursus(cursusElementId, sessionElementId, moduleElementId){
  // given the id of the <select> tag as function argument, it inserts <option> tags
  var cursusElement = document.getElementById(cursusElementId);
  cursusElement.options[0] = new Option('Cursus','-1');
  cursusElement.selectedIndex = 0;
  for (var i=0; i<cursus_arr.length; i++) {
    cursusElement.options[cursusElement.length] = new Option(cursus_arr[i],cursus_arr[i]);
  }

  if(typeof sessionElementId !== 'undefined'){
    cursusElement.addEventListener('change', function() {
      funcSession(cursusElementId, sessionElementId);
    });
  }

  if(typeof moduleElementId !== 'undefined'){
    cursusElement.addEventListener('change', function() {
      funcModule(cursusElementId, moduleElementId);
    });
  }
}
