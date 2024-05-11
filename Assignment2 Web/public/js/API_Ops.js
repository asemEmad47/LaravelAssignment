var showActorsBtn = document.getElementById('actorBtn');
showActorsBtn.addEventListener('click', function(e) {
    e.preventDefault();
    var dobField = document.getElementById('dte');
    var dobRequired = document.getElementById('req8');
    if (dobField.value == "") {
        dobField.style.outline = "2px solid red"
        dobRequired.style.display  = "block"
    }else{
        dobField.style.outline = "none"
        dobRequired.style.display  = "none"
        var dobDate = new Date(dobField);
        var month = dobDate.getMonth() + 1;
        var day = dobDate.getDate();
        if(month < 10){
            var dob = "0" + month + "-" + day;
        }else{
            var dob = month + "-" + day;
        }
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'API_Ops.php?dob=' + dob, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var actors = JSON.parse(xhr.responseText);
                var actorList = document.createElement('ul');
                for (var i = 0; i < actors.length; i++) {
                    var actorItem = document.createElement('li');
                    actorItem.textContent = actors[i];
                    console.log(actorItem.textContent);
                    actorList.appendChild(actorItem);
                }
                var parentDiv = document.getElementById('actorss');
                parentDiv.appendChild(actorList);
            }
        };
        xhr.send();    
    }
});

