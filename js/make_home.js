var current = "home";

function docLoaded(fn) {
	if (document.readyState !== 'loading') {
		fn();
	} else {
		document.addEventListener('DOMContentLoaded', fn);
		console.log('Waiting!');
	}
}

function indexIsLoaded() {
	displayNav();
  displayMain();
}


function displayMain() {
  console.log("Displaying Main");
	var main = document.createElement("main");

	var topMain = getTopMain();


	meTextDiv = getDiv("id", "meText");
	var meText = document.createTextNode(startMainInfo.textInfo);

	meTextDiv.appendChild(meText);
	main.appendChild(topMain);
	main.appendChild(meTextDiv);
  document.body.appendChild(main);
}


function getTopMain() {
	var topMain = getDiv("id", "topMain");

	var topLeft = getDiv("id", "myFace");
	var myFaceImg = document.createElement("img");
	myFaceImg.setAttribute("src", "img/"+current+"/"+startMainInfo.face);
	topLeft.appendChild(myFaceImg);


	var topRight = getTopRight();



	topMain.appendChild(topLeft);
	topMain.appendChild(topRight);
	return topMain;
}

function getTopRight() {
	var div = getDiv("id", "topRight");

	// Name
	var name = document.createElement("h1");
	var nameText = document.createTextNode(startMainInfo.name);
	name.appendChild(nameText);
	div.appendChild(name);

	// subtitle
	var subtitle = document.createElement("h2");
	var subtitleText = document.createTextNode(startMainInfo.subtitle);
	subtitle.appendChild(subtitleText);
	div.appendChild(subtitle);

	for (var i = 0; i < startMainInfo.contactInfo.length; i++) {
		var icon = startMainInfo.contactInfo[i].icon;
		var text = startMainInfo.contactInfo[i].text;
		div.appendChild(getContactBlock(icon, text));
	}

	return div;
}


function getContactBlock(iconSrc, text) {
	var block = getDiv("class", "contactBlock");

	var iconDiv = getDiv("class", "contactIcon");
	var img = document.createElement("img");
	img.setAttribute("src", "img/"+current+"/"+iconSrc);
	iconDiv.appendChild(img);
	block.appendChild(iconDiv);


	var textDiv = getDiv("class", "contactText");
	var text = document.createTextNode(text);
	textDiv.appendChild(text);
	block.appendChild(textDiv);


	return block;

}






function getBottomMain() {
	var meTextDiv = getDiv("id", "meText");
}


function getDiv(attributeType, attributeValue) {
	var div = document.createElement("div");
	div.setAttribute(attributeType, attributeValue);
	return div;
}
