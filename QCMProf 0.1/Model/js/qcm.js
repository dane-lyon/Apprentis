function Anim_Q(Enter, Exit)
{
    QActu = document.getElementById(Enter);
    QAfter = document.getElementById(Exit);
    QActu.classList.add("run-anim");
	setTimeout(function() {
		QAfter.style.visibility = "visible";
		QActu.style.visibility = "hidden";
        QAfter.classList.add("run-anim2");
		QActu.classList.remove("run-anim");
        setTimeout(function() {
            QAfter.classList.remove("run-anim2");
        }, 500);
	}, 500);
}

function VerifChoix()
{
    if(document.getElementById("cChoix").checked)
    {
        document.getElementById("btn_valider").classList.remove("disabled");
    }
    else
    {
        document.getElementById("btn_valider").classList.add("disabled");
    }
}