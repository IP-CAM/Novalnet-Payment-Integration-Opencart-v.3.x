<?php
/**
 * Novalnet payment method module
 * 
 * This module is used for real time processing of Novalnet transaction of customers.
 *
 *
 * This free contribution made by request.
 * If you have found this script useful a small
 * recommendation as well as a comment on merchant
 * form would be greatly appreciated.
 * 
 * @author    Novalnet AG
 * @copyright Copyright by Novalnet
 * @license   https://www.novalnet.de/payment-plugins/kostenlos/lizenz
 *
 * Script : novalnet_prepayment.php
 */
include(DIR_LANGUAGE . 'en-gb/extension/payment/novalnet_common.php');
$_['text_title']                                 = $_['text_novalnet_prepayment_title']             = 'Prepayment';
$_['text_payment_description']                   = "Once you've submitted the order, you will receive an e-mail with account details to make payment";
$_['payment_logo']                               = '<img id="novalnet_prepayment_logo" src="image/payment/novalnet/novalnet_prepayment.png" alt="Prepayment" title="Prepayment" />';
