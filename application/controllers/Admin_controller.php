<?php
class Admin_controller extends CI_Controller
{
	
	function __construct()
		{
		parent::__construct();
		//$this->load->helper('url'); 
		//$this->load->library('session');
		$this->load->database(); //connect database*/
		$this->load->model('Admin_model');
		}

		function index()
		{
			$this->load->view('admin/admin-login');
     
		}
		
		function logindo()
		{
			$data=array("username"=>$this->input->post('username'),"password"=>$this->input->post('password'));
			$query=$this->db->get_where("admin_info",$data);
			$res=$query->result_array();
			if($res)
			{
				$this->session->set_userdata('username',$this->input->post('username'));
				redirect('Admin_controller/dashboard');
				//echo "successfull";
			}else{
				$this->session->set_flashdata('error', "Invalid Details");
				redirect('Admin_controller/index');
			}
		}
		
		function logout()
	    {
			$this->session->unset_userdata('username');
			$this->session->sess_destroy();
			redirect('Admin_controller/index'); 
	    }
			
		function dashboard()
		{
			$s=$this->session->userdata('username');
			if($s){
				$this->load->view('admin/admin-dashboard');
			}else{
				redirect('Admin_controller/index');
			}
			
		}
		
		function add_customer()
		{
			$this->load->view('admin/add-customer');
     
		}
		
		public function addcustomerdo()
		{
			$bal=$this->input->post('balance');
			if($bal=="" || $bal==0){
				$bal=0;
			}
			
			$data=array("customer_name"=>$this->input->post('customername'),
						"email1"=>$this->input->post('email1'),
						"mobile"=>$this->input->post('mobile'),
						"email2"=>$this->input->post('email2'),
						"phone"=>$this->input->post('phone'),
						"address1"=>$this->input->post('address1'),
						"Contact"=>$this->input->post('Contact'),
						"address2"=>$this->input->post('address2'),
						"fax"=>$this->input->post('fax'),
						"state"=>$this->input->post('state'),
						"city"=>$this->input->post('city'),
						"zip"=>$this->input->post('zip'),
						"country"=>$this->input->post('country'),
						"balance"=>$bal,
						"date"=>$this->input->post('currentDate'),
						"time"=>$this->input->post('currentTime'),
			);
			$response=$this->Admin_model->add_customer($data);
			if($response)
			{
				//echo "sucess";
				redirect('Admin_controller/customer_list');
			}
			else{
				echo "unsucess";
			}
			
		}
		
		function customer_list()
		{
			$customer=$this->Admin_model->fetch_customer();
			$data['customers']=$customer;
			
			$total=$this->Admin_model->fetch_total_bal();
			$data['total']=$total;

			$this->load->view('admin/customer-list',$data);
			
     
		}
		
		function edit_customer_list()
		{
			//echo"sucess";
			$this->load->view('admin/edit-customer');
			
		}
		
			//popup delete
		function delete_customer_list()
			{
				//$id=$this->uri->segment('3');
				$id=$this->input->post('delete_id');
				$this->Admin_model->delete_customer_list($id);
				$con=$this->session->set_flashdata('success_delete', "Deleted Successfully");
				echo $con;
				//redirect("Admin_controller/customer_list");

			}
		
		function credit_customer()
		{	
			
			
			$credit_customer=$this->Admin_model->fetch_credit_customer();
			$data['credit_customers']=$credit_customer;
			$this->load->view('admin/credit-customer',$data);
			
			
			
		}
		
		function paid_customer()
		{
			$x=0;
			$paid_customer=$this->Admin_model->fetch_paid_customer($x);
			$data['paid_customers']=$paid_customer;
			$this->load->view('admin/paid-customer',$data);
			
		}
		
		function customer_ledger()
		{
		
			$this->load->view('admin/customer-ledger');
			
		}
		
		function add_manufacturer()
		{
		
			$this->load->view('admin/add-manufacturer');
			
		}
		
		public function addmanufacturerdo()
		{
			$bal=$this->input->post('balance');
			if($bal=="" || $bal==0){
				$bal=0;
			}
			
			$data=array("manufacturer_name"=>$this->input->post('manufacturername'),
						"email1"=>$this->input->post('email1'),
						"mobile"=>$this->input->post('mobile'),
						"email2"=>$this->input->post('email2'),
						"phone"=>$this->input->post('phone'),
						"address1"=>$this->input->post('address1'),
						"Contact"=>$this->input->post('Contact'),
						"address2"=>$this->input->post('address2'),
						"fax"=>$this->input->post('fax'),
						"state"=>$this->input->post('state'),
						"city"=>$this->input->post('city'),
						"zip"=>$this->input->post('zip'),
						"country"=>$this->input->post('country'),
						"balance"=>$bal,
						"date"=>$this->input->post('currentDate'),
						"time"=>$this->input->post('currentTime'),
			);
			$response=$this->Admin_model->add_manufacturer($data);
			if($response)
			{
				//echo "sucess";
				redirect('Admin_controller/manufacturer_list');
			}
			else{
				echo "unsucess";
			}
			
		}
		
