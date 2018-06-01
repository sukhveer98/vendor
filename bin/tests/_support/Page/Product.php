<?php
namespace Page;

class Product
{
    public static $homeTitle = 'Login/Registration | home24';
    public static $LoggedUserTitle = 'Herzlich Willkommen in Ihrem Kundencockpit bei Home24 | home24';   
     public static $pageLogo = 'a.GN-logo__logo.GN-logo__home24.GN-header__home24Logo.logo';
    public static $search = 'input#downshift-input-2.search-field-input.GN-search__input';
	public static $navMenuMobel = 'a.GN-link__link.GN-level1__levelOneLink.acte-index-navigationCategory-lnk';
	public static $headerLogin = 'a.GN-myAccountStyles__icon.acte-header-myaccount-lnk.GN-iconWrapper__iconContentWrapper';
	public static $shoppingList = 'a.acte-whishlist-icon-class.GN-actionIcons__naviconItem';
	public static $shoppingCart = 'a.acte-header-cart-icon.GN-actionIcons__naviconItem';
	public static $newUserText = 'Neu bei Home24?';
	public static $newUserButton = 'button.button.button--primary.button--min-width.js-open-registration.acte-login-further-btn';
	public static $logInBanner = 'div.checkout-block-header-container';
	public static $footerText = 'h2.headline-2';
	public static $emailSubscribeButton = 'button.button.button--primary';
	public static $email = 'email';	
	public static $pwd = 'password';
    public static $logInButton = "//button[@type='submit'][contains(@class,'button button--primary pull-right acte-login-login-btn')]";	
	public static $myAccount = 'a.GN-myAccountStyles__icon.acte-header-myaccount-lnk.GN-iconWrapper__iconContentWrapper';
	public static $myAccountTitle = 'Mein Konto';
    public static $myOrders = 'a.acte-myaccount-myorders-lnk';	
	public static $myOrdersText = 'Meine Bestellungen';
	public static $myCustomProfile = 'a.acte-myaccount-myprofile-lnk';	
	public static $myCustomProfileText = 'Mein Kundenprofil';
	public static $myWishList = 'a.acte-myaccount-wishlist-lnk';
    public static $myWishListText = 'Mein Wunschzettel';
	public static $buttonCart = 'a.acte-header-cart-icon.GN-actionIcons__naviconItem';
	public static $cartTitle = 'Warenkorb | home24';
	public static $shoppingCartText = 'Ihr Warenkorb';
	public static $emptyCartText = 'Der Warenkorb ist leer';
	public static $emptyCartlbl = 'div.cart-empty-label.acte-cart-empty-lbl';
	public static $continueShoppingButton = 'a.button.pull-right.buy-more';
	public static $yourFavorites = 'dl.cms-block__cell.cms-block__cell--side-navigation';
	public static $cat_Bed = 'Betten';
	public static $Item1_springBox = 'Boxspringbetten';
	public static $Item1_springBox_kinx = 'Boxspringbett Kinx';
	public static $springBox_kinx = 'h1.article-header__name';


    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
