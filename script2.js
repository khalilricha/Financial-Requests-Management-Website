var rIndex,
table = document.getElementById("tableauresultat");
function addHtmlTableRow()
{

var newRow = table.insertRow(table.length),
    cell1 = newRow.insertCell(0),
    cell2 = newRow.insertCell(1),
    cell3 = newRow.insertCell(2),
    cell4 = newRow.insertCell(3),
    cell5 = newRow.insertCell(4),
    cell6 = newRow.insertCell(5),
    cd = document.getElementById("codedem").value,
    ce = document.getElementById("codeevent").value,
    ca = document.getElementById("codeagence").value;
    tf = document.getElementById("typefin").value,
    ti = document.getElementById("typeinter").value,
    ci = document.getElementById("cible").value;

cell1.innerHTML = cd;
cell2.innerHTML = ce;
cell3.innerHTML = ca;
cell4.innerHTML = tf;
cell5.innerHTML = ti;
cell6.innerHTML = ci;
// call the function to set the event to the new row
selectedRowToInput();
}

// display selected row data into input text
function selectedRowToInput()
{

for(var i = 1; i < table.rows.length; i++)
{
    table.rows[i].onclick = function()
    {
      // get the seected row index
      rIndex = this.rowIndex;
      document.getElementById("codedem").value= this.cells[0].innerHTML;
      document.getElementById("codeevent").value= this.cells[1].innerHTML;
      document.getElementById("codeagence").value= this.cells[2].innerHTML;
      document.getElementById("typefin").value= this.cells[3].innerHTML;
      document.getElementById("typeinter").value= this.cells[4].innerHTML;
      document.getElementById("cible").value= this.cells[5].innerHTML;
    };
}
}
selectedRowToInput();

function editHtmlTbleSelectedRow()
{
cd = document.getElementById("codedem").value,
ce = document.getElementById("codeevent").value,
ca = document.getElementById("codeagence").value;
tf = document.getElementById("typefin").value,
ti = document.getElementById("typeinter").value,
ci = document.getElementById("cible").value;

table.rows[rIndex].cells[0].innerHTML = cd;
table.rows[rIndex].cells[1].innerHTML = ce;
table.rows[rIndex].cells[2].innerHTML = ca;
table.rows[rIndex].cells[3].innerHTML = tf;
table.rows[rIndex].cells[4].innerHTML = ti;
table.rows[rIndex].cells[5].innerHTML = ci;
}


function removeSelectedRow()
{
table.deleteRow(rIndex);
// clear input text
document.getElementById("codedem").value="";
document.getElementById("codeevent").value="";
document.getElementById("codeagence").value="";
document.getElementById("typefin").value="";
document.getElementById("typeinter").value="";
document.getElementById("cible").value="";
}