		function manufacturer_list()
		{
			$manufacturer=$this->Admin_model->fetch_manufacturer();
			$data['manufacturers']=$manufacturer;
			$this->load->view('admin/manufacturer-list',$data);
			//$this->load->view('admin/manufacturer-list');
			
		}
		
		function delete_manufacturer_list()
			{
				$id=$this->uri->segment('3');
				$this->Admin_model->delete_manufacturer_list($id);
				$this->session->set_flashdata('success_delete', "Deleted Successfully");
				redirect("Admin_controller/manufacturer_list");

			}
		
		function edit_manufacturer_list()
		{
			//echo"sucess";
			$this->load->view('admin/edit-manufacturer');
			
		}
		
		function manufacturer_ledger()
		{
		
			$this->load->view('admin/manufacturer-ledger');
			
		}
		
		function add_category()
		{	
		
			$this->load->view('admin/add-category');
			
		}
		
		public function addcategorydo()
		{

			$data=array("category_name"=>$this->input->post('categoryname'),
						"status"=>$this->input->post('status'),
			);
			$response=$this->Admin_model->add_category($data);
			if($response)
			{
				//echo "sucess";
				redirect('Admin_controller/category_list');
			}
			else{
				echo "unsucess";
			}
			
		}
		
		function category_list()
		{
			$category=$this->Admin_model->fetch_category();
			$data['category']=$category;
			$this->load->view('admin/category-list',$data);
			//$this->load->view('admin/category-list');
			
		}
		
		function edit_category()
		{	
		
			$this->load->view('admin/edit-category');
			
		}
		
		function add_unit()
		{
		
			$this->load->view('admin/add-unit');
			
		}
		
		public function addunitdo()
		{

			$data=array("unit_name"=>$this->input->post('unitname'),
						"status"=>$this->input->post('status'),
			);
			$response=$this->Admin_model->add_unit($data);
			if($response)
			{
				//echo "sucess";
				redirect('Admin_controller/unit_list');
			}
			else{
				echo "unsucess";
			}
			
		}
		
		function unit_list()
		{
			$unit=$this->Admin_model->fetch_unit();
			$data['units']=$unit;
			$this->load->view('admin/unit-list',$data);
			//$this->load->view('admin/unit-list');
			
		}
		
		function add_type()
		{
		
			$this->load->view('admin/add-type');
			
		}
		
		public function addtypedo()
		{

			$data=array("type_name"=>$this->input->post('typename'),
						"status"=>$this->input->post('status'),
			);
			$response=$this->Admin_model->add_type($data);
			if($response)
			{
				//echo "sucess";
				redirect('Admin_controller/type_list');
			}
			else{
				echo "unsucess";
			}
			
		}
		
		function type_list()
		{
			$type=$this->Admin_model->fetch_type();
			$data['types']=$type;
			$this->load->view('admin/type-list',$data);
			
		}
		
		function add_leaf()
		{
		
			$this->load->view('admin/add-leaf');
			
		}
		
		public function addleafdo()
		{

			$data=array("leaf_type"=>$this->input->post('leaftype'),
						"total_num"=>$this->input->post('totalnumber'),
			);
			$response=$this->Admin_model->add_leaf($data);
			if($response)
			{
				//echo "sucess";
				redirect('Admin_controller/leaf_setting');
			}
			else{
				echo "unsucess";
			}
			
		}
		
		
		function leaf_setting()
		{
			$leaf=$this->Admin_model->fetch_leaf();
			$data['leafs']=$leaf;
			$this->load->view('admin/leaf-setting',$data);
			
		}
		
		function edit_leaf_setting()
		{
			//echo"sucess";
			$this->load->view('admin/edit-leaf-setting');
			
		}
		

		function add_medicine()
		{
			$leaf_setting=$this->Admin_model->fetch_leaf_setting();
			$data['leaf_settings']=$leaf_setting;
			
			$Select_Category=$this->Admin_model->fetch_Select_Category();
			$data['Select_Category']=$Select_Category;
			
			$Select_unit=$this->Admin_model->fetch_Select_unit();
			$data['Select_unit']=$Select_unit;
			
			$Select_medicine=$this->Admin_model->fetch_Select_medicine();
			$data['Select_medicine']=$Select_medicine;
			
			$Select_manufacturer=$this->Admin_model->fetch_Select_manufacturer();
			$data['Select_manufacturer']=$Select_manufacturer;
			
			$this->load->view('admin/add-medicine',$data);
			
		}
		
