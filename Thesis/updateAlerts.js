// For Alerts
    function updateAlertsData() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("alerts-container").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "alertView.php", true);
        xhttp.send();
    }

    setInterval(updateAlertsData, 500);

    updateAlertsData();


// For Temperature
    function updateTemp() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("temp-container").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "temperatureView.php", true);
        xhttp.send();
    }

    setInterval(updateTemp, 500);

    updateTemp();