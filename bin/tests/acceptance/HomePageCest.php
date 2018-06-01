<?php
use \Codeception\Util\Locator;
use \Page\Product as Product;

class HomePageCest
{
    public function _before(AcceptanceTester $I)
    {
	 
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function HomePageTest(AcceptanceTester $I)
    {
	  $I->am('Customer');
      $I->wantTo('Open home page');
      $I->amOnPage('/');
      $I->performOn(['class' => 'alternative-country-box__country-name'],['click' => 'Continue to Home24.de']);
	  $I->seeInTitle(Product::$homeTitle);
	  //check company logo
	  $I->wantTo('See logo');
	  $I->waitForElement(Product::$pageLogo); 
	  $I->seeElement(Product::$pageLogo);
	  
	  //check Search Option
	  $I->wantTo('See Search Option');
	  $I->seeElement(Product::$search); 
      $I->fillField(Product::$search, 'Beddinghouse');
      $I->seeInField(Product::$search, 'Beddinghouse');
	  $I->wait(2);
	  $I->fillField(Product::$search, ' '); //clearing the search field
	   $I->wait(2);
	   $I->dontSeeInField(Product::$search, 'Beddinghouse');
	  //check Navigation menus
	  $I->seeElement(Product::$navMenuMobel); 
	  $I->moveMouseOver(Product::$navMenuMobel);

	  //Check Header login,shopping list and shopping cart
         $I->seeElement(Product::$headerLogin);//Anmelden
		 $I->seeElement(Product::$shoppingList);//Merliste
		 $I->seeElement(Product::$shoppingCart);//Warenkorb
		 
	  //Check option to register new user
      $I->see(Product::$newUserText, 'h1');
	  $I->see('Weiter',Product::$newUserButton);
	  
	  //Check option for to sign In for existing user
      $I->see('Ich habe ein Kundenkonto bei Home24.de', Product::$logInBanner);
	  
	  //Check Footer
	    $I->see('Keine Angebote und Gutscheine verpassen!',Product::$footerText); 
		$I->see('Abonnieren',Product::$emailSubscribeButton);
	   	$I->seeElement(Locator::find('input',['type' => 'email']));
					    
	}
}
