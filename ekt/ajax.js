function fillOpt(val, selName) {
    var xhr = new XMLHttpRequest();
    var sel = document.getElementsByName(selName);
    var opt = document.createElement("option");
    var j = 0;
    var params = selName + "=" + val;
    
    sel[0].options.length = 0;
    xhr.open("GET", "ajax.php?"+params, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState != 4) return;
        var jsonArr = JSON.parse(xhr.responseText);
        for (var i in jsonArr){	
            sel[0].options[j] = new Option (jsonArr[i], i);
            j++;
        }
    }
    xhr.send(null);
}

function fillOptQuery(val, selName) {
    var xhr = new XMLHttpRequest();
    var sel = document.getElementsByName(selName);
    var opt = document.createElement("option");
    var j = 0;
    var params = selName + "=" + val;
    
    sel[0].options.length = 0;
    xhr.open("GET", "ajax.php?"+params, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState != 4) return;
        var jsonArr = JSON.parse(xhr.responseText);
        sel[0].options[0] = new Option ("", 0);
        for (var i in jsonArr){
            sel[0].options[j+1] = new Option (jsonArr[i], i);
            j++;
        }
    }
    xhr.send(null);
}


function fillText(val, textName){
    var xhr = new XMLHttpRequest();
    var text = document.getElementById("serN");
    var params = textName + "=" + val;

    xhr.open("GET", "ajax.php?"+params, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState != 4) return;
        var jsonArr = JSON.parse(xhr.responseText);
        for (var i in jsonArr) {
            text.value = jsonArr[i];
        }
    }
    xhr.send(null);

}

function addEvent(){
    sel = document.getElementsByName("choiceTehnListModel");
    sel[0].onchange = function() {
        fillOpt(sel[0].options[sel[0].selectedIndex].value, "remFromListModel");   
    }
}

function addEventQuery(){
    sel = document.getElementsByName("addTehn");
    sel[0].onchange = function() {
        fillOptQuery(sel[0].options[sel[0].selectedIndex].value, "addModel");   
    }
}

function addEventTehn(){
    sel = document.getElementsByName("addTehn");
	sel2 = document.getElementsByName("addModel");
    sel[0].onchange = function() {
        fillOpt(sel[0].options[sel[0].selectedIndex].value, "addModel"); 
        setTimeout(function(){
			document.getElementById('serN').value='';
            var event = new Event('change');
            sel2[0].dispatchEvent(event);
        }, 500);
    }

    sel2[0].onchange = function() {
		document.getElementById('serN').value='';
        fillText(sel2[0].options[sel2[0].selectedIndex].value, "serN");   
    }

}

