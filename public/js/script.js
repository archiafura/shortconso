//sqfqsdfmlsd,lgmsd,gmls,gmlm
/*
alert(3+3);
alert("A"+"B");
alert ("bonjour");
alert (1234);
alert (true);
alert ("1234");

var affichage;
affichage = prompt(affichage);

alert(affichage);
*/

/*var unite;
unite=prompt("entrez un entier");
unite=true;
alert(typeof unite);*/

/*var age;
age = prompt("donne ton age");
if (age>=18) {
	alert ("majeur");
}
else if (age<=16) {
	alert("mineur");
}
else {
	alert ("autre");
}
*/

/*var age;
age = prompt("donne ton age");
switch (age) {
	case "18":
	alert("18ans");
	case "25":
	alert ("25ans");
	document.getElementById("div");
style.display="none";
}*/
function affiche() {
	document.getElementById("condition").style.display = "none";

}
function efface() {
	document.getElementById("condition").innerHTML = "<h1>Moins de 18 ans</h1>";

}

/*var age;
age = prompt("donne ton age");
if(age<18) {
	document.getElementById("condition");
	age.style.display = "block";
	alert("erreur : vous êtes mineur")
}
else if(age>=18) {
	document.getElementById("condition");
	age.style.display = "none";

}
*/
function creer() {
var bloc = document.createElement("div");
bloc.setAttribute("id","bloc");
document.getElementById("bloc");
bloc.innerHTML = "<h1>DIV BLOC</h1>";
document.getElementById("condition").style.display = "none";
}