		function addmedicinedo()
		{
			//$x = $this->input->post('selectunit');
			//$y = explode(",",$x);
				//print_r ($y);
			//echo $a=$y[0];
			//echo $b=$y[1];
			
				
			$photo=array(
				'upload_path' => './tools/upload',
				'allowed_types' => 'jpeg|jpg|png|pdf',
				'encrypt_name' => TRUE
			);
			
			$proof_name = $_FILES['image']['name'];
			
			$this->load->library('upload', $photo);
			$this->upload->initialize($photo);
			
			
			if($proof_name==""){
				$proof_name="N/A";
			}else{
				$this->upload->do_upload('image');
				$proof_data =$this->upload->data();
				$proof_name=$proof_data['file_name'];
			}
					
				$data=array("product_id"=>$this->input->post('barcode'),
				"strength"=>$this->input->post('strength'),
				"product_name"=>$this->input->post('medicinename'),
				"generic_name"=>$this->input->post('genericname'),
				"box_size"=>$this->input->post('boxsize'),
				"shelf"=>$this->input->post('shelf'),
				"unit"=>$this->input->post('selectunit'),
				"medicine_details"=>$this->input->post('medicinedetails'),
				"category_name"=>$this->input->post('selectcategory'),
				"medicine_type"=>$this->input->post('selectmedicine'),
				"price"=>$this->input->post('price'),
				"image"=>$proof_name,
				"manufacturer_name"=>$this->input->post('selectmanufacturer'),
				"manufacturer_price"=>$this->input->post('balance'),
				"status"=>$this->input->post('status')
				
				);
				//$this->session->set_flashdata('success', "Added Successfully"); 
				
					
				$prof=$this->Admin_model->add_medicine($data);
				
				if($prof)
				{
					//echo "sucessfull";
					redirect('Admin_controller/medicine_list');
				}
				else
				{
					echo "unsucessfull";
				}						
		}

		
		
		function medicine_list()
		{
			$medicine_list=$this->Admin_model->fetch_medicine_list();
			$data['medicine_list']=$medicine_list;
			$this->load->view('admin/medicine-list',$data);
			
		}
		
		
		
		function add_invoice()
		{
			
			$this->load->view('admin/add-invoice');
			
		}
		
		function invoice_list()
		{
			
			$this->load->view('admin/invoice-list');
			
		}
		function add_return()
		{
		
			$this->load->view('admin/add-return');
			
		}
		
		function invoice_return_list()
		{
		
			$this->load->view('admin/invoice-return-list');
			
		}
		
		function manufacturer_return_list()
		{
		
			$this->load->view('admin/manufacturer-return-list');
			
		}
		
		function wastage_return_list()
		{
		
			$this->load->view('admin/wastage-return-list');
			
		}
		
		
		function stock_report()
		{
		
			$this->load->view('admin/stock-report');
			
		}
		
		function batchwise_stock_report()
		{
		
			$this->load->view('admin/batchwise-stockreport');
			
		}
		
		function available_stock()
		{
		
			$this->load->view('admin/available-stock');
			
		}
		
		function add_bank()
		{
		
			$this->load->view('admin/add-bank');
			
		}
		
		function bank_list()
		{
		
			$this->load->view('admin/bank-list');
			
		}
		
		function opening_balance()
		{
		
			$this->load->view('admin/opening-balance');
			
		}
		
		function manufacturer_payment()
		{
		
			$this->load->view('admin/manufacturer-payment');
			
		}
		
		function customer_receive()
		{
		
			$this->load->view('admin/customer-receive');
			
		}
		
		function cash_adjustment()
		{
		
			$this->load->view('admin/cash-adjustment');
			
		}
		
		function debit_voucher()
		{
		
			$this->load->view('admin/debit-voucher');
			
		}
		
		function credit_voucher()
		{
		
			$this->load->view('admin/credit-voucher');
			
		}
		
		function contra_voucher()
		{
		
			$this->load->view('admin/contra-voucher');
			
		}
		
		function journal_voucher()
		{
		
			$this->load->view('admin/journal-voucher');
			
		}
		
		function voucher_list()
		{
		
			$this->load->view('admin/voucher-list');
			
		}
		
		function add_inventory()
		{
		
			$this->load->view('admin/add-inventory');
			
		}
		
		//inventory company
	
		function getAllCmpny()
		{
			$sl=$this->Admin_model->fetchAllCmpny();
				//print_r($sl);
				$arr=[];
				foreach($sl as $sl){
					$a=$sl['cname'];
					array_push($arr, $a);
				}
				//print_r($arr);
				echo json_encode($arr);			
		}
		
