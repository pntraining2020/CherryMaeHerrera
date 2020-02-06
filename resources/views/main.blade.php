@extends('layout.time')
<script src="https://code.jquery.com/jquery-3.1.0.min.js"
    integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous">
</script>

<body id="body" class="container-fluid">
    <div id="div1">
        <p id="time"></p>
        <p id="date"></p>
    </div><br><br>
    <div>
        <form action="" method="post">
            <select name="selected" class="custom-select mr-sm-2">
                <option value="Cherry">Cherry</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audi</option>
            </select>
    </div>
    <div class="container-fluid">
        <button   name="clock_in" type="button" class="btn btn-primary" onclick="clockIn()">Clock In</button>
        <p style="color:white; margin-left:25%" id="clockIn"></p>
    </div>
    <br>
    <div class="container-fluid">
        <h1>BREAK</h1>
        <button type="button" class="btn btn-danger" onclick="startBreak()">Start :</button>
        <p style="color:white; margin-left:25%" id="startBreak"></p>
        <br><br>
        <button type="button" class="btn btn-danger" onclick="endBreak()">End :</button>
        <p style="color:white; margin-left:25%" id="endBreak"></p>
    </div>
    <div class="container-fluid">
        <button name="clock_out" type="button" class="btn btn-primary" onclick="clockOut()">Clock Out</button>
        <p style="color:white; margin-left:25%" id="clockOut"></p>
    </div>
    <div class="container-fluid">
        <p>TOTAL TIME WORKED:</p>
        <p>HOURS LEFT BEFORE TIMEOUT:</p>
        <p>TOTAL BREAKS USED:</p>
    </div>
</body>
<script>
window.setInterval(ut, 1000);

function ut() {
    var d = new Date();
    document.getElementById("time").innerHTML = d.toLocaleTimeString();
    document.getElementById("date").innerHTML = d.toLocaleDateString();
}

function clockIn() {
    var d = new Date();
    document.getElementById("clockIn").innerHTML = d.toLocaleTimeString();
}

function clockOut() {
    var d = new Date();
    document.getElementById("clockOut").innerHTML = d.toLocaleTimeString();
}

function startBreak() {
    var d = new Date();
    document.getElementById("startBreak").innerHTML = d.toLocaleTimeString();
}

function endBreak() {
    var d = new Date();
    document.getElementById("endBreak").innerHTML = d.toLocaleTimeString();
}
</script>