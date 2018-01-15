text = ["", "iBaptste", "iLearningCnam", "iCodeHtmlCssJsPhp", "iMakeCoffee", "iWorkForFree:3Month", ];


//for pour creer les div
for (var i = 0; i < 6; i++) {

    var block = document.createElement("div");
    block.id = "element" + (i + 1);
    block.className = "item" + (i + 1);
    block.textContent = text[i];
    block.style.textAlign = "center";
    block.style.margin = "auto";
    document.getElementById("blocks").appendChild(block);
}


//creation d'un paragraphe
var para = document.createElement("p");
para.textContent = "Dites bonjour au futur stagiaire";
document.getElementById("element2").appendChild(para);
//Création d'un tableau contenant tous le code a afficher
code = ["for (var i = 0; i < iBaptiste.experience; i++) {", "if (iBaptiste.experience > iStage.length) {", "Console.log(You got the job ! :highfive:);", "}", "Else {", "Console.log(Back to the future);", "}", "};", ];

//Creation d'une balise pre
var balPre = document.createElement("pre");
balPre.id = "eltPre";
document.getElementById("element1").appendChild(balPre);

//Creation d'une balise code
var balCode = document.createElement("code");
balCode.style.borderRadius = "15px";
//balCode.className = "javascript";
balCode.id = "eltCode";
document.getElementById("eltPre").appendChild(balCode);

//Creation d'une balise cdiv
var balDiv = document.createElement("div");
balDiv.id = "typedStrings";
document.getElementById("eltCode").appendChild(balDiv);

//Affichage du code a la suite et creation d'une balise p
for (var x = 0; x < code.length; x++) {
    var paraElt1 = document.createElement("p");
    paraElt1.textContent = code[x];
    paraElt1.style.margin = "auto";

    if (x === 1 || x === 3 || x === 4 || x === 6) {
        paraElt1.textContent = "  " + code[x];
    }
    if (x === 2 || x === 5) {
        paraElt1.textContent = "      " + code[x];
    }
    paraElt1.style.textAlign = "left";

    document.getElementById("typedStrings").appendChild(paraElt1);
}