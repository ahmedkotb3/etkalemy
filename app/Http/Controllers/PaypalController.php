<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
class PaypalController extends Controller
{
    private $_api_context;

    public function __construct()
    {

        $paypal_conf = Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function pay()
    {
        dd( "true");

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        /***8
         * $course_name = Input::get("course_name");
         * $course_price = Input::get("course_price");
         * $course_desc = Input::get("course_name");
         ****/


        $item_1 = new Item();
        $item_1->setName('Item 1(eventname)')// item name
        ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice('150'); // unit price


// add item to list
        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

$amount = new Amount();
$amount->setCurrency('USD')
    ->setTotal(580);

}
}