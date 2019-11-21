var btn = document.getElementById("btn");
var userContainer = document.getElementById("user-info");

btn.addEventListener("click", function(){
	var request = new XMLHttpRequest();
	request.open('GET', 'users.json');
	request.onload = function(){
		var user = JSON.parse(request.responseText);
		renderHTML(user);
};
request.send();
});

function renderHTML(user) {
	var htmlString = "<table class='rwd-table'> <tr> <th>id</th>  <th>login</th>   <th>username</th> <th>pass</th> <th>email</th> </tr> <tr>";

	for(i=0;i<user.length;i++){
		htmlString += "<td>"+user[i].id+"</td>";
		htmlString += "<td>"+user[i].login+"</td>";
		htmlString += "<td>"+user[i].username+"</td>";
		htmlString += "<td>"+user[i].pass+"</td>";
		htmlString += "<td>"+user[i].email+"</td>";
		htmlString += "</tr> <tr>";
	}
	
	htmlString+="</tr> </table>";
	
	userContainer.insertAdjacentHTML('beforeend', htmlString);
}