		function companydo()
		{
			
			$c = $this->input->post('companyName');
			
		    $data=array(
				"cname"=>$c,
				"prefrences"=>$this->input->post('prefrences'),
				"invPrint"=>$this->input->post('invPrint'),
				"order1"=>$this->input->post('order1'),
				"dumpDay"=>$this->input->post('dumpDay'),
				"minMargin"=>$this->input->post('minMargin'),
				"receive"=>$this->input->post('receive'),
				"salesTax"=>$this->input->post('salesTax'),
				"purchaseTax"=>$this->input->post('purchaseTax'),
				"cess1"=>$this->input->post('cess1'),
				"cess2"=>$this->input->post('cess2')
			);
			
			$prof=$this->Admin_model->add_company($data);
				
				if($prof)
				{
					echo $c;
					
				}
				else
				{
					echo "unsucessfull";
				}	
				
		}
			
			//inventory category
			
		function getAllcategory()
		{
			$sl=$this->Admin_model->fetchAllCategory();
				//print_r($sl);
				$arr=[];
				foreach($sl as $sl){
					$a=$sl['categoryName'];
					array_push($arr, $a);
				}
				//print_r($arr);
				echo json_encode($arr);			
		}
		
		function categorydo()
		{
			
			$c = $this->input->post('categoryName');
			
		    $data=array(
				"categoryName"=>$c,
				"minMargin"=>$this->input->post('minMargin'),
			
			);
			
			$prof=$this->Admin_model->ad_category($data);
				
				if($prof)
				{
					echo $c;
					
				}
				else
				{
					echo "unsucessfull";
				}	
				
		}
		
			//inventory Salt
			
		function getAllsalt()
		{
			$sl=$this->Admin_model->fetchAllSalt();
				//print_r($sl);
				$arr=[];
				foreach($sl as $sl){
					$a=$sl['newSalt'];
					array_push($arr, $a);
				}
				//print_r($arr);
				echo json_encode($arr);			
		}
		
		function saltdo()
		{
			
			$c = $this->input->post('newSalt');
			
		    $data=array(
				"newSalt"=>$c,
			
			);
			
			$prof=$this->Admin_model->add_salt($data);
				
				if($prof)
				{
					echo $c;
					
				}
				else
				{
					echo "unsucessfull";
				}	
				
		}
		
			//inventory HSN/SAC
		
		function getAllhsn()
		{
			$sl=$this->Admin_model->fetchAllhsn();
				//print_r($sl);
				$arr=[];
				foreach($sl as $sl){
					$a=$sl['hac'];
					array_push($arr, $a);
				}
				//print_r($arr);
				echo json_encode($arr);			
		}
		
		function hsndo()
		{
			
			$c = $this->input->post('hac');
			
		    $data=array(
				"hac"=>$c,
				"shortName"=>$this->input->post('shortName'),
				"sgst"=>$this->input->post('sgst'),
				"cgst"=>$this->input->post('cgst'),
				"igst"=>$this->input->post('igst'),
				"type"=>$this->input->post('type'),
				"unit"=>$this->input->post('unit'),
				"cess"=>$this->input->post('cess')
			
			);
			
			$prof=$this->Admin_model->add_hsn($data);
				
				if($prof)
				{
					echo $c;
					
				}
				else
				{
					echo "unsucessfull";
				}	
				
		}
		
			//inventory insert
		public function inventorydo()
		{
			
			$data=array("status"=>$this->input->post('status'),
						"type"=>$this->input->post('type'),
						"hide"=>$this->input->post('hide'),
						"product"=>$this->input->post('product'),
						"packing"=>$this->input->post('packing'),
						"askdose"=>$this->input->post('askdose'),
						"unit1"=>$this->input->post('unit1'),
						"unit2"=>$this->input->post('unit2'),
						"decimal1"=>$this->input->post('decimal1'),
						"colortype"=>$this->input->post('colortype'),
						"itemtype"=>$this->input->post('itemtype'),
						"company"=>$this->input->post('company'),
						"salt"=>$this->input->post('salt'),
						"hsn/sac"=>$this->input->post('hsn/sac'),
						"local"=>$this->input->post('local'),
						"sgst"=>$this->input->post('sgst'),
						"cgst"=>$this->input->post('cgst'),
						"central"=>$this->input->post('central'),
						"igst"=>$this->input->post('igst'),
						"cgr"=>$this->input->post('cgr'),
						"mrp"=>$this->input->post('mrp'),
						"prate"=>$this->input->post('prate'),
						"cost"=>$this->input->post('cost'),
						"ratea"=>$this->input->post('ratea'),
						"rateb"=>$this->input->post('rateb'),
						"ratec"=>$this->input->post('ratec'),
						"convinj"=>$this->input->post('convinj'),
						"convcas"=>$this->input->post('convcas'),
						"negative"=>$this->input->post('negative'),
		
			);
			$response=$this->Admin_model->add_inventory($data);
			if($response)
			{
				//echo "sucess";
				redirect('Admin_controller/add_inventory');
			}
			else{
				echo "unsucess";
			}
			
		}
			
			//fetch company
		function company_list()
		{
			$company=$this->Admin_model->fetch_company();
			$data['company']=$company;
			$this->load->view('admin/company-list',$data);
			
		}
			
