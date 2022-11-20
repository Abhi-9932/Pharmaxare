<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Admin_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//admin routes
$route['dashboard'] = 'Admin_controller/dashboard';
$route['add_customer'] = 'Admin_controller/add_customer';
$route['customer_list'] = 'Admin_controller/customer_list';
$route['credit_customer'] = 'Admin_controller/credit_customer';
$route['paid_customer'] = 'Admin_controller/paid_customer';
$route['customer_ledger'] = 'Admin_controller/customer_ledger';
$route['add_manufacturer'] = 'Admin_controller/add_manufacturer';
$route['manufacturer_list'] = 'Admin_controller/manufacturer_list';
$route['manufacturer_ledger'] = 'Admin_controller/manufacturer_ledger';
$route['add_category'] = 'Admin_controller/add_category';
$route['category_list'] = 'Admin_controller/category_list';
$route['add_unit'] = 'Admin_controller/add_unit';
$route['unit_list'] = 'Admin_controller/unit_list';
$route['add_type'] = 'Admin_controller/add_type';
$route['type_list'] = 'Admin_controller/type_list';
$route['leaf_setting'] = 'Admin_controller/leaf_setting';
$route['add_medicine'] = 'Admin_controller/add_medicine';
$route['medicine_list'] = 'Admin_controller/medicine_list';

$route['purchase_list'] = 'Admin_controller/purchase_list';
$route['add_invoice'] = 'Admin_controller/add_invoice';
$route['invoice_list'] = 'Admin_controller/invoice_list';
$route['add_return'] = 'Admin_controller/add_return';
$route['invoice_return_list'] = 'Admin_controller/invoice_return_list';
$route['manufacturer_return_list'] = 'Admin_controller/manufacturer_return_list';
$route['wastage_return_list'] = 'Admin_controller/wastage_return_list';
$route['stock_report'] = 'Admin_controller/stock_report';
$route['batchwise_stock_report'] = 'Admin_controller/batchwise_stock_report';
$route['available_stock'] = 'Admin_controller/available_stock';
$route['add_bank'] = 'Admin_controller/add_bank';
$route['bank_list'] = 'Admin_controller/bank_list';
$route['opening_balance'] = 'Admin_controller/opening_balance';
$route['manufacturer_payment'] = 'Admin_controller/manufacturer_payment';
$route['customer_receive'] = 'Admin_controller/customer_receive';
$route['cash_adjustment'] = 'Admin_controller/cash_adjustment';
$route['debit_voucher'] = 'Admin_controller/debit_voucher';
$route['credit_voucher'] = 'Admin_controller/credit_voucher';
$route['contra_voucher'] = 'Admin_controller/contra_voucher';
$route['journal_voucher'] = 'Admin_controller/journal_voucher';
$route['voucher_list'] = 'Admin_controller/voucher_list';


//inventory
$route['add_inventory'] = 'Admin_controller/add_inventory';
$route['company_list'] = 'Admin_controller/company_list';
$route['salt_list'] = 'Admin_controller/salt_list';
$route['category_list1'] = 'Admin_controller/category_list1';
$route['company_list1'] = 'Admin_controller/company_list1';
$route['hsn'] = 'Admin_controller/hsn';
$route['company_creation'] = 'Admin_controller/company_creation';
$route['new-creation'] = 'Admin_controller/add_company_creation';
$route['add-purchase'] = 'Admin_controller/add_purchase';
$route['add-purchase-do'] = 'Admin_controller/add_purchase_do';
$route['purchase-list'] = 'Admin_controller/purchase_list';

$route['add-sell'] = 'Admin_controller/add_sell';

