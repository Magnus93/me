
function docLoadedNav(fn) {
	if (document.readyState !== 'loading') {
		//console.log(pageStatus);
		fn(currentPageName);
	} else {
		document.addEventListener('DOMContentLoaded', fn);
		console.log('Waiting!');
	}
}

function indexIsLoaded() {
	displayNav();
}

function setCurrentPage(page) {
	while (document.readyState == 'loading') {}

	var li = document.getElementById(page);
	console.log(li);
	li.setAttribute("style", "background-color: pink");
}

function displayNav(currentPageName) {
  console.log("Displaying Nav!");
  var nav = document.createElement("nav");
	console.log("homeLink:"+ homeLink);
  var name = getName(homeLink);
	console.log("navLinks:"+ navLinks);
  var pages = getPages(navLinks);
  nav.appendChild(name);
  nav.appendChild(pages);
  document.body.appendChild(nav);
}


function getName(home) {
  var nameH1 = document.createElement("h1");
  nameH1.setAttribute("class","nav");
  var nameLink = document.createElement("a");
  nameLink.href= home.link;
  nameLink.setAttribute("class","nav");
  var nameNode = document.createTextNode(home.name);
	nameLink.setAttribute("title", "Hem")
  nameLink.appendChild(nameNode);
  nameH1.appendChild(nameLink);
  return nameH1;
}


function getPages(navLnks) {
  var ul = document.createElement("ul");
  ul.setAttribute("id", "pages");
  for (var i = 0; i < navLnks.links.length; i++) {
    var li = document.createElement("li");
    var a = document.createElement("a");
		li.setAttribute("id",navLnks.names[i]);
    a.setAttribute("href", navLnks.links[i]);
    var name = document.createTextNode(navLnks.names[i]);

    a.appendChild(name);
    li.appendChild(a);
    ul.appendChild(li);
  }
  return ul;
}
