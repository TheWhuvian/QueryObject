<?php

/*Classe TExpression

Classe abstrata para gerenciar expressões

*/

abstract class TExpression {
    //Operadores lógicos
    const AND_OPERATOR = 'AND';
    const OR_OPERATOR = 'OR';

    // marca método dump como obrigatório
 
abstract public function dump();
}