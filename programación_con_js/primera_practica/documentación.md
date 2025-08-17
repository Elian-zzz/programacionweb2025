# Documentación de la aplicación web
La aplicación web consta de dos partes, un archivo **html** y un script **JavaScript**.
Describiré paso a paso como se conforman cada parte explicando los recusos utilizados.

## Fundamentos de el archivo **JavaScript**

### 1. Programación orientada a objetos
En la aplicación web se utiliza una organización orientada a objetos 
con el fin de definir clases como plantillas sobre las cuales obtener las
funciónes de `calcularArea()` y `calcularPerimetro()` de cada clase. 
Ya que definimos métodos de nombres iguales dentro de cada
clase, existe la posibilidad de usar *polimorfismo*.
### 2. Clases
La creación de clases refiere a la abstracción de los lementos requeridos y sus comportamientos.
```js
// Funciónes descriptivas para calculo de areas y perimetros
class Circulo {
    
    static calcularArea(radio) {
      const perimetro = (Math.PI * radio * 2).toFixed(2);
      return perimetro;
    }
    static calcularPerimetro(radio) {
      const area = (Math.PI * radio ** 2).toFixed(2);
      return area;
    }
  }
  // Aplica lo mismo con la función de Rectangulo
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
```

### 3. Metodos estáticos
Uso los métodos estáticos para que de ésta forma usar las funciónes directamente desde la clase sin la necesidad de definir un objeto de la clase.
```js
Circulo.calcularArea(+radio.value)
```
### 4. Operadores lógicos
Uso los operadores ternarios y short-cut de la función `Number()` para la dinamización del flujo de datos
Short-cut de **Number()**
```js
// EL + es un short-cut de la función Number()
Circulo.calcularArea(+radio.value)
```
Operadores ternarios
```js
// detrás del ? se encuentra la condición, por orden el siguiente espacio representa la acción si el if se cumple o despues de los : el else 
ancho != 0 && alto != 0
          ? (ancho * alto).toFixed(2)
          : "Error: Se esperaban valores mayores a cero";
```
### 5. Modificación del DOM

## Fundamentos de el archivo **HTML**

### 1. Boostrap

**Texto en negrita**  
*Texto en cursiva*  
`Código en línea`  


- Lista no ordenada
   - Subelemento
1. Lista ordenada

[Enlace](https://ejemplo.com)  
![Imagen](ruta/imagen.png)  

```python
# Bloque de código
def hello():
    print("Hola GitHub!")