			//edit Company 
		function edit_company()
		{
			$id=$this->uri->segment(3);
			$query=$this->db->get_where("company_info",array("id"=>$id));
			$res=$query->result_array();
			if($res)
			{
	 			$data['edit_company']=$res;
				$this->load->view('admin/edit-company',$data);
			}
			else
			{
				redirect("Admin_controller/company_list");
			}
			//$this->load->view('admin/edit-company');
			
		}
		
		function edit_company_do()
		{
			$data=array("cname"=>$this->input->post('companyName'),
						"prefrences"=>$this->input->post('prefrences'),
						"invprint"=>$this->input->post('invPrint'),
						"order1"=>$this->input->post('order1'),
						"dumpDay"=>$this->input->post('dumpDay'),
						"minMargin"=>$this->input->post('minMargin'),
						"receive"=>$this->input->post('receive'),
						"salesTax"=>$this->input->post('salesTax'),
						"purchaseTax"=>$this->input->post('purchaseTax'),
						"cess1"=>$this->input->post('cess1'),
						"cess2"=>$this->input->post('cess2')
		);
			$id=$this->input->post('id');
			$this->Admin_model->edit_company_do($data,$id);
			$this->session->set_flashdata('success_edit', "Edited Successfully");
			redirect("Admin_controller/company_list");
		}
		
			//Delete Company
		function delete_company_list()
		{
			//$id=$this->uri->segment('3');
			$id=$this->input->post('id');
			$this->Admin_model->delete_company_list($id);
			$con=$this->session->set_flashdata('success_delete', "Deleted Successfully");
			echo $con;
			//redirect("Admin_controller/customer_list");

		}
			
			//Fetch salt
		function salt_list()
		{
			$salt=$this->Admin_model->fetch_salt();
			$data['salt']=$salt;
			$this->load->view('admin/salt-list',$data);
			
		}
			
			//Edit Salt
		function edit_salt()
		{
			$id=$this->uri->segment(3);
			$query=$this->db->get_where("salt_info",array("id"=>$id));
			$res=$query->result_array();
			if($res)
			{
	 			$data['edit_salt']=$res;
				$this->load->view('admin/edit-salt',$data);
			}
			else
			{
				redirect("Admin_controller/salt_list");
			}
	
		}
	
		function edit_salt_do()
		{
			$data=array("newSalt"=>$this->input->post('newSalt'));
			$id=$this->input->post('id');
			$this->Admin_model->edit_salt_do($data,$id);
			$this->session->set_flashdata('success_edit', "Edited Successfully");
			redirect("Admin_controller/salt_list");
		}

		
		/*public function edit_show(){
		$id = $_POST['id'];
		
		$data = $this->Admin_model->edit_show_model($id);
			
		echo json_encode($data);
		}	*/
		
	/*	public function edit_salt_list(){
		$id = $_POST['id'];
		$user['newSalt'] = $_POST['newSalt'];
		$query = $this->Admin_model->edit_salt_list_model($user, $id);
		}
		*/
		
			//Delete Salt
		function delete_salt_list()
			{
				//$id=$this->uri->segment('3');
				$id=$this->input->post('id');
				$this->Admin_model->delete_salt_list($id);
				$con=$this->session->set_flashdata('success_delete', "Deleted Successfully");
				echo $con;
				//redirect("Admin_controller/customer_list");
			
			}
			
			//fetch category
		function category_list1()
		{
			$category=$this->Admin_model->fetch_category1();
			$data['category']=$category;
			$this->load->view('admin/categorylist',$data);
			
		}
			
			//edit category
		function edit_category_list()
		{
			$id=$this->uri->segment(3);
			$query=$this->db->get_where("category_info",array("id"=>$id));
			$res=$query->result_array();
			if($res)
			{
	 			$data['edit_category']=$res;
				$this->load->view('admin/edit-category',$data);
			}
			else
			{
				redirect("Admin_controller/category_list1");
			}
	
		}
	
		function edit_category_do()
		{
			$data=array("categoryName"=>$this->input->post('categoryName'),
						"minMargin"=>$this->input->post('minMargin')
			);
			$id=$this->input->post('id');
			$this->Admin_model->edit_category_do($data,$id);
			$this->session->set_flashdata('success_edit', "Edited Successfully");
			redirect("Admin_controller/category_list1");
		}
		
			//delete category
		function delete_category_list()
			{
				//$id=$this->uri->segment('3');
				$id=$this->input->post('id');
				$this->Admin_model->delete_category_list($id);
				$con=$this->session->set_flashdata('success_delete', "Deleted Successfully");
				echo $con;
				//redirect("Admin_controller/customer_list");
			
			}
			
		
		function hsn()
		{
			$hsn=$this->Admin_model->fetch_hsn();
			$data['hsn']=$hsn;
			$this->load->view('admin/hsn-list',$data);
			
		}
		
