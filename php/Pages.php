<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
*
	HANDLE LINK CLICKS AND SEARCH FUNCTIONALITY
*
 */

class Pages extends CI_Controller {

	function __construct() {
		parent::__construct();	
		
		//Session control
		$this->load->library('session');
		
		//Pagination library
		$this->load->library('pagination');
	}
	
	//Load Homepage
	public function home() {
		$this->load->view('pages/home');
	}
	
	//Load Product page with product info fetched from database and passed to the View
	public function product($id) {
		//Array for passing data to the View
		$data=[];
		
		//Build query and Get product info
		$this->db->where('id', $id);
		$query = $this->db->get('ul_products');
		
		//Prepare the array for passing it to the View
		foreach ($query->result() as $row) {
			
			//Store each comma separated size in an array
			$row->size = explode(',', $row->size);
			$data["product"] = $row;
		}
		
		//Load view and pass the product data
		$this->load->view('pages/product', $data);
	}
	
	//Load Contact Page
	public function contact() {
		$this->load->view('pages/contact');
	}
	
	//Load About Us Page
	public function about_us() {
		$this->load->view('pages/about-us');
	}
	
	// Load and handle sector pages - display the info related to the sector that was clicked.
	public function sectors($sector) {
		
		// Array for passing data to the View
		$data = [];
		
		if($sector == "automotive") {
			$data["sector"] = "AUTOMOTIVE";
			$data["form_title"] = "automotive";
			$data["intro_text"] = "Universal Lubricants offers a complete range of quality synthetic, semi-synthetic and mineral-based lubricants complying with the latest ACEA and API codes, and vehicle manufacturer specifications, including the latest Low SAPS engine oils. For operators who seek to obtain the very best performance from their vehicles, Universal Lubricants has products to meet virtually all engine, gearbox, transmission oil and grease requirements.";
			$this->load->view('pages/sector', $data);
		}
		else if($sector == "motorcycle") {
			$data["sector"] = "MOTORCYCLE";
			$data["form_title"] = "motorcycle";
			$data["intro_text"] = "Motorcycle lubricants is designed to meet the specific needs of both the bike and the rider. Dedicated products are developed for every type of motorcycle and scooter whether they are used for pleasure, commuting, touring or racing. ";
			$this->load->view('pages/sector', $data);
		}
		else if($sector == "commercial") {
			$data["sector"] = "COMMERCIAL";
			$data["form_title"] = "commercial";
			$data["intro_text"] = "Universal lubricants for the commercial market are formulated to meet and exceed the highest performance specifications, whilst offering fuel economy, extended drain intervals and greatly reduced top-up. Our range is complemented by a vast choice of mineral based oils and greases for all applications as well as maintenance and hygiene products.";
			$this->load->view('pages/sector', $data);
		}
		else if($sector == "agricultural") {
			$data["sector"] = "AGRICULTURAL";
			$data["form_title"] = "agricultural";
			$data["intro_text"] = "From agriculture to horticulture, the Agrifarm range provides a comprehensive list of lubricants which meet or exceed both international standards and all major machinery manufacturers' performance requirements. High quality products are available to suit all applications to enable the farmer, agricultural contractor and gardening specialist to protect and maintain their equipment investment.";
			$this->load->view('pages/sector', $data);
		}
		else if($sector == "industrial") {
			$data["sector"] = "INDUSTRIAL";
			$data["form_title"] = "industrial";
			$data["intro_text"] = "Universal provides a complete package of lubricants for industry, designed to maximise performance of equipment whilst reducing downtime. They are formulated to the highest possible standards and the range is designed to deliver top performance in the extreme working conditions found in industry. The range offers a diverse range of ISO viscosities, which satisfy the requirements of the industrial user. The metal working range offers superior machining characteristics, which results in extended tool life and excellent component finish. The range encompasses a wide range of cutting fluids including chlorine free, grinding, neat and spark erosion fluids all meeting the latest specifications.
";
			$this->load->view('pages/sector', $data);
		}
		else if($sector == "gas-oil") {
			$data["sector"] = "GAS OIL";
			$data["form_title"] = "gas oil";
			$data["intro_text"] = "<span style='font-weight: bold; color: black;'>Red diesel</span> is the low duty form of diesel and can be used in off-road untaxed vehicles i.e. agricultural / industrial / construction machinery and as home heating only. As this fuel is minimally taxed, it cannot be used as automotive diesel fuel in normal cars. Customs and Excise regulations require minimally taxed diesel to have a special red dye. This way the inspectors can quickly and conclusively identify the presence of it and take appropriate action against the offender. <br><br> <span style='font-weight: bold; color: black;'>Kerosene</span> is one of our most popular fuel products. Kerosene oil, also known as heating oil and kero, acts as a clean-burning oil and an efficient heating oil for commercial premises and domestic dwellings. It’s a particularly interesting oil which was once used as a fuel for light in oil lamps but has since become much more popular as a fuel for heating.";
			$this->load->view('pages/sector', $data);
		}
	}
	
