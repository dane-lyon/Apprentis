// DECLARATION DES VARIABLES "COMPTEUR" DE POINTS
var ProfilD = 0;
var ProfilI = 0;
var ProfilE = 0;
var S_Profil1 = 0;
var S_Profil2 = 0;
var S_Profil3 = 0;
var S_Profil4 = 0;
var S_Profil5 = 0;
var S_Profil6 = 0;

function test()
{
    RecupResultat();
    var Tab_Result_Profil = new Array(ProfilD, ProfilI, ProfilE);
    var Tab_Result_S_Profil = new Array(S_Profil1, S_Profil2, S_Profil3, S_Profil4, S_Profil5, S_Profil6);
    RecupProfil();
    RecupS_Profil();
}

function ResetResultat()
{
    ProfilD = 0;
    ProfilI = 0;
    ProfilE = 0;
    S_Profil1 = 0;
    S_Profil2 = 0;
    S_Profil3 = 0;
    S_Profil4 = 0;
    S_Profil5 = 0;
    S_Profil6 = 0;
}

function RecupProfil()
{
    document.getElementById("Aff_Profile").style.borderWidth = "2px";
    document.getElementById("Aff_Profile").style.borderStyle = "solid";
    document.getElementById("Aff_Profile").style.padding = "5px";
    document.getElementById("Aff_Profile").style.borderColor = "black";
    if(ProfilD > ProfilI && ProfilD > ProfilE)
    {
        document.getElementById("Aff_Profile").innerHTML = "Profil D";
    }

    if(ProfilI > ProfilD && ProfilI > ProfilE)
    {
        document.getElementById("Aff_Profile").innerHTML = "Profil I";
    }
    if(ProfilE > ProfilI && ProfilE > ProfilD)
    {
        document.getElementById("Aff_Profile").innerHTML = "Profil E";
    }
}

function RecupS_Profil()
{
    document.getElementById("Aff_S_Profil").style.borderWidth = "2px";
    document.getElementById("Aff_S_Profil").style.borderStyle = "solid";
    document.getElementById("Aff_S_Profil").style.padding = "5px";
    document.getElementById("Aff_S_Profil").style.borderColor = "black";
    if(S_Profil1 > S_Profil2 && S_Profil1 > S_Profil3 && S_Profil1 > S_Profil4 && S_Profil1 > S_Profil5 && S_Profil1 > S_Profil6)
    {
        document.getElementById("Aff_S_Profil").innerHTML = "Sous profile 1";
    }
    if(S_Profil2 > S_Profil1 && S_Profil2 > S_Profil3 && S_Profil2 > S_Profil4 && S_Profil2 > S_Profil5 && S_Profil2 > S_Profil6)
    {
        document.getElementById("Aff_S_Profil").innerHTML = "Sous profile 2";
    }
    if(S_Profil3 > S_Profil1 && S_Profil3 > S_Profil2 && S_Profil3 > S_Profil4 && S_Profil3 > S_Profil5 && S_Profil3 > S_Profil6)
    {
        document.getElementById("Aff_S_Profil").innerHTML = "Sous profile 3";
    }
    if(S_Profil4 > S_Profil1 && S_Profil4 > S_Profil2 && S_Profil4 > S_Profil3 && S_Profil4 > S_Profil5 && S_Profil4 > S_Profil6)
    {
        document.getElementById("Aff_S_Profil").innerHTML = "Sous profile 4";
    }
    if(S_Profil5 > S_Profil1 && S_Profil5 > S_Profil2 && S_Profil5 > S_Profil4 && S_Profil5 > S_Profil3 && S_Profil5 > S_Profil6)
    {
        document.getElementById("Aff_S_Profil").innerHTML = "Sous profile 5";
    }
    if(S_Profil6 > S_Profil1 && S_Profil6 > S_Profil2 && S_Profil6 > S_Profil4 && S_Profil6 > S_Profil5 && S_Profil6 > S_Profil3)
    {
        document.getElementById("Aff_S_Profil").innerHTML = "Sous profile 6";
    }
}

