# Bitácora de Desarrollo: Mi Jurado Digital

Nombre del Estudiante: `Elian Gutierrez`

**_Instrucciones_**: Responde a las siguientes preguntas explicando con tus propias palabras el razonamiento detrás de tu código. El objetivo es demostrar que comprendes por qué funciona, no solo que lograste hacerlo funcionar.

1.  En una o dos frases, ¿cuál es la misión principal de este script?
    `Respuesta 1 : Evaluar si un texto cumple o no con los requerimientos minimos para participar en el concurso.`

2.  ¿Qué función de PHP usaste para contar los caracteres? ¿Por qué esta función es la adecuada para cumplir con la regla de los 700 caracteres?
    `Respuesta 2 : Use strlen() para contar los caracteres, Porque cuenta la longitud del string de esta forma devuelve cuantos caracteres contiene.`

3.  Para contar las palabras no hay una función directa. Describe el proceso de dos pasos que utilizaste. ¿Qué hace explode() y qué hace count() en tu código?
    `Respuesta 3 : Utilicé $Palabras_beta = explode(" ", $texto) /(siendo $texto la variable que recibe el string del texto)\ para separar las palabras por espacios en blanco y convertirlas en elementos del array $Palabras_beta; luego resumidamente con count() conté la cantidad de elementos (palabras) que tenía el array retornando el valor de la cantidad de palabras que contiene el texto.`

4.  ¿Por qué es importante usar el espacio (' ') como separador en explode() para este problema en particular?
    `Respuesta 4 : Es importante ya que las palabras en un texto en el idioma español están delimitadas por espacios en blanco, si recorremos el texto tomando en cuenta esto con explode() nos devolvera un array con todos los elementos que se encuentren entre espacios en blanco es decir palabras  `

5.  Describe cómo estructuraste tu bloque if / else if / else. ¿Qué condición verificas primero y por qué? ¿Cómo te aseguras de que ambas reglas se cumplan a la vez?
    `Respuesta 5 : La estructura del bloque if elseif else parte desde la condición que el teto cumpla con todos los requerimientos (evaluando de primera mano si se cumplen todas las condiciónes), luego evalúa si no se cumplen todas las condiciones (de esta forma en la segunda evaluacion elseif se asegurá de cumplir o no con todos los requerimientos), luego da paso a un segundo elseif con una condición (a esta altura el texto no cumple con ambos requerimientos pero si con uno de ellos, por lo tanto se considera uno de los dos requerimientos), y por ultimo un else como descarte (si el texto no cumple con uno de los requerimientos se estipula en el anterior elseif o en el último else).`

6.  ¿Por qué es importante dar un mensaje de error específico (ej. "Rechazado por exceso de palabras") en lugar de un simple "Rechazado"?
    `Respuesta 6 : Que el programa sea acertivo con la evaluación del texto le da margen al escritor de poder corregir mas o menos sabiendo que requerimientos no cumple su texto`

7.  ¿Cuál fue la parte más desafiante de esta actividad? ¿Hubo algo que te sorprendió o que no funcionó como esperabas al principio?
    `Si, que los estilos no se apliquen cuando php devuelve la evaluación con las funciones echo() /sabiendo que ocurre cuando php se encuentra en otro archivo\`