		//edit HSN/SAC
		function edit_hsn()
		{
			$id=$this->uri->segment(3);
			$query=$this->db->get_where("hsn_info",array("id"=>$id));
			$res=$query->result_array();
			if($res)
			{
	 			$data['edit_hsn']=$res;
				$this->load->view('admin/edit-hsn',$data);
			}
			else
			{
				redirect("Admin_controller/hsn");
			}
	
		}
	
		function edit_hsn_do()
		{
			$data=array("hac"=>$this->input->post('hac'),
						"shortName"=>$this->input->post('shortName'),
						"sgst"=>$this->input->post('sgst'),
						"cgst"=>$this->input->post('cgst'),
						"igst"=>$this->input->post('igst'),
						"type"=>$this->input->post('type'),
						"unit"=>$this->input->post('unit'),
						"cess"=>$this->input->post('cess')
			);
			$id=$this->input->post('id');
			$this->Admin_model->edit_hsn_do($data,$id);
			$this->session->set_flashdata('success_edit', "Edited Successfully");
			redirect("Admin_controller/hsn");
		}
		
		
		function delete_hsn_list()
		{
			//$id=$this->uri->segment('3');
			$id=$this->input->post('id');
			$this->Admin_model->delete_hsn_list($id);
			$con=$this->session->set_flashdata('success_delete', "Deleted Successfully");
			echo $con;
			//redirect("Admin_controller/customer_list");
		
		}
		
		function company_creation()
		{
			
			$com_creation=$this->Admin_model->fetch_company_creation();
			$data['com_creation']=$com_creation;
			//print_r($com_creation);
			
			if($com_creation == []){
			//if($data === undefined || $data.length == 0){
				$this->load->view('admin/company-creation-new');
				//echo "ok";
			}else{
				//echo "not ok";
				$this->load->view('admin/company-creation',$data);
			}
			
			
		}
		
		
		function add_company_creation()
		{
			$this->load->view('admin/add-company-creation');
		}
		
		function add_company_creation_do()
		{	
			$photo=array(
				'upload_path' => './tools/upload',
					'allowed_types' => 'jpeg|jpg|png',
					'encrypt_name' => FALSE
			);
			
			$this->load->library('upload',$photo);
			$proof_data=$this->upload->data();
			$proof_name = $_FILES['image']['name'];
			
			if (!$this->upload->do_upload('image')) {
				echo $this->upload->display_errors();  
			}
			else{ 
				$data = array('image' => $this->upload->data());	
				
				$data=array("comName"=>$this->input->post('comName'),
							"phone"=>$this->input->post('phno'),
							"address1"=>$this->input->post('address1'),
							"address2"=>$this->input->post('address2'),
							"address3"=>$this->input->post('address3'),
							"address4"=>$this->input->post('address4'),
							"image"=>$proof_name,
							"branchCode"=>$this->input->post('branchcode'),
							"faxNo"=>$this->input->post('fax'),
							"webAddress"=>$this->input->post('webadd'),
							"email"=>$this->input->post('email'),
							"gstin"=>$this->input->post('gst'),
							"date"=>$this->input->post('date'),
							"dl_no"=>$this->input->post('dlno'),
							"exp1"=>$this->input->post('expDate1'),
							"mfg_lic_no"=>$this->input->post('mfg'),
							"exp2"=>$this->input->post('expDate2'),
							"service_tax"=>$this->input->post('service'),
							"exp3"=>$this->input->post('expDate3'),
							"food_lic_no"=>$this->input->post('foodLic'),
							"exp4"=>$this->input->post('expDate4'),
							"Jurisdiction"=>$this->input->post('Jurisdiction'),
							"country"=>$this->input->post('country'),
							"business_type"=>$this->input->post('business'),
							"financial_year"=>$this->input->post('financial'),
							
							
			
				);
				$response=$this->Admin_model->company_creation_do($data);
				if($response)
				{
					//echo "sucess";
					redirect('Admin_controller/company_creation');
				}
				else{
					echo "unsucess";
				}
			}
		
		}
		
		function edit_company_creation()
		{
			$id=$this->uri->segment(3);
			$query=$this->db->get_where("company_creation_info",array("id"=>$id));
			$res=$query->result_array();
			if($res)
			{
	 			$data['edit_creation']=$res;
				$this->load->view('admin/edit-company-creation',$data);
			}
			else
			{
				echo "unsucess";//redirect("Admin_controller/hsn");
			}
	
		}
		
