document.addEventListener("DOMContentLoaded", function () {
    const formulaire = document.getElementById("myForm");
    const tableauResultat = document.getElementById("tableauresultat");

    formulaire.addEventListener("submit", function (event) {
        event.preventDefault(); // Empêche la soumission du formulaire

        const codedem = document.getElementById("codedem").value;
        const codeevent = document.getElementById("codeevent").value;
        const codeagence = document.getElementById("codeagence").value;
        const typefin = document.getElementById("typefin").value;
        const typeinter = document.getElementById("typeinter").value;
        const cible = document.getElementById("cible").value;
        const nomben = document.getElementById("nomben").value;
        const prenomben = document.getElementById("prenomben").value;
        const numcnieben = document.getElementById("numcnieben").value;

        const newRow = tableauResultat.insertRow(-1); // Ajoute une nouvelle ligne au tableau

        const cellcodedem = newRow.insertCell(0); // Insère une cellule pour le nom
        cellcodedem.textContent = codedem;
        const cellcodeevent = newRow.insertCell(1); // Insère une cellule pour le prénom
        cellcodeevent.textContent = codeevent;
        const cellcodeagence = newRow.insertCell(2); // Insère une cellule pour le nom
        cellcodeagence.textContent = codeagence;
        const celltypefin = newRow.insertCell(3); // Insère une cellule pour le prénom
        celltypefin.textContent = typefin;
        const celltypeinter = newRow.insertCell(4); // Insère une cellule pour le nom
        celltypeinter.textContent = typeinter;
        const cellcible = newRow.insertCell(5); // Insère une cellule pour le prénom
        cellcible.textContent = cible;
        const cellnomben = newRow.insertCell(6); // Insère une cellule pour le nom
        cellnomben.textContent = nomben;
        const cellprenomben = newRow.insertCell(7); // Insère une cellule pour le prénom
        cellprenomben.textContent = prenomben;
        const cellnumcnieben = newRow.insertCell(8); // Insère une cellule pour le nom
        cellnumcnieben.textContent = numcnieben;

        formulaire.reset(); // Réinitialise le formulaire

        // Redirige vers la page de résultat
        window.location.href = "dashboard-admin.html";
    });
});
