let choix = true;

function changecolor() {
    let navmain = document.getElementById("navmain");
    let navmenumain = document.getElementById("navmenumain");
    let navlogomain = document.getElementById("navlogomain");
    let navcontactmain = document.getElementById("navcontactmain");
    let navcontactbtn = document.getElementById("navcontactbtn");
    let btncolor = document.getElementById("btncolor");
    let btnreset = document.getElementById("btnreset");
    let homemain = document.getElementById("homemain");
    let hometitle = document.getElementById("hometitle");
    let labelhome = document.getElementById("labelhome");
    let inputhome = document.getElementById("inputhome");
    let footermain = document.getElementById("footermain");
    if(choix == true) {
        navmain.style.backgroundColor = "#00A8A4";
        navmenumain.style.backgroundColor = "#A88E08";
        navlogomain.style.color = "#00A8A4";
        navcontactmain.style.backgroundColor = "#A88E08";
        navcontactbtn.style.color = "#00A8A4";
        btncolor.style.color = "#A88E08";
        btncolor.style.borderColor = "#A88E08";
        btnreset.style.color = "#A88E08";
        btnreset.style.borderColor = "#A88E08";
        homemain.style.backgroundColor = "#A88E08";
        hometitle.style.color = "#00A8A4";
        labelhome.style.color ="#00A8A4";
        inputhome.style.backgroundColor ="#00A8A4";
        footermain.style.backgroundColor = "#00A8A4";
        choix = false;
    } else {
        navmain.style.backgroundColor = "#A88E08";
        navmenumain.style.backgroundColor = "#A82108";
        navlogomain.style.color = "#A88E08";
        navcontactmain.style.backgroundColor = "#A82108";
        navcontactbtn.style.color = "#A88E08";
        btncolor.style.color = "#A82108";
        btncolor.style.borderColor = "#A82108";
        btnreset.style.color = "#A82108";
        btnreset.style.borderColor = "#A82108";
        homemain.style.backgroundColor = "#A82108";
        hometitle.style.color = "#A88E08";
        labelhome.style.color ="#A88E08";
        inputhome.style.backgroundColor ="#A88E08";
        footermain.style.backgroundColor = "#A88E08";
        choix = true;
    }
};

function resetcolor() {
    let navmain = document.getElementById("navmain");
    let navmenumain = document.getElementById("navmenumain");
    let navlogomain = document.getElementById("navlogomain");
    let navcontactmain = document.getElementById("navcontactmain");
    let navcontactbtn = document.getElementById("navcontactbtn");
    let btncolor = document.getElementById("btncolor");
    let btnreset = document.getElementById("btnreset");
    let homemain = document.getElementById("homemain");
    let hometitle = document.getElementById("hometitle");
    let labelhome = document.getElementById("labelhome");
    let inputhome = document.getElementById("inputhome");
    let footermain = document.getElementById("footermain");
    if(choix == true) {
        navmain.style.backgroundColor = "#009200";
        navmenumain.style.backgroundColor = "#FFEA53";
        navlogomain.style.color = "#009200";
        navcontactmain.style.backgroundColor = "#FFEA53";
        navcontactbtn.style.color = "#009200";
        btncolor.style.color = "#FFEA53";
        btncolor.style.borderColor = "#FFEA53";
        btnreset.style.color = "#FFEA53";
        btnreset.style.borderColor = "#FFEA53";
        homemain.style.backgroundColor = "#FFEA53";
        hometitle.style.color = "#009200";
        labelhome.style.color = "#009200";
        inputhome.style.backgroundColor = "#009200";
        footermain.style.backgroundColor = "#009200";
        choix = false;
    } else {
        console.log("already reset");
        choix = true;
    }
}