		function edit_company_creation_do()
		{
			
			$photo=array(
				'upload_path' => './tools/upload',
					'allowed_types' => 'jpeg|jpg|png',
					'encrypt_name' => FALSE
			);
			
			$this->load->library('upload',$photo);
			//$proof_data=$this->upload->data();
			$proof_name = $_FILES['image']['name'];
			
			if(!$proof_name == ""){
			if (!$this->upload->do_upload('image')) {
				echo $this->upload->display_errors();  
			}
			else{ 
				$data = array('image' => $this->upload->data());	
				
				$data=array("comName"=>$this->input->post('comName'),
							"phone"=>$this->input->post('phno'),
							"address1"=>$this->input->post('address1'),
							"address2"=>$this->input->post('address2'),
							"address3"=>$this->input->post('address3'),
							"address4"=>$this->input->post('address4'),
							"image"=>$proof_name,
							"branchCode"=>$this->input->post('branchcode'),
							"faxNo"=>$this->input->post('fax'),
							"webAddress"=>$this->input->post('webadd'),
							"email"=>$this->input->post('email'),
							"gstin"=>$this->input->post('gst'),
							"date"=>$this->input->post('date'),
							"dl_no"=>$this->input->post('dlno'),
							"exp1"=>$this->input->post('expDate1'),
							"mfg_lic_no"=>$this->input->post('mfg'),
							"exp2"=>$this->input->post('expDate2'),
							"service_tax"=>$this->input->post('service'),
							"exp3"=>$this->input->post('expDate3'),
							"food_lic_no"=>$this->input->post('foodLic'),
							"exp4"=>$this->input->post('expDate4'),
							"Jurisdiction"=>$this->input->post('Jurisdiction'),
							"country"=>$this->input->post('country'),
							"business_type"=>$this->input->post('business'),
							"financial_year"=>$this->input->post('financial'),
							
							
			
				);
				$id=$this->input->post('id');
				$this->Admin_model->edit_company_creation_do($data,$id);
				//$this->session->set_flashdata('success_edit', "Edited Successfully");
				redirect("Admin_controller/company_creation");
			}
			}else{
				$data=array("comName"=>$this->input->post('comName'),
							"phone"=>$this->input->post('phno'),
							"address1"=>$this->input->post('address1'),
							"address2"=>$this->input->post('address2'),
							"address3"=>$this->input->post('address3'),
							"address4"=>$this->input->post('address4'),
							"branchCode"=>$this->input->post('branchcode'),
							"faxNo"=>$this->input->post('fax'),
							"webAddress"=>$this->input->post('webadd'),
							"email"=>$this->input->post('email'),
							"gstin"=>$this->input->post('gst'),
							"date"=>$this->input->post('date'),
							"dl_no"=>$this->input->post('dlno'),
							"exp1"=>$this->input->post('expDate1'),
							"mfg_lic_no"=>$this->input->post('mfg'),
							"exp2"=>$this->input->post('expDate2'),
							"service_tax"=>$this->input->post('service'),
							"exp3"=>$this->input->post('expDate3'),
							"food_lic_no"=>$this->input->post('foodLic'),
							"exp4"=>$this->input->post('expDate4'),
							"Jurisdiction"=>$this->input->post('Jurisdiction'),
							"country"=>$this->input->post('country'),
							"business_type"=>$this->input->post('business'),
							"financial_year"=>$this->input->post('financial'),
							
							
			
				);
				$id=$this->input->post('id');
				$this->Admin_model->edit_company_creation_do($data,$id);
				//$this->session->set_flashdata('success_edit', "Edited Successfully");
				redirect("Admin_controller/company_creation");
			}
		}

		
		function add_purchase()
		{
			
			$this->load->view('admin/add-purchase');
			
		}
		
		function edit_purchase()
		{
			
			$this->load->view('admin/edit-purchase');
			
		}
		
		function purchase_list()
		{
			$purchase_list=$this->Admin_model->fetch_purchase_list();
			$data['purchase_list']=$purchase_list;
			$this->load->view('admin/purchase-list',$data);
			//$this->load->view('admin/purchase-list');
			
		}
		
		/* select 2 start */
		
		function getAllproductName()
		{
			$sl=$this->Admin_model->getAllproductName();
				//print_r($sl);
				$arr=[];
				foreach($sl as $sl){
					$a=$sl['product'];
					array_push($arr, $a);
				}
				//print_r($arr);
				echo json_encode($arr);
		}
		
		/* select 2 end */
	
		function packGetDetails()
		{	
			$srn=$this->input->post('key');
			$pack=$this->Admin_model->fetch_pack_ajax($srn);
			
			foreach($pack as $row){
				//$a=$row['name'].','.$row['phno'];
				$a=$row['packing'].','.$row['hsn/sac'].','.$row['prate'].','.$row['sgst'].','.$row['cgst'].','.$row['igst'].','.$row['mrp'];
				
			}
			echo $a;
			//echo $srn;
			
		}
	
		
		function add_sell()
		{
			$this->load->view('admin/add-sell');
		}
		

