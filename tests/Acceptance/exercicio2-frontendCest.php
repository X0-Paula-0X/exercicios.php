<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio2Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I-> amOnPage ( '/exercicio2' );
    }
}
