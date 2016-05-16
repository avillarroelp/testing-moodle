<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Log in as Admin user');

$I->amOnPage('/login/index.php');
$I->fillField('username','admin');
$I->fillField('password','pepito');
$I->click('loginbtn');
$I->seeLink('Admin User');


