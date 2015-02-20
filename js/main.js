function getWeight(name, type) {
    if (name == "") {
        document.getElementById(type + "-weight").innerHTML = '';
        return;
    } else { 
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById(type + "-weight").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","getweight.php?name="+name+"&type="+type,true);
        xmlhttp.send();
    }
}

function calcWeight() {
    var calcWeight = [];

    var partWeights = document.querySelectorAll('.part-weight');

    for (var i = 0, len = partWeights.length; i < len; i++) {
        if (partWeights[i].innerText !== '') {
            calcWeight.push(partWeights[i].innerText);
        }
    }

    for(var i = 0; i < calcWeight.length; i++) {
        calcWeight[i] = parseInt(calcWeight[i], 10);
    } 

    var sum = calcWeight.reduce(function(pv,cv ) { return pv + cv; }, 0);

    document.getElementById("totalWeight").innerHTML = sum;
    document.getElementById("totalWeightLbs").innerHTML = (sum / 453.592).toFixed(2);
    calcWeight = [];
}

function initParts(type) {
    if (window.XMLHttpRequest) {
        xmlhttp2 = new XMLHttpRequest();
    }
    xmlhttp2.onreadystatechange = function() {
        if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
            // wat do i do with xmlhttp2.responseText
        }
    }
    xmlhttp2.open("GET","getparts.php?type="+type,true);
    xmlhttp2.send();
}











































