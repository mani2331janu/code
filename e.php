<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Certificate</title>
    <link rel="stylesheet" href="css/e.css">
</head>

<body id="body">
    <div id="cform">
        <div id="chform">
            <h1 style="text-align: center; margin-top: 20px;">E-Certificate Form</h1>
            <br>
            <p style="text-align: left; font-size: large; font-weight: bolder; width: 100%; margin-left: 20px;">Enter
                Your Name*</p>
            <input type="text" id="fname" name="username" required="" placeholder="Enter Your Name...."/>
            <p style="text-align: left; font-size: large; font-weight: bolder; width: 100%; margin-left: 20px;">Enter
                Certificate Details*</p>
            <input type="text" id="fdetails" name="userdetails" placeholder="Enter Your Certificate Details...." />
            <p style="text-align: left; font-size: large; font-weight: bolder; width: 100%; margin-left: 20px;"> Enter
                Organiser Name*</p>
            <input type="text" id="forganisername" name="organisername" required=""
                placeholder="Enter Your Certificate Organiser Name...." />
            <br>
            <br>
            <button id="bcertificate" onclick="check()">Generate E-Certificate</button>
            <button  id="downloaddata" onclick="dcheck()">Download E-Certificate</button>
        </div>
    </div>

    <div id="main">
        <div id="child1">
            <h1 id="img2">MMK INSTIUTE</h1>
            <div class="body">
                CertificateOf Participation
            </div>
            <div class="body2">
            </div>
            <h3 id="name" align="center"></h3>
            <hr size="bolder" />
            <p align="center" style="font-weight: bold; font-size: large;"> For Successfully Completing </p>
            <h4 class="details" style="text-transform: capitalize; text-align: center;"></h4>
            <p align="center" style="font-size: larger; font-weight: bold;">We Acknowledge Your Efforts . Keep
                Participating !</p>
            <h5 class="organisername" style="text-align: center; font-weight: bolder; text-transform: capitalize;">
            </h5>
        </div>
    </div>

    <script>
        function check() {
            let input = document.getElementById('fname');
            if (input.value !== "") {
                ecertificate();
            } else {
                alert("Input field is empty.");
            }
        }

        function ecertificate() {
            let x = document.getElementById("main");
            x.style.display = "block";
            let name = document.getElementById('fname').value;
            let details = document.getElementById('fdetails').value;
            let oname = document.getElementById('forganisername').value;
            document.getElementsByTagName('h3')[0].innerHTML = name;
            document.getElementsByTagName('h4')[0].innerHTML = details;
            document.getElementsByTagName('h5')[0].innerHTML = oname;
        }

        function dcheck() {
            let input = document.getElementById('fname');
            if (input.value !== "") {
                let studentId = prompt("Please enter your student ID:");
                if (studentId !== null && studentId !== "") {
                    download(studentId);
                } else {
                    alert("Student ID cannot be empty.");
                }
            } else {
                alert("Input field is empty.");
            }
        }

        function download(studentId) {
            let database = {
                "mani": {
                    "certificate": ["STD01mmk", "STD02mmk", "STD03mmk", "STD04mmk", "STD05mmk", "STD06mmk", "STD07mmk", "STD08mmk", "STD09mmk", "STD10mmk", "STD11mmk", "STD12mmk", "STD13mmk", "STD14mmk", "STD15mmk", "STD16mmk", "STD17mmk", "STD18mmk", "STD19mmk", "STD20mmk", "STD21mmk", "STD22mmk", "STD23mmk", "STD24mmk", "STD25mmk", "STD26mmk", "STD27mmk", "STD28mmk", "STD29mmk", "STD30mmk", "STD31mmk", "STD32mmk", "STD33mmk", "STD34mmk", "STD35mmk", "STD36mmk", "STD37mmk", "STD38mmk", "STD39mmk", "STD40mmk", "STD41mmk", "STD42mmk", "STD43mmk", "STD44mmk", "STD45mmk", "STD46mmk", "STD47mmk", "STD48mmk", "STD49mmk", "STD50mmk", "STD51mmk", "STD52mmk", "STD53mmk", "STD54mmk", "STD55mmk", "STD56mmk", "STD57mmk", "STD58mmk", "STD59mmk", "STD60mmk", "STD61mmk", "STD62mmk", "STD63mmk", "STD64mmk", "STD65mmk", "STD66mmk", "STD67mmk", "STD68mmk"] // Example list of allowed student IDs
                }
            };

            let allowedStudents = database.mani.certificate;

            if (allowedStudents.includes(studentId)) {
                let body = document.getElementById('body').innerHTML;
                let main = document.getElementById('main').innerHTML;
                document.getElementById('body').innerHTML = main;
                window.print();
                document.getElementById('body').innerHTML = body;
            } else {
                alert("You are not authorized to download the certificate.");
            }
        }
    </script>
</body>
</html>