	function getLastentryNo(){
			
			$value = $this->Admin_model->getLastentryNo();
			if(!$value){
				$a = 0;
			}else{
				foreach($value as $value){
					$a=$value['entryNum'];		
				}
			}
			echo json_encode($a);
			
		}
		
		
		function add_purchase_do()
		{
			$a =0;
			$entryNo=$this->input->post('entryNum');
			$temparray=explode('P_',$entryNo);
			$a = $temparray[1];
			$post = $this->input->post();
			
			//For Master Details Of Purchase
			 $data_master=array(
			    "purchaseName"=>$this->input->post('purchaseName'),
				"purchaseDate"=>$this->input->post('purchaseDate'),
				"receiveDate"=>$this->input->post('receiveDate'),
				"entryNum"=>$a,
				"partyNum"=>$this->input->post('partyNum'),
				"type"=>$this->input->post('type'),
				"discountamountTotal"=>$this->input->post('discountamountTotal'),
				"gstTotalAmount"=>$this->input->post('gstTotalAmount'),
				"igstTotalAmount"=>$this->input->post('igstTotalAmount'),
				"TotalAmount"=>$this->input->post('TotalAmount'),
				"roundOff"=>$this->input->post('roundOff'),
				"inWords"=>$this->input->post('inWords'),
				"preBy"=>$this->input->post('preBy'),
				"preDate"=>$this->input->post('preDate'),
				
				
			);
				$prof_master=$this->Admin_model->purchase_master($data_master);
			
				
				for ($x = 0; $x < count($post['productName']); $x++) 
				{
				$data_product=array(
				"entryNum"=>$a,
				"partyNum"=>$post['partyNum'],
				"productName"=>$post['productName'][$x],
				"pack"=>$post['pack'][$x],
				"batch"=>$post['batch'][$x],
				"exp"=>$post['exp'][$x],
				"quantity"=>$post['quantity'][$x],
				"free"=>$post['free'][$x],
				"mrp"=>$post['mrp'][$x],
				"purchaseRate"=>$post['purchaseRate'][$x],
				"basicAmount"=>$post['basicAmount'][$x],
				"discount"=>$post['discount'][$x],
				"discountamount"=>$post['discountamount'][$x],
				"sgst"=>$post['sgst'][$x],
				"sgstIA"=>$post['sgstIA'][$x],
				"cgst"=>$post['cgst'][$x],
				"cgstIA"=>$post['cgstIA'][$x],
				"igst"=>$post['igst'][$x],
				"igstIA"=>$post['igstIA'][$x],
				"amount"=>$post['amount'][$x],
				);
		
				$prof_product=$this->Admin_model->purchase_product($data_product);

				}


			if ($prof_master==true && $prof_product==true){;
			
			$this->purchase_print($a);
			//$this->load->view('admin/purchase-list');
			} 
			else{
			echo "Unsuccessful";
			}  
			
		}
		
		
		function purchase_print($a)
		{	
			$masterpurchase=$this->Admin_model->fetch_master_purchase($a);
			$data['purchase']=$masterpurchase;
			
			$productpurchase=$this->Admin_model->fetch_product_purchase($a);
			$data['productpurchase']=$productpurchase;
			
			$companycreation=$this->Admin_model->fetch_companycreation();
			$data['companycreation']=$companycreation;
			
			$this->load->view('admin/purchase-print',$data);
		}
		
		
		function purchase_view()	   
	    {
			$data['purchase'] = $this->db->get_where('purchase_master_info', array('entryNum'=>$this->input->get('entryNum')))->result_array();
			$data['productpurchase'] = $this->db->get_where('purchase_product_info', array('entryNum'=>$this->input->get('entryNum')))->result_array();
			$data['companycreation']= $this->db->get('company_creation_info')->result_array();
	
			$this->load->view('admin/purchase-view-list.php',$data);  

	    }

		//SELL START
		
		function getAllsellproductName()
		{
			$sl=$this->Admin_model->getAllsellproductName();
				//print_r($sl);
				$arr=[];
				foreach($sl as $sl){
					$a=$sl['productName'];
					array_push($arr, $a);
				}
				//print_r($arr);
				echo json_encode($arr);
		}
		
		function salesGetDetails()
		{	
			$srn=$this->input->post('key');
			$sales=$this->Admin_model->fetch_sales_ajax($srn);
			//print_r($sales);
			//exit();
			$a="";
			foreach($sales as $row){
				//$a=$row['name'].','.$row['phno'];
				if($a==""){
					$a=$row['batch'];
				}else{
					$a=$a.','.$row['batch'];
				}
				
				
			}
			echo $a;
			
			//echo $sales;
			
			
		}
		
		
		function batchNoGetDetails()
		{	
			$bno=$this->input->post('keyBatch');
			//echo $bno;
			//exit();
			$batchNo=$this->Admin_model->fetch_batch_ajax($bno);
			
			//print_r($batchNo);
			//exit();

			$b="";
			foreach($batchNo as $row){
				$b=$row['mrp'].','.$row['sgst'].','.$row['exp'];
				
			}
			echo $b;
		}
}
?>