function RecupResultat()
{
    // GESTION REPONSE Q1
    if(document.getElementById("q1r1").checked)
    {
        AddPointProfil("ProfilD");
        AddPointS_Profil("S_Profil2");
    }
    if(document.getElementById("q1r2").checked)
    {
        AddPointProfil("ProfilI");
        AddPointS_Profil("S_Profil4");
    }
    if(document.getElementById("q1r3").checked)
    {
        AddPointProfil("ProfilE");
        AddPointS_Profil("S_Profil6");
    }
    if(document.getElementById("q1r4").checked)
    {
        //Réponse nulle
    }


    // GESTION REPONSE Q2
    if(document.getElementById("q2r1").checked)
    {
        AddPointProfil("ProfilD");
        AddPointS_Profil("S_Profil1");
    }
    if(document.getElementById("q2r2").checked)
    {
        AddPointProfil("ProfilD");
        AddPointS_Profil("S_Profil3");
    }
    if(document.getElementById("q2r3").checked)
    {
        AddPointProfil("ProfilD");
        AddPointS_Profil("S_Profil5");
    }


    // GESTION REPONSE Q3
    if(document.getElementById("q3r1").value == 1 || document.getElementById("q3r1").value == 2)
    {
        AddPointProfil("ProfilD");
        AddPointS_Profil("S_Profil1");
    }
    if(document.getElementById("q3r1").value == 3 || document.getElementById("q3r1").value == 4)
    {
        AddPointProfil("ProfilI");
        AddPointS_Profil("S_Profil2");
    }
    if(document.getElementById("q3r1").value == 5 || document.getElementById("q3r1").value == 6)
    {
        AddPointProfil("ProfilE");
        AddPointS_Profil("S_Profil4");
    }


    // GESTION REPONSE Q4
    if(document.getElementById("q4r1").checked)
    {
        AddPointProfil("ProfilD");
        AddPointS_Profil("S_Profil3");
    }
    if(document.getElementById("q4r2").checked)
    {
        AddPointProfil("ProfilD");
        AddPointS_Profil("S_Profil3");
    }
    if(document.getElementById("q4r3").checked)
    {
        AddPointProfil("ProfilI");
        AddPointS_Profil("S_Profil5");
    }
    if(document.getElementById("q4r4").checked)
    {
        AddPointProfil("ProfilE");
        AddPointS_Profil("S_Profil6");
    }


    // GESTION REPONSE Q5
    if(document.getElementById("q5r1").checked)
    {
        AddPointProfil("ProfilD");
        AddPointS_Profil("S_Profil2");
    }
    if(document.getElementById("q5r2").checked)
    {
        AddPointProfil("ProfilI");
        AddPointS_Profil("S_Profil4");
    }
    if(document.getElementById("q5r3").checked)
    {
        AddPointProfil("ProfilI");
        AddPointS_Profil("S_Profil4");
    }
    if(document.getElementById("q5r4").checked)
    {
        AddPointProfil("ProfilE");
        AddPointS_Profil("S_Profil5");
    }
    if(document.getElementById("q5r5").checked)
    {
        AddPointProfil("ProfilE");
        AddPointS_Profil("S_Profil6");
    }


    // GESTION REPONSE Q6
    if(document.getElementById("q6r1").checked)
    {
        AddPointProfil("ProfilD");
        AddPointS_Profil("S_Profil2");
    }
    if(document.getElementById("q6r2").checked)
    {
        AddPointProfil("ProfilI");
        AddPointS_Profil("S_Profil4");
    }
    if(document.getElementById("q6r3").checked)
    {
        AddPointProfil("ProfilE");
        AddPointS_Profil("S_Profil5");
    }


    // GESTION REPONSE Q7
    if(document.getElementById("q7r1").checked)
    {
        AddPointProfil("ProfilI");
        // S_Profil = null
    }
    if(document.getElementById("q7r2").checked)
    {
        AddPointProfil("ProfilD");
        AddPointS_Profil("S_Profil1");
    }
    if(document.getElementById("q7r3").checked)
    {
        AddPointProfil("ProfilI");
        // S_Profil = null
    }
    if(document.getElementById("q7r4").checked)
    {
        AddPointProfil("ProfilD");
        AddPointS_Profil("S_Profil1");
    }
    if(document.getElementById("q7r5").checked)
    {
        AddPointProfil("ProfilE");
        AddPointS_Profil("S_Profil6");
    }


    // GESTION REPONSE Q8
    if(document.getElementById("q8r1").checked)
    {
        // Réponse nulle
    }

    if(document.getElementById("q8r2").checked)
    {
        AddPointProfil("ProfilE");
        AddPointS_Profil("S_Profil5");
    }
    if(document.getElementById("q8r3").checked)
    {
        AddPointProfil("ProfilI");
        AddPointS_Profil("S_Profil3");
    }


    // GESTION REPONSE Q9
    if(document.getElementById("q9r1").checked)
    {
        // Réponse nulle
    }

    if(document.getElementById("q9r2").checked)
    {
        AddPointProfil("ProfilI");
        AddPointS_Profil("S_Profil3");
    }

    if(document.getElementById("q9r3").checked)
    {
        AddPointProfil("ProfilI");
        AddPointS_Profil("S_Profil3");
    }
    if(document.getElementById("q9r4").checked)
    {
        AddPointProfil("ProfilE");
        AddPointS_Profil("S_Profil6");
    }


    // GESTION REPONSE Q10
    if(document.getElementById("q10r1").checked)
    {
        AddPointProfil("ProfilD");
        AddPointS_Profil("S_Profil2");
    }
    if(document.getElementById("q10r2").checked)
    {
        AddPointProfil("ProfilE");
        AddPointS_Profil("S_Profil5");
    }
    if(document.getElementById("q10r3").checked)
    {
        AddPointProfil("ProfilD");
        AddPointS_Profil("S_Profil1");
    }
    if(document.getElementById("q10r4").checked)
    {
        AddPointProfil("ProfilI");
        AddPointS_Profil("S_Profil3");
    }
    if(document.getElementById("q10r5").checked)
    {
        AddPointProfil("ProfilD");
        AddPointS_Profil("S_Profil4");
    }
    if(document.getElementById("q10r6").checked)
    {
        AddPointProfil("ProfilE");
        AddPointS_Profil("S_Profil6");
    }
}

// FONCTION AJOUT DE POINT PROFIL
function AddPointProfil(pProfil)
{
    if(pProfil == "ProfilD")
    {
        ProfilD = ProfilD + 1;
    }
    if(pProfil == "ProfilI")
    {
        ProfilI = ProfilI + 1;
    }
    if(pProfil == "ProfilE")
    {
        ProfilE = ProfilE + 1;
    }
}


// FONCTION AJOUT DE POINT SOUS PROFIL
function AddPointS_Profil(pS_Profil)
{
    if(pS_Profil == "S_Profil1")
    {
        S_Profil1 = S_Profil1 + 1;
    }
    if(pS_Profil == "S_Profil2")
    {
        S_Profil2 = S_Profil2 + 1;
    }
    if(pS_Profil == "S_Profil3")
    {
        S_Profil3 = S_Profil3 + 1;
    }
    if(pS_Profil == "S_Profil4")
    {
        S_Profil4 = S_Profil4 + 1;
    }
    if(pS_Profil == "S_Profil5")
    {
        S_Profil5 = S_Profil5 + 1;
    }
    if(pS_Profil == "S_Profil6")
    {
        S_Profil6 = S_Profil6 + 1;
    }
}