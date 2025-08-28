// Actualizando el encabezado
const h1 = document.getElementById("h1");
h1.innerText = "Explorando el Mundo de JavaScript";

// Añadir un nuevo articulo
const nuevo_elemento = document.createElement("article");
nuevo_elemento.innerHTML =
  "<h2 id='titulo añadido'></h2><br><p>Parrafo añadido</p>";
const main = document.getElementById("main");
main.appendChild(nuevo_elemento);
