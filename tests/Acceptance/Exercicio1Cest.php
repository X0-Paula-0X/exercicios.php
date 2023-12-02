<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio1Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        //Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5

        $I-> amOnPage ( '/exercicio1' );
        $I-> see ( 'Exercício 1 - PHP', 'h1' );
    }
}
