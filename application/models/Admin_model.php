<?php
class Admin_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function add_customer($data)
	{			
  		if($this->db->insert("customer_info",$data))
		return true;

	}
	
	function fetch_customer()
	{
		return $customer=$this->db->get('customer_info')->result_array();
	}
	
	function delete_customer_list($id) 
 	{
	 $this->db->delete("customer_info","customer_id=".$id);
	 
 	}
	
	function fetch_paid_customer($x)
	{
		return $this->db->get_where("customer_info",array("balance"=>$x))->result_array();
	}
	
	function fetch_credit_customer()
	{
		$sql="SELECT * FROM `customer_info` WHERE balance>'0'";    
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function add_manufacturer($data)
	{			
  		if($this->db->insert("manufacturer_info",$data))
		return true;

	}
	
	function fetch_manufacturer()
	{
		return $manufacturer=$this->db->get('manufacturer_info')->result_array();
	}
	
	function delete_manufacturer_list($id) 
 	{
	 $this->db->delete("manufacturer_info","manufacturer_id=".$id);
	 
 	}
	
	function add_category($data)
	{			
  		if($this->db->insert("product_category",$data))
		return true;

	}
	
	function fetch_category()
	{
		return $category=$this->db->get('product_category')->result_array();
	}
	
	function add_unit($data)
	{			
  		if($this->db->insert("unit",$data))
		return true;

	}
	
	function fetch_unit()
	{
		return $unit=$this->db->get('unit')->result_array();
	}
	
	function add_type($data)
	{			
  		if($this->db->insert("product_type",$data))
		return true;

	}
	
	function fetch_type()
	{
		return $type=$this->db->get('product_type')->result_array();
	}
	
	function add_leaf($data)
	{			
  		if($this->db->insert("medicine_leaf_setting",$data))
		return true;

	}
	
	function fetch_leaf()
	{
		return $type=$this->db->get('medicine_leaf_setting')->result_array();
	}
	
	function fetch_leaf_setting()
	{
		return $this->db->get('medicine_leaf_setting')->result_array();
	}
	
	function fetch_Select_Category()
	{
		return $this->db->get_where("product_category",array("status"=>'active'))->result_array();
	}
	
	function fetch_Select_unit()
	{
		return $this->db->get_where("unit",array("status"=>'active'))->result_array();
	}
	
	function fetch_Select_medicine()
	{
		return $this->db->get_where("product_type",array("status"=>'active'))->result_array();
	}
	
	function fetch_Select_manufacturer()
	{
		return $this->db->get('manufacturer_info')->result_array();
	}
	
	function add_medicine($data)
	{			
  		if($this->db->insert("medicine_info",$data))
		return true;

	}
	
	function fetch_medicine_list()
	{
		return $medicine_list=$this->db->get('medicine_info')->result_array();
	}
	
	function fetch_total_bal()
	{
		$sql="SELECT SUM(balance) FROM customer_info";    
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
		//inventory company model
		
	function add_company($data)
	{
		if($this->db->insert("company_info",$data))
		return true;
	}
	
	function fetchAllCmpny()
	{
		$this->db->select('cname');
		$this->db->from('company_info');
		return $this->db->get()->result_array();
	}
	
		//inventory category model
		
	function ad_category($data)
	{
		if($this->db->insert("category_info",$data))
		return true;
	}
	
	function fetchAllCategory()
	{
		$this->db->select('categoryName');
		$this->db->from('category_info');
		return $this->db->get()->result_array();
	}
		
		//inventory Salt model
		
	function add_salt($data)
	{
		if($this->db->insert("salt_info",$data))
		return true;
	}
	
	function fetchAllSalt()
	{
		$this->db->select('newSalt');
		$this->db->from('salt_info');
		return $this->db->get()->result_array();
	}
		
		//inventory HSN/SAC model
		
	function add_hsn($data)
	{
		if($this->db->insert("hsn_info",$data))
		return true;
	}
	
	function fetchAllhsn()
	{
		$this->db->select('hac');
		$this->db->from('hsn_info');
		return $this->db->get()->result_array();
	}
	
	//inventory insert model
	function add_inventory($data)
	{
		if($this->db->insert("inventory_info",$data))
		return true;
	}
	
	function fetch_company()
	{
		return $company=$this->db->get('company_info')->result_array();
	}
	
	function delete_company_list($id) 
 	{
	 $this->db->delete("company_info","id=".$id);
	 
 	}
	
	function fetch_salt()
	{
		return $salt=$this->db->get('salt_info')->result_array();
	}
	
	function delete_salt_list($id) 
 	{
	 $this->db->delete("salt_info","id=".$id);
	 
 	}
	
	function fetch_category1()
	{
		return $category=$this->db->get('category_info')->result_array();
	}
	
	function delete_category_list($id) 
 	{
	 $this->db->delete("category_info","id=".$id);
	 
 	}
	
	function fetch_hsn()
	{
		return $hsn=$this->db->get('hsn_info')->result_array();
	}
	
	function delete_hsn_list($id) 
 	{
	 $this->db->delete("hsn_info","id=".$id);
	 
 	}
	
	/*public function edit_show_model($id){
			$query = $this->db->get_where('salt_info',array('id'=>$id));
			return $query->row_array();
		}
	
	public function edit_salt_list_model($user, $id){
			$this->db->where('salt_info.id', $id);
			return $this->db->update('salt_info', $user);
		}*/
		
	function edit_salt_do($data,$id)
	{
		$this->db->set($data);
  		$this->db->where("id",$id);
  		$this->db->update("salt_info",$data);
	}
	
	function edit_company_do($data,$id)
	{
		$this->db->set($data);
  		$this->db->where("id",$id);
  		$this->db->update("company_info",$data);
	}
	
	function edit_category_do($data,$id)
	{
		$this->db->set($data);
  		$this->db->where("id",$id);
  		$this->db->update("category_info",$data);
	}
	
	function edit_hsn_do($data,$id)
	{
		$this->db->set($data);
  		$this->db->where("id",$id);
  		$this->db->update("hsn_info",$data);
	}
	
	function company_creation_do($data)
	{			
  		if($this->db->insert("company_creation_info",$data))
		return true;

	}
	
	function fetch_company_creation()
	{
		return $com_creation=$this->db->get('company_creation_info')->result_array();
	}
	
	function edit_company_creation_do($data,$id)
	{
		$this->db->set($data);
  		$this->db->where("id",$id);
  		$this->db->update("company_creation_info",$data);
	}
	
	function getAllproductName()
	{
		$this->db->select('product');
		$this->db->from('inventory_info');
		return $this->db->get()->result_array();
	}
	
	function fetch_pack_ajax($srn){
		return $this->db->get_where("inventory_info",array("product"=>$srn))->result_array();
		//echo "test";
	}
	
	
	function getLastentryNo(){
		$sql = " SELECT entryNum FROM purchase_master_info ORDER BY id DESC LIMIT 1";
		$qry = $this->db->query($sql);
		return $qry->result_array();
	}
	
	function purchase_master($data_master)
	{			
  		if($this->db->insert("purchase_master_info",$data_master))
		return true;
	}
	
	function purchase_product($data_product)
	{			
  		if($this->db->insert("purchase_product_info",$data_product))
		return true;
	}
	
	function fetch_purchase_list()
	{
		return $purchase_list=$this->db->get('purchase_master_info')->result_array();
	}
	
	
	function fetch_master_purchase($a)
	{	
		return $this->db->get_where("purchase_master_info",array("entryNum"=>$a))->result_array();
		return $this->db->get_where("purchase_product_info",array("entryNum"=>$a))->result_array();
		
	}
	
	function fetch_product_purchase($a)
	{	
		return $this->db->get_where("purchase_product_info",array("entryNum"=>$a))->result_array();
		
		
	}
	
	function fetch_companycreation()
	{	
		return $pharma_purchase=$this->db->get('company_creation_info')->result_array();
		
		
	}
	
	// SELL MODULE START
	
	function getAllsellproductName()
	{
		$this->db->select('productName');
		$this->db->distinct();
		$this->db->from('purchase_product_info');
		return $this->db->get()->result_array();
	}
	
	function fetch_sales_ajax($srn){
		
		$sql = " SELECT batch FROM purchase_product_info WHERE productName='".$srn."' ";
		$qry = $this->db->query($sql);
		return $qry->result_array();
		//return $this->db->get_where("purchase_product_info",array("productName"=>$srn))->result_array();
		//echo "test";
	}
	
	function fetch_batch_ajax($bno){
		$sql = "SELECT * FROM purchase_product_info WHERE batch='".$bno."'";
		$qry = $this->db->query($sql);
		return $qry->result_array();
		
		//return $this->db->get_where("purchase_product_info",array("batch"=>$bno))->result_array();
		//echo "test";
	}
}
?>		