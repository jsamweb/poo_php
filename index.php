<!-- Herencia
La herencia nos permitirá crear nuevas clases a partir de otras. O sea, vamos reutilizar código. Quiere decir, que vamos a hacer una abstracción para generar una súper clases general que después utilicemos para crear otras clases.

En la herencia también tendremos una jerarquía de padre e hijo.
En OOP, la clase padre siempre la encontraremos como la ‘Súperclase’ y los hijos como ‘subclase’.
Y a través de encapsulamiento vamos a poder definir que puede heredar el hijo y que no.

El método constructor nos permite inicializar las variables del objeto. -->

<?php

class User {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}
// Y para crear una herencia utilizamos la palabra reservada extends seguido del nombre de la clases.



class Admin extends User {
    // ...
}
// Para evitar que se incumpla los principios SOLID 2 y 3, podemos utilizar la palabra reservada final al principio del método. También, podemos utilizar este la palabra reservado final en una clase, pero esto significa que no puede ser heredada.



class User {
    public $name;

    final public function __construct($name) {
        $this->name = $name;
    }
}