	// Handle product search from Quick Search and within each Sector page.
	public function search() {
		/* For pagination */
		$products_per_page = 16;

		//Offset is set in the uri_segment value, if it's the first page set it to 0
		$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		//Array for passing data to the View
		$data=[];

		//Get form data and store it in SESSION variable when form is submitted
		if($_SERVER['REQUEST_METHOD'] == 'POST' ) {
			$_SESSION['sector'] = $this->input->post('sector');
			$_SESSION['manufacturer'] = $this->input->post('manufacturer');
			$_SESSION['type'] = $this->input->post('type');
			$_SESSION['grade'] = $this->input->post('grade');
		}

		//Use form data throughout the pagination
		$sector = $_SESSION['sector'];
		$manufacturer = $_SESSION['manufacturer'];
		$type = $_SESSION['type'];
		$grade = $_SESSION['grade'];
		
		//Build Query for getting total num of rows
		if($sector != "all") { $this->db->like('sector', $sector); }
		if($manufacturer != "all") { $this->db->where('manufacturer', $manufacturer); }
		if($type != "all") { $this->db->where('type', $type); }
		if($grade != "all") { $this->db->like('grade', $grade); }
		
		//Count total number of rows for the pagination
		$query_all = $this->db->get('ul_products');
		$total_rows = $query_all->num_rows();

		//Build Query for getting total num of rows with LIMIT & OFFSET
		if($sector != "all") { $this->db->like('sector', $sector); }
		if($manufacturer != "all") { $this->db->where('manufacturer', $manufacturer); }
		if($type != "all") { $this->db->where('type', $type); }
		if($grade != "all") { $this->db->like('grade', $grade); }

		//Set LIMIT & OFFSET for pagination
		$this->db->limit($products_per_page, $offset);
		
		//Count number of rows returned with LIMIT & OFFSET applied
		$query = $this->db->get('ul_products');
		$row_count = $query->num_rows();
		

		//Check total rows based on search criteria
		if($total_rows < 1 ) {
			//No rows found
			$data["num_of_rows"] = $total_rows;
		}
		else {
			//Get matching rows
			$data["num_of_rows"] = $row_count; //LIMIT & OFFSET APPLIED
			$data["products"] = $query->result();
		}
		
		//Pagination Settings
		$config['base_url'] = base_url("index.php/pages/search");
		$config['total_rows'] = $total_rows;
		$config['uri_segment'] = 3;
		$config['per_page'] = $products_per_page;

		//config for bootstrap pagination class integration
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		//Initialise pagination
		$this->pagination->initialize($config);

		//Indicate the current result set the user is viewing in the page indicator
		$curr_result_set = $row_count+$offset;

		//Prepare search criteria data to be sent to the View
		$data["search_criteria"] = array("sector"=>$sector, "manufacturer"=>$manufacturer, "type"=>$type, "grade"=>$grade);
		$data["pagination"] = $this->pagination->create_links();
		$data['currentPage'] = ($offset / $products_per_page)+1;
		$data['totalPages'] = ceil($total_rows / $products_per_page);
		$data['totalNumOfProducts'] = $total_rows; //Indicate number of products found in Page Indicator
		
		//Indicate and format the current result set based on the number of results the user is viewing in the Page Indicator
		if($curr_result_set > $products_per_page) {
			$data['viewingProducts'] = $curr_result_set-($row_count-1)."-".$curr_result_set; 
		}
		else {
			$data['viewingProducts'] = "1-".$curr_result_set;
		}
		
		//Load the View and pass the search data
		$this->load->view('pages/search', $data);
	}

	// Handle ajax calls from search forms
	public function populateForm() {
		/*
			POPULATE FORM ON AJAX CALL
		*/
		
		//Get form field values
		$sector = $this->input->post('sector');
		$manufacturer = $this->input->post('manufacturer');
		$type = $this->input->post('type');
		
		//Build Query for getting total num of rows (Check from reverse to get the correct number of where clauses)
		if($type != "") {
			if($sector != "all") {
				$this->db->like('sector', $sector);
			}
			if($manufacturer != "all") {
				$this->db->where('manufacturer', $manufacturer);
			}
			if($type != "all") {
				$this->db->like('type', $type);
			}
			$this->db->select("grade");
		}
		else if($manufacturer != "") {
			if($sector != "all") {
				$this->db->like('sector', $sector);
			}
			if($manufacturer != "all") {
				$this->db->where('manufacturer', $manufacturer);
			}
			$this->db->select("type");
		}
		else  { 
			if($sector != "all") {
				$this->db->like('sector', $sector);
			}
			$this->db->select("manufacturer");
		}

		$this->db->distinct();
		$query = $this->db->get('ul_products');

		// Array for returning the data to the View
		$response = [];

		foreach ($query->result() as $row)
		{
				//echo $row->manufacturer."<br>";
				if($type != "") {
					array_push($response, $row->grade);
				}
				else if($manufacturer != "") {
					array_push($response, ucwords(strtolower($row->type)));
				}
				else if($sector != "") {
					array_push($response, ucwords(strtolower($row->manufacturer)));
				}
		}

		//Return Array object to ajax call
		echo json_encode($response);
		
	}
}
