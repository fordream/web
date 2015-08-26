function display(_id, isDisplay){
	if(isHidden){
		document.getElementById(_id).style.display = 'block';
	}else{ 
		document.getElementById(_id).style.display = 'none';
	}
}

function insertHeader(table, text, index){
	var row = table.insertRow(index);
	var cell1 = row.insertCell(0);
	
	cell1.colSpan =2;
	
	cell1.innerHTML = "<b>"+text+"<b>";
}

function insertRowTable(table, header, text, index){
	var row = table.insertRow(index);
	var cell1 = row.insertCell(0);
	cell1.innerHTML = header;
	var cell2 = row.insertCell(1);
	cell2.innerHTML = text;

}