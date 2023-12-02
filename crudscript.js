var selectedRow = null

function onFormSubmit(e) {
	event.preventDefault();
        var formData = readFormData();
        if (selectedRow == null){
            insertNewRecord(formData);
		}
        else{
            updateRecord(formData);
		}
        resetForm();    
}

//Retrieve the data
function readFormData() {
    var formData = {};
    formData["codeDemande"] = document.getElementById("cd").value;
    formData["codeEvenement"] = document.getElementById("ce").value;
    formData["codeAgence"] = document.getElementById("ca").value;
    formData["typeFinancement"] = document.getElementById("tf").value;
    formData["typeIntervention"] = document.getElementById("ti").value;
    formData["cible"] = document.getElementById("ci").value;
    return formData;
}

//Insert the data
function insertNewRecord(data) {
    var table = document.getElementById("tableauresultat").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
		cell1.innerHTML = data.codeDemande;
    cell2 = newRow.insertCell(1);
		cell2.innerHTML = data.codeEvenement;
    cell3 = newRow.insertCell(2);
		cell3.innerHTML = data.codeAgence;
    cell4 = newRow.insertCell(3);
		cell4.innerHTML = data.typeFinancement;
    cell5 = newRow.insertCell(4);
	    cell4.innerHTML = data.typeIntervention;
    cell6 = newRow.insertCell(5);
		cell4.innerHTML = data.cible;
    cell7 = newRow.insertCell(6);
        cell4.innerHTML = `<button onClick="onEdit(this)">Edit</button> <button onClick="onDelete(this)">Delete</button>`;
}

//Edit the data
function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("cd").value = selectedRow.cells[0].innerHTML;
    document.getElementById("ce").value = selectedRow.cells[1].innerHTML;
    document.getElementById("ca").value = selectedRow.cells[2].innerHTML;
    document.getElementById("tf").value = selectedRow.cells[3].innerHTML;
    document.getElementById("ti").value = selectedRow.cells[4].innerHTML;
    document.getElementById("ci").value = selectedRow.cells[5].innerHTML;
}
function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.codeDemande;
    selectedRow.cells[1].innerHTML = formData.codeEvenement;
    selectedRow.cells[2].innerHTML = formData.codeAgence;
    selectedRow.cells[3].innerHTML = formData.typeFinancement;
    selectedRow.cells[4].innerHTML = formData.typeIntervention;
    selectedRow.cells[5].innerHTML = formData.cible;
}

//Delete the data
function onDelete(td) {
    if (confirm('Do you want to delete this record?')) {
        row = td.parentElement.parentElement;
        document.getElementById('tableauresultat').deleteRow(row.rowIndex);
        resetForm();
    }
}

//Reset the data
function resetForm() {
    document.getElementById("cd").value = '';
    document.getElementById("ce").value = '';
    document.getElementById("ca").value = '';
    document.getElementById("tf").value = '';
    document.getElementById("ti").value = '';
    document.getElementById("ci").value = '';
    selectedRow = null;
}