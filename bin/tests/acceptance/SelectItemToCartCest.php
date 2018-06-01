<?php
use \Codeception\Util\Locator;
use \Page\Product as Product;
use \Codeception\Module;
use \Codeception\Events;

class SelectItemToCartCest
{
    protected $module;
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function LogIn(AcceptanceTester $I)
    {
	  $I->am('Customer');
	  $I->wantTo('Want to add product to cart');
	  $I->amOnPage('/');
	  //close th popup to continue if exists
      $I->performOn(['class' => 'alternative-country-box__country-name'],['click' => 'Continue to Home24.de']);	
	  $I->wait(2);
	  $I->fillField(Product::$email,'testuser@trashmail.com');
	  $I->fillField(Product::$pwd,'abc@123');
	  $I->wait(2);
	  $I->click(Product::$logInButton);
 	  $I->wait(2);	

   
	
    }
	public function CheckAccountDetails(AcceptanceTester $I)
	{
	   $I->seeInTitle(Product::$LoggedUserTitle);
	   $I->see(Product::$myAccountTitle);
	   $I->moveMouseOver(Product::$myAccount);
	   $I->see(Product::$myOrdersText,Product::$myOrders);
	   $I->see(Product::$myCustomProfileText,Product::$myCustomProfile);
	   $I->see(Product::$myWishListText,Product::$myWishList);
	 	}
	public function selectItem(AcceptanceTester $I)
	{
	
       $I->wantTo('Add a product to the cart');
	   $I->click(Product::$buttonCart);
	   //handle popup dialog
	   $I->performOn(['class' => 'alternative-country-box__country-name'],['click' => 'Continue to Home24.de']);	
	    $I->seeInTitle(Product::$cartTitle);
		$I->see(Product::$shoppingCartText,'h1');
	    $I->see(Product::$emptyCartText ,Product::$emptyCartlbl);
		$I->click(Product::$continueShoppingButton);
		$I->see('Deine Favoriten',Product::$yourFavorites);
		$I->click(['link'  => Product::$cat_Bed]);
		$I->wait(2);
		//handle pop up dialog
		$I->performOn(['class' => 'dy-modal-contents'],['click' => 'div.dy-lb-close']);	
		$I->wait(2);
		$I->click(['link'  => Product::$Item1_springBox]);
		$I->click(['link'  => Product::$Item1_springBox_kinx]);
		$I->see(Product::$Item1_springBox_kinx,Product::$springBox_kinx);

	 	}
}
