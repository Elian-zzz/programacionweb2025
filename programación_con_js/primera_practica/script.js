//
//
//
//       FALTA HACER EL BOTON DE REINICIAR
//
//
//
//
//
//

document.addEventListener("DOMContentLoaded", () => {
  // Espera a que todos los elementos del DOM estén cargados
  class Circulo {
    static calcularArea(radio) {
      // por el tipo de input en el html el radio debe de ser si o si un numero
      const perimetro = (Math.PI * radio * 2).toFixed(2);
      return perimetro;
    }
    static calcularPerimetro(radio) {
      const area = (Math.PI * radio ** 2).toFixed(2);
      return area;
    }
  }

  class Rectangulo {
    static calcularArea(ancho, alto) {
      const area =
        ancho != 0 && alto != 0
          ? (ancho * alto).toFixed(2)
          : "Error: Se esperaban valores mayores a cero";
      return area;
    }
    static calcularPerimetro(ancho, alto) {
      const perimetro =
        ancho != 0 && alto != 0
          ? (ancho * 2 + alto * 2).toFixed(2)
          : "Error: Se esperaban valores mayores a cero";
      return perimetro;
    }
  }

  const radio = document.getElementById("inputRadio");
  const alto = document.getElementById("inputAlto");
  const ancho = document.getElementById("inputAncho");
  const boton = document.getElementById("btnCalcular");
  const resultado = document.getElementById("resultado");
  const reiniciar = document.getElementById("reiniciar");
  const formulario = document.getElementById("formulario");

  // EL + antes de la variable es equivalente a la función Number()
  // .value devuelve un string siempre, con Number() si el string es vacío lo interpreta como 0
  boton.addEventListener("click", () => {
    // Verifica que los campos no estén vacíos y sean mayores a cero
    if (
      radio.value &&
      +radio.value > 0 &&
      alto.value &&
      +alto.value > 0 &&
      ancho.value &&
      +ancho.value > 0
    ) {
      resultado.style.display = "flex";
      resultado.innerHTML = `
        <table border="1" class="table table-striped table-bordered">
          <thead>
            <tr>
              <td>Figura</td>
              <td>Area</td>
              <td>Perimetro</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Circulo</td>
              <td>${Circulo.calcularArea(+radio.value)}</td>
              <td>${Circulo.calcularPerimetro(+radio.value)}</td>
            </tr>
            <tr>
              <td>Rectangulo</td>
              <td>${Rectangulo.calcularArea(+ancho.value, +alto.value)}</td>
              <td>${Rectangulo.calcularPerimetro(
                +ancho.value,
                +alto.value
              )}</td>
            </tr>
          </tbody>
        </table>`;
      reiniciar.classList.toggle("d-none");
      boton.classList.toggle("d-none");
    } else {
      alert("Debes ingresar valores mayores a cero y que no estén vacíos.");
    }
  });

  reiniciar.addEventListener("click", () => {
    resultado.style.display = "none";
    boton.classList.toggle("d-none");
    reiniciar.classList.toggle("d-none");
  });
});
