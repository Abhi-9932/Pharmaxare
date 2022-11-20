  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url(); ?>tools/dist/img/pharma.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">pharmacare</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>tools/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a><?=$this->session->userdata('username'); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="<?php echo base_url();?>index.php/dashboard" class="nav-link <?php if($m=="admindashboard"){echo 'active';}else{echo "";}?>">
					  <i class="nav-icon fas fa-tachometer-alt"></i>
					  <p>Dashboard</p>
					</a>
				</li>
				
				<li class="nav-item <?php if($m=="addinventory"||$m=="companylist"||$m=="saltlist"||$m=="categorylist1"||$m=="hsnlist"){echo 'menu-open';}else{echo "";}?>">
					<a href="#" class="nav-link <?php if($m=="addinventory"||$m=="companylist"||$m=="saltlist"||$m=="categorylist1"||$m=="hsnlist"){echo 'active';}else{echo "";}?>">
					  <i class="nav-icon fas fa-table"></i>
					  <p>
						Inventory
						<i class="fas fa-angle-left right"></i>
					  </p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/add_inventory" class="nav-link <?php if($m=="addinventory"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Inventory</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/company_list" class="nav-link  <?php if($m=="companylist"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Company</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/salt_list" class="nav-link <?php if($m=="saltlist"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Salt</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/category_list1" class="nav-link  <?php if($m=="categorylist1"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Category</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/hsn" class="nav-link  <?php if($m=="hsnlist"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>HSN/SAC</p>
							</a>
						</li>
					</ul>
				</li>
				
				<li class="nav-item">
					<a href="<?php echo base_url();?>index.php/company_creation" class="nav-link <?php if($m=="companycreation"){echo 'active';}else{echo "";}?>">
					  <i class="nav-icon fas fa-chart-pie"></i>
					  <p>Company Creation</p>
					</a>
				</li>
				
				<li class="nav-item <?php if($m=="addpurchase"||$m=="purchaselist"){echo 'menu-open';}else{echo "";}?>">
					<a href="#" class="nav-link <?php if($m=="addpurchase"||$m=="purchaselist"){echo 'active';}else{echo "";}?>">
					  <i class="fas fa-cart-plus"></i>&nbsp &nbsp 
						<p>
							Purchase
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/add-purchase" class="nav-link <?php if($m=="addpurchase"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Purchase</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/purchase_list" class="nav-link <?php if($m=="purchaselist"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Purchase List</p>
							</a>
						</li>
					</ul>
				</li>
				
				<li class="nav-item <?php if($m=="addsell"||$m=="selllist"){echo 'menu-open';}else{echo "";}?>">
					<a href="#" class="nav-link <?php if($m=="addsell"||$m=="selllist"){echo 'active';}else{echo "";}?>">
					  <i class="fas fa-funnel-dollar"></i>&nbsp &nbsp 
						<p>
							Sell
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/add-sell" class="nav-link <?php if($m=="addsell"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Sell</p>
							</a>
						</li>
						<!--<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/purchase_list" class="nav-link <?php if($m=="purchaselist"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Purchase List</p>
							</a>
						</li>-->
					</ul>
				</li>
				
				<li class="nav-item <?php if($m=="addcustomer"||$m=="customerlist"||$m=="creditcustomer"||$m=="paidcustomer"||$m=="customerledger"){echo 'menu-open';}else{echo "";}?>">
					<a href="#" class="nav-link <?php if($m=="addcustomer"||$m=="customerlist"||$m=="creditcustomer"||$m=="paidcustomer"||$m=="customerledger"){echo 'active';}else{echo "";}?>">
					  <i class="nav-icon fas fa-copy"></i>
					  <p>
						Customer
						<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/add_customer" class="nav-link <?php if($m=="addcustomer"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Customer</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/customer_list" class="nav-link <?php if($m=="customerlist"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Customer List</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/credit_customer" class="nav-link <?php if($m=="creditcustomer"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Credit Customer</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/paid_customer" class="nav-link <?php if($m=="paidcustomer"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Paid Customer</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/customer_ledger" class="nav-link <?php if($m=="customerledger"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Customer Ledger</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item <?php if($m=="addmanufacturer"||$m=="manufacturerlist"||$m=="manufacturerledger"){echo 'menu-open';}else{echo "";}?>">
					<a href="#" class="nav-link <?php if($m=="addmanufacturer"||$m=="manufacturerlist"||$m=="manufacturerledger"){echo 'active';}else{echo "";}?>">
					  <i class="nav-icon fas fa-chart-pie"></i>
					  <p>
						Manufacturer
						<i class="right fas fa-angle-left"></i>
					  </p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>index.php/add_manufacturer" class="nav-link <?php if($m=="addmanufacturer"){echo 'active';}else{echo "";}?>">
						  <i class="far fa-circle nav-icon"></i>
						  <p>Add Manufacturer</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>index.php/manufacturer_list" class="nav-link <?php if($m=="manufacturerlist"){echo 'active';}else{echo "";}?>">
						  <i class="far fa-circle nav-icon"></i>
						  <p>Manufacturer List</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>index.php/manufacturer_ledger" class="nav-link <?php if($m=="manufacturerledger"){echo 'active';}else{echo "";}?>">
						  <i class="far fa-circle nav-icon"></i>
						  <p>Manufacturer Ledger</p>
						</a>
						</li>
					</ul>
				</li>
				<li class="nav-item <?php if($m=="addcategory"||$m=="categorylist"||$m=="addunit"||$m=="unitlist"||$m=="addtype"||$m=="typelist"||$m=="leafsetting"||$m=="addmedicine"||$m=="medicinelist"){echo 'menu-open';}else{echo "";}?>">
					<a href="#" class="nav-link <?php if($m=="addcategory"||$m=="categorylist"||$m=="addunit"||$m=="unitlist"||$m=="addtype"||$m=="typelist"||$m=="leafsetting"||$m=="addmedicine"||$m=="medicinelist"){echo 'active';}else{echo "";}?>">
					  <i class="nav-icon fas fa-tree"></i>
					  <p>
						Medicine
						<i class="fas fa-angle-left right"></i>
					  </p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/add_category" class="nav-link <?php if($m=="addcategory"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Category</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/category_list" class="nav-link  <?php if($m=="categorylist"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Category List</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/add_unit" class="nav-link <?php if($m=="addunit"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Unit</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/unit_list" class="nav-link <?php if($m=="unitlist"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Unit List</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/add_type" class="nav-link <?php if($m=="addtype"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Type</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/type_list" class="nav-link <?php if($m=="typelist"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Type List</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/leaf_setting" class="nav-link <?php if($m=="leafsetting"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Leaf Setting</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/add_medicine" class="nav-link <?php if($m=="addmedicine"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Medicine</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/medicine_list" class="nav-link <?php if($m=="medicinelist"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Medicine List</p>
							</a>
						</li>
					</ul>
				</li>
			<!--	<li class="nav-item <?php if($m=="addpurchase"||$m=="purchaselist"){echo 'menu-open';}else{echo "";}?>">
					<a href="#" class="nav-link <?php if($m=="addpurchase"||$m=="purchaselist"){echo 'active';}else{echo "";}?>">
					  <i class="nav-icon fas fa-edit"></i>
						<p>
							Purchase
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/add_purchase" class="nav-link <?php if($m=="addpurchase"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Purchase</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/purchase_list" class="nav-link <?php if($m=="purchaselist"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Purchase List</p>
							</a>
						</li>
					</ul>
				</li> -->
				<li class="nav-item <?php if($m=="addinvoice"||$m=="invoicelist"){echo 'menu-open';}else{echo "";}?>">
					<a href="#" class="nav-link <?php if($m=="addinvoice"||$m=="invoicelist"){echo 'active';}else{echo "";}?>">
					  <i class="nav-icon fas fa-table"></i>
					  <p>
						Invoice
						<i class="fas fa-angle-left right"></i>
					  </p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/add_invoice" class="nav-link  <?php if($m=="addinvoice"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Invoice</p>
							</a>
						</li>
						<!--<li class="nav-item">
							<a href="pages/tables/data.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>POS Invoice</p>
							</a>
						</li>-->
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/invoice_list" class="nav-link  <?php if($m=="invoicelist"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Invoice List</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item <?php if($m=="addreturn"||$m=="invoicereturnlist"||$m=="manufacturerreturnlist"||$m=="wastagereturnlist"){echo 'menu-open';}else{echo "";}?>">
					<a href="#" class="nav-link <?php if($m=="addreturn"||$m=="invoicereturnlist"||$m=="manufacturerreturnlist"||$m=="wastagereturnlist"){echo 'active';}else{echo "";}?>">
					  <i class="nav-icon fas fa-table"></i>
					  <p>
						Return
						<i class="fas fa-angle-left right"></i>
					  </p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/add_return" class="nav-link <?php if($m=="addreturn"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Return</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/invoice_return_list" class="nav-link <?php if($m=="invoicereturnlist"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Invoice Return List</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/manufacturer_return_list" class="nav-link <?php if($m=="manufacturerreturnlist"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Manufacturer Return List</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/wastage_return_list" class="nav-link <?php if($m=="wastagereturnlist"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Wastage Return List</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item <?php if($m=="stockreport"||$m=="b_stockreport"||$m=="availablestock"){echo 'menu-open';}else{echo "";}?>">
					<a href="#" class="nav-link <?php if($m=="stockreport"||$m=="b_stockreport"||$m=="availablestock"){echo 'active';}else{echo "";}?>">
					  <i class="nav-icon fas fa-table"></i>
					  <p>
						Stock
						<i class="fas fa-angle-left right"></i>
					  </p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/stock_report" class="nav-link <?php if($m=="stockreport"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Stock Report</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/batchwise_stock_report" class="nav-link <?php if($m=="b_stockreport"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Stock Report(Batch Wise)</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/available_stock" class="nav-link <?php if($m=="availablestock"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Available Stock</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item <?php if($m=="addbank"||$m=="banklist"){echo 'menu-open';}else{echo "";}?>">
					<a href="#" class="nav-link <?php if($m=="addbank"||$m=="banklist"){echo 'active';}else{echo "";}?>">
					  <i class="nav-icon far fa-envelope"></i>
					  <p>
						Bank
						<i class="fas fa-angle-left right"></i>
					  </p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/add_bank" class="nav-link <?php if($m=="addbank"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Bank</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/bank_list" class="nav-link <?php if($m=="banklist"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Bank List</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item <?php if($m=="openbal"||$m=="manupayment"||$m=="customerreceive"||$m=="cashadjust"||$m=="debitvoucher"||$m=="creditvoucher"||$m=="contravoucher"||$m=="journalvoucher"||$m=="voucherlist"){echo 'menu-open';}else{echo "";}?>">
					<a href="#" class="nav-link <?php if($m=="openbal"||$m=="manupayment"||$m=="customerreceive"||$m=="cashadjust"||$m=="debitvoucher"||$m=="creditvoucher"||$m=="contravoucher"||$m=="journalvoucher"||$m=="voucherlist"){echo 'active';}else{echo "";}?>">
					  <i class="nav-icon far fa-plus-square"></i>
					  <p>
						Account
						<i class="fas fa-angle-left right"></i>
					  </p>
					</a>
					<ul class="nav nav-treeview">
						<!--<li class="nav-item">
							<a href="pages/examples/lockscreen.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Chart Of Account</p>
							</a>
						</li>-->
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/opening_balance" class="nav-link <?php if($m=="openbal"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Opening Balance</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/manufacturer_payment" class="nav-link <?php if($m=="manupayment"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Manufacturer Payment</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/customer_receive" class="nav-link <?php if($m=="customerreceive"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Customer Receive</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/cash_adjustment" class="nav-link <?php if($m=="cashadjust"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Cash Adjustment</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/debit_voucher" class="nav-link <?php if($m=="debitvoucher"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Debit Voucher</p>
							</a>
						</li>
							<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/credit_voucher" class="nav-link <?php if($m=="creditvoucher"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Credit Voucher</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/contra_voucher" class="nav-link <?php if($m=="contravoucher"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Contra Voucher</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/journal_voucher" class="nav-link <?php if($m=="journalvoucher"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Journal Voucher</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/voucher_list" class="nav-link <?php if($m=="voucherlist"){echo 'active';}else{echo "";}?>">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Voucher List</p>
							</a>
						</li>
					  
						<li class="nav-item">
							<a href="#" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>
								Report
								<i class="fas fa-angle-left right"></i>
							  </p>
							</a>
							<ul class="nav nav-treeview">
							  <li class="nav-item">
								<a href="pages/examples/login-v2.html" class="nav-link">
								  <i class="far fa-circle nav-icon"></i>
								  <p>Cash Book</p>
								</a>
							  </li>
							  <li class="nav-item">
								<a href="pages/examples/register-v2.html" class="nav-link">
								  <i class="far fa-circle nav-icon"></i>
								  <p>Bank Book</p>
								</a>
							  </li>
							  <li class="nav-item">
								<a href="pages/examples/forgot-password-v2.html" class="nav-link">
								  <i class="far fa-circle nav-icon"></i>
								  <p>General Ledger</p>
								</a>
							  </li>
							  <li class="nav-item">
								<a href="pages/examples/recover-password-v2.html" class="nav-link">
								  <i class="far fa-circle nav-icon"></i>
								  <p>Trial Balance</p>
								</a>
							  </li>
							  <li class="nav-item">
								<a href="pages/examples/recover-password-v2.html" class="nav-link">
								  <i class="far fa-circle nav-icon"></i>
								  <p>Profit Loss</p>
								</a>
							  </li>
							  <li class="nav-item">
								<a href="pages/examples/recover-password-v2.html" class="nav-link">
								  <i class="far fa-circle nav-icon"></i>
								  <p>Cash Flow</p>
								</a>
							  </li>
							  <li class="nav-item">
								<a href="pages/examples/recover-password-v2.html" class="nav-link">
								  <i class="far fa-circle nav-icon"></i>
								  <p>COA Print</p>
								</a>
							  </li>
							  <li class="nav-item">
								<a href="pages/examples/recover-password-v2.html" class="nav-link">
								  <i class="far fa-circle nav-icon"></i>
								  <p>Balance Sheet</p>
								</a>
							  </li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="nav-item">
				<a href="#" class="nav-link">
					  <i class="nav-icon fas fa-book"></i>
					  <p>
						Report
						<i class="fas fa-angle-left right"></i>
					  </p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/examples/invoice.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Closing</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/profile.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Closing List</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/e-commerce.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Sales Report</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/projects.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>User Wise Sales Report</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/project-add.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p style="font-size: 15px;">Product Wise Sales Report</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/project-edit.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p style="font-size: 13px;">Category Wise Sales Report</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/project-detail.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Purchase Report</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/examples/contacts.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p style="font-size: 13px;">Purchase Report Category Wise</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
					  <i class="nav-icon far fa-plus-square"></i>
					  <p>
						Human Resource
						<i class="fas fa-angle-left right"></i>
					  </p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="#" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>
								Employee
								<i class="fas fa-angle-left right"></i>
							  </p>
							</a>
							<ul class="nav nav-treeview">
							  <li class="nav-item">
								<a href="pages/examples/login-v2.html" class="nav-link">
								  <i class="far fa-circle nav-icon"></i>
								  <p>Add Designation</p>
								</a>
							  </li>
							  <li class="nav-item">
								<a href="pages/examples/register-v2.html" class="nav-link">
								  <i class="far fa-circle nav-icon"></i>
								  <p>Designation List</p>
								</a>
							  </li>
							  <li class="nav-item">
								<a href="pages/examples/forgot-password-v2.html" class="nav-link">
								  <i class="far fa-circle nav-icon"></i>
								  <p>Add Employee</p>
								</a>
							  </li>
							  <li class="nav-item">
								<a href="pages/examples/recover-password-v2.html" class="nav-link">
								  <i class="far fa-circle nav-icon"></i>
								  <p>Employee List</p>
								</a>
							  </li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>
								Attendance
								<i class="fas fa-angle-left right"></i>
							  </p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/examples/login-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Add Attendance</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/register-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Attendance List</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/forgot-password-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Attendance Report</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>
								Payroll
								<i class="fas fa-angle-left right"></i>
							  </p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/examples/login-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Add Benefits</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/register-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Benefit List</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/forgot-password-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Add Salary Setup</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/forgot-password-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Salary Setup List</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/forgot-password-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Add Salary Setup</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/forgot-password-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Salary Generate</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/forgot-password-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Salary Payment</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>
								Expence
								<i class="fas fa-angle-left right"></i>
							  </p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/examples/login-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Add Expense Item</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/register-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Expense Item List</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/forgot-password-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Add Expense</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/forgot-password-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Expense List</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/forgot-password-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Expense Statement</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>
								Loan
								<i class="fas fa-angle-left right"></i>
							  </p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/examples/login-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Add Person</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/register-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Person List</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/forgot-password-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Add Loan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/forgot-password-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Add Payment</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/forgot-password-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Loan List</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/examples/forgot-password-v2.html" class="nav-link">
									  <i class="far fa-circle nav-icon"></i>
									  <p>Person Ledger</p>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
					  <i class="nav-icon fas fa-edit"></i>
						<p>
							Tax
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/forms/general.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Tax Settings</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/forms/advanced.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Income Tax</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/forms/advanced.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Income Tax List</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
					  <i class="nav-icon fas fa-edit"></i>
						<p>
							Service
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/forms/general.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Service</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/forms/advanced.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Service List</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/forms/advanced.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Invoice</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/forms/advanced.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Invoice List</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
					  <i class="nav-icon fas fa-search"></i>
					  <p>
						Search
						<i class="fas fa-angle-left right"></i>
					  </p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/search/simple.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Medicine Search</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/search/enhanced.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Invoice Search</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/search/enhanced.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Purchase Search</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
					  <i class="nav-icon fas fa-tree"></i>
					  <p>
						Application Setting
						<i class="fas fa-angle-left right"></i>
					  </p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/UI/general.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Category</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/icons.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add User</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/buttons.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>User List</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/sliders.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Currency List</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/modals.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>setting</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/navbar.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Restore Database</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/timeline.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Databse Import</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/ribbons.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>panel setting</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/ribbons.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Add Roll</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/ribbons.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Roll List</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/ribbons.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Assign Roll</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/ribbons.html" class="nav-link">
							  <i class="far fa-circle nav-icon"></i>
							  <p>Language</p>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>