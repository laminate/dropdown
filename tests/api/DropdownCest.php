<?php

class DropdownCest
{
    public function _before(ApiTester $I)
    {
        $I->wantTo('Test Dropdowns');
        $I->am('logged in user');
        Auth::loginUsingId(10);

        //Visit homepage to generate token
        $I->amOnPage('/');
        $I->seeResponseCodeIs(200);
    }

    public function _after(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
    }
}
