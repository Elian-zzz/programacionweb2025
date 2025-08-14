function calcularCirculo(radio) {
  const perimetro = (Math.PI * radio * 2).toFixed(2);
  const area = (Math.PI * radio ** 2).toFixed(2);
  return `Perimetro del circulo: ${perimetro}, Area: ${area}`;
}

function calcularRectangulo(ancho, alto) {
  const area = (ancho * alto).toFixed(2);
  const perimetro = (ancho * 2 + alto * 2).toFixed(2);
  return `Perimetro : ${perimetro}, Area : ${area}`;
}
const cosete = prompt("Ingrese el radio de tu circulo");
alert(calcularCirculo(cosete));
const cosete1 = prompt("Ingrese el Alto de su rectangulo");
const cosete2 = prompt("Ingrese el Ancho de su rectangulo");
alert(calcularRectangulo(cosete2, cosete1));
