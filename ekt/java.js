var NUM=0;


function findCheckedRadio (){
    var count=(document.getElementsByName('id_t'));
    for (var i=0; i<count.length; i++){
        if(count[i].checked){
            var val=count[i].value;
            return val;
            break;
        }
    }
}

function movDelTehn() {
    val=findCheckedRadio();
    if(val>0){
        var form=document.getElementById('delTehn');
        form.attributes.action.value = "moveTehn.php?id_delTehn="+val;
        form.submit();
    } else
    {
        alert("Не выбрана техника.");
    }
}

function GET(val){
    var s=window.location.search;
    s=s.match(new RegExp(val + '=([^&=]+)'));
    return s ? s[1] :false;
}

function movTehn() 
{   
    val=findCheckedRadio();
    if(val>0){
        var form=document.getElementById('delTehn');
        var id_p=GET("id_p");
        form.attributes.action.value = "moveTehn.php?id_p="+id_p;
        form.submit();
    } else
    {
        alert("Не выбрана техника");
    }
}

function showStory() 
{   
    val=findCheckedRadio();
    if(val>0){
        var form=document.getElementById('delTehn');
        form.attributes.action.value = "showStory.php";
        form.submit();
    } else
    {
        alert("Не выбрана техника");
    }
}

function unlockText ()
{
    var classID=(document.getElementsByName('id_t'));
    for (var i=0; i<classID.length; i++){
        if(classID[i].checked){
            var val=classID[i].className;
        }
    }
    if (val){
        NUM++;
        var elems = document.getElementsByTagName('input');
        for (var i=0; i<elems.length; i++){
           elems[i].disabled=true;
        }

        var elems = document.getElementsByTagName('select');
        for (var i=0; i<elems.length; i++){
           elems[i].disabled=true;
        }
         
        var Go=document.getElementsByName('Go');
        Go[0].disabled=false;
        Go[0].value="Подтвердить";
        var textBoxes=document.getElementsByClassName(val);
        for (var i=0; i<textBoxes.length-4; i++){
            textBoxes[i+4].style.background="#FFFF00";
            textBoxes[i+4].style.border="solid";
            textBoxes[i+4].readOnly=false;
            textBoxes[i+4].disabled=false;
        }
    }

    if(NUM==2){
        NUM=0;
        Go[0].value="Изменить";
        var elems = document.getElementsByTagName('input');
        for (var i=0; i<elems.length; i++){
           elems[i].disabled=false;
        }

        var elems = document.getElementsByTagName('select');
        for (var i=0; i<elems.length; i++){
           elems[i].disabled=false;
        }
        var textBoxes=document.getElementsByClassName(val);
        for (var i=0; i<textBoxes.length-4; i++){
            textBoxes[i+4].style.background="transparent";
            textBoxes[i+4].style.border="0";
            textBoxes[i+4].readOnly=true;
        }
		

		var elems = document.getElementsByName('id_status');
        for (var i=0; i<elems.length-1; i++){
           elems[i].disabled=true;
        }

       /* __________________________________________ */
        var serN = textBoxes[4].value;
		var status = textBoxes[5].value;
		var remark = textBoxes[6].value;
        var xhr = new XMLHttpRequest();
		
        xhr.open("GET", "chTehn.php?id_t="+textBoxes[0].value+"&serN="+serN+"&status="+status+"&remark="+remark, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState != 4) return;
            var res=xhr.responseText;
            if (res==1) {
                //alert("Данные успешно изменены");
            }
            else 
            {
                //alert(res);
                /*location.href=location.href;*/
            }
        }
        xhr.send(null);
        /*__________________________________________ */
    }
    if(!val){
        alert ("Необходимо выбрать технику для изменения.");
    }
    
}



/*_______________________ Код для перетаскивания DIV ______________________________________*/



/*_______________________ Код для перетаскивания DIV конец ______________________________________*/

