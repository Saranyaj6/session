var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                var output = "<table>";
                for (var i in data) {
                    output +="<tr>"+"<td>" + i + "</td> " +"<td>"+ data[i] + "</td>"+"</tr>";
                }
                output += "</table>";
                document.getElementById("fruitsList").innerHTML = output;
            }
        };
        xhttp.open("GET", "ajax.php");
        xhttp.send();