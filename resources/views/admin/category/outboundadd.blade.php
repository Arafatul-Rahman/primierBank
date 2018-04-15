@extends('admin.master')

@section('content')
<br>
<br>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  

   <div style="float: center;">
    
  
     <ul class="nav navbar-nav">
      
      <li><a href="{{url('/outbound/add')}}">OUTbound</a></li>
    </ul>
    <form method="POST" action="{{ url('searchoutbound') }}" class="navbar-form navbar-left">
                        @csrf
      <div class="input-group">
        
          <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search outbound" name="searchoutbound">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
      </div>
    </form>
    </div>
  </div>
</nav>






<div class="panel panel-default" style="color: #262626;">
    <div class="panel-body">
        <h3 ><p class="text-center" ><b> Welcome {{ Auth::user()->name }}</b></p></h3>
        <br>
       
        <form method="POST" action="{{ url('creatOutbound') }}">
                        @csrf
     <div class="form-group row" style="margin-right: 160px;">
    <label for="inputEmail3" class="col-sm-4 col-form-label">Customer type</label>
       <label class="checkbox-inline"><input type="checkbox" name="customertype value="op1">Premier  Customer</label >
    <label class="checkbox-inline"><input type="checkbox" name="customertype value="op2">Non Premier  Customer</label>
    <label class="checkbox-inline"><input type="checkbox" name="customertype value="op3">unknown</label>
    
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">user name</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputEmail3" value="{{ Auth::user()->name }}" name="username">
    </div>
    <label for="inputEmail3" class="col-sm-4 col-form-label">login User Name</label>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Acount/Card Number</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" id="inputEmail3" placeholder="Card Number" name="cardNumber">
    </div>
    <label for="inputEmail3" class="col-sm-4 col-form-label">Valid Acount/Card Number</label>
  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Contact Number</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" id="inputEmail3" placeholder="Contact number" name="contuctNumber">
    </div>
    <label for="inputEmail3" class="col-sm-4 col-form-label">Valid Contact Number</label>
  </div>

  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-3 col-form-label" >Category</label>
  <div class="col-sm-5" style="margin-left: 15px;">
    <select id="selector" class="form-control row" onchange="myFunction(event)" name="categoryinfo">
  <option value="" selected disabled></option>
  <option value="General Bank  Instruction" >General Bank  Instruction</option>
  <option value="General Bank Information" >General Bank Information
</option>
  <option value="General Bank Complain" >General Bank Complaint</option>
  <option value="Others" >Others
</option>
  <option value="VISA  Instruction" >VISA  Instruction
</option>
  <option value="VISA Information" >VISA Information
</option>
  <option value="VISA Complaint" >VISA Complaint
</option>
</option>
  <option value="Visa  Debit Card" >Visa  Debit Card

</option>
</select>
     
      
    </div>


</div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-3 col-form-label">Quary</label>
  <div class="col-sm-5" style="margin-left: 15px;">
    <select class="form-control row" name="quaryinfo">
  <option value="none"></option>
  <option value="Auto Debit Instruction
" class="General Bank  Instruction" style="display: none;">Auto Debit Instruction
</option>
  <option value="Auto Debit Cancelation Instruction
" class="General Bank  Instruction" style="display: none;">Auto Debit Cancelation Instruction
</option>
  <option value="Annul Fee Waiver Request For Corporate Customers
" class="General Bank  Instruction" style="display: none;">Annul Fee Waiver Request For Corporate Customers
</option>
<option value="Card Activation

" class="General Bank  Instruction" style="display: none;">Card Activation

</option>
<option value="Card Block Request Due to Card Capture

" class="General Bank  Instruction" style="display: none;">Card Block Request Due to Card Capture

</option>
<option value="Card Block Request Due to Lost Card

" class="General Bank  Instruction" style="display: none;">Card Block Request Due to Lost Card

</option>
<option value="Card Block Request Due to Fraud Transection

" class="General Bank  Instruction" style="display: none;">Card Block Request Due to Fraud Transection

</option>
<option value="Annul Fee Waiver Request For Corporate Customers
" class="General Bank  Instruction" style="display: none;">Annul Fee Waiver Request For Corporate Customers
</option>

<option value="Annul Fee Waiver Request For Corporate Customers

" class="General Bank  Instruction" style="display: none;">Annul Fee Waiver Request For Corporate Customers
</option>
<option value="Captured Card Delivery Request

" class="General Bank  Instruction" style="display: none;">Captured Card Delivery Request
</option>
  <option value="Auto Debit Cancelation Instruction
" class="General Bank  Instruction" style="display: none;">Auto Debit Cancelation Instruction
</option>
  <option value="Annul Fee Waiver Request For Corporate Customers
" class="General Bank  Instruction" style="display: none;">Annul Fee Waiver Request For Corporate Customers
</option>
<option value="Card Activation

" class="General Bank  Instruction" style="display: none;">Card Activation

</option>
<option value="Card Block Request Due to Card Capture

" class="General Bank  Instruction" style="display: none;">Card Block Request Due to Card Capture

</option>
<option value="Card Block Request Due to Lost Card

" class="General Bank  Instruction" style="display: none;">Card Block Request Due to Lost Card

</option>
<option value="Card Block Request Due to Fraud Transection

" class="General Bank  Instruction" style="display: none;">Card Block Request Due to Fraud Transection

</option>
<option value="Annul Fee Waiver Request For Corporate Customers
" class="General Bank  Instruction" style="display: none;">Annul Fee Waiver Request For Corporate Customers
</option>

<option value="Annul Fee Waiver Request For Corporate Customers

" class="General Bank  Instruction" style="display: none;">Annul Fee Waiver Request For Corporate Customers
</option>
<option value="Captured Card Delivery Request

" class="General Bank  Instruction" style="display: none;">Captured Card Delivery Request
</option>



  <option value="Available Balance Query
" class="General Bank Information" style="display: none;">Available Balance Query
</option>
  <option value="Available Purchase Limit 
" class="General Bank Information" style="display: none;">Available Purchase Limit 
</option>
  <option value="Available Cash Withdrawal Limt 
" class="General Bank Information" style="display: none;">Available Cash Withdrawal Limt 
</option>
  <option value="Acquiring Fee Related Query
" class="General Bank Information" style="display: none;">Acquiring Fee Related Query
</option>
  <option value="Card Application Status Query
" class="General Bank Information" style="display: none;">Card Application Status Query
</option>
  <option value="Card Application Procedure Query
" class="General Bank Information" style="display: none;">Card Application Procedure Query
</option>
  <option value="Card / PIN / Voucher Delivery Related Query
" class="General Bank Information" style="display: none;">Card / PIN / Voucher Delivery Related Query
</option>
  <option value="Card Product / Feature Query
" class="General Bank Information" style="display: none;">Card Product / Feature Query
</option>
  <option value="Card Close / Surrender Procedure
" class="General Bank Information" style="display: none;">Card Close / Surrender Procedure
</option>
  <option value="Available Cash Withdrawal Limt 
" class="General Bank Information" style="display: none;">Available Cash Withdrawal Limt 
</option>
  <option value="Acquiring Fee Related Query
" class="General Bank Information" style="display: none;">Acquiring Fee Related Query
</option>
  <option value="Card Application Status Query
" class="General Bank Information" style="display: none;">Card Application Status Query
</option>
  <option value="Card Application Procedure Query
" class="General Bank Information" style="display: none;">Card Application Procedure Query
</option>
  <option value="Card / PIN / Voucher Delivery Related Query
" class="General Bank Information" style="display: none;">Card / PIN / Voucher Delivery Related Query
</option>
  <option value="Card Product / Feature Query
" class="General Bank Information" style="display: none;">Card Product / Feature Query
</option>
  <option value="Card Close / Surrender Procedure
" class="General Bank Information" style="display: none;">Card Close / Surrender Procedure
</option>







  <option value="Balance Transfer Not Done Yet
" class="General Bank Complain" style="display: none;">Balance Transfer Not Done Yet
</option>
  <option value="Branch / Front Desk Staff Complaint 
" class="General Bank Complain" style="display: none;">Branch / Front Desk Staff Complaint 
</option>
  <option value="Card not received
" class="General Bank Complain" style="display: none;">Card not received
</option>
  <option value="Auto Debit Instruction
" class="General Bank Complain" style="display: none;">Auto Debit Instruction
</option>
  <option value="Auto Debit Cancelation Instruction
" class="General Bank Complain" style="display: none;">Auto Debit Cancelation Instruction
</option>
  <option value="Annul Fee Waiver Request For Corporate Customer
" class="General Bank Complain" style="display: none;">Annul Fee Waiver Request For Corporate Customer
</option>
  <option value="Card Activation
" class="General Bank Complain" style="display: none;">Card Activation
</option>
  <option value="Card Block Request Due to Card Capture
" class="General Bank Complain" style="display: none;">Card Block Request Due to Card Capture
</option>
</option>
  <option value="Annul Fee Waiver Request For Corporate Customer
" class="General Bank Complain" style="display: none;">Annul Fee Waiver Request For Corporate Customer
</option>
  <option value="Card Activation
" class="General Bank Complain" style="display: none;">Card Activation
</option>
  <option value="Card Block Request Due to Card Capture
" class="General Bank Complain" style="display: none;">Card Block Request Due to Card Capture
</option>
  <option value="ATM Location " class="d
" style="display: none;">ATM Location 
</option>
  <option value="ATM is Not Working " class="d
" style="display: none;">ATM is Not Working 
</option>
  <option value="Branch Location / Phone Number
" class="Others" style="display: none;">Branch Location / Phone Number
</option>
  <option value="Customer’s Feedback Call
" class="Others" style="display: none;">Customer’s Feedback Call
</option>
  <option value="Dropped Call 
" class="Others" style="display: none;">Dropped Call 
</option>
 <option value="Annul Fee Waiver Request For Corporate Customer
" class="Others" style="display: none;">Annul Fee Waiver Request For Corporate Customer
</option>
  <option value="Card Activation
" class="Others" style="display: none;">Card Activation
</option>
  <option value="Card Block Request Due to Card Capture
" class="Others" style="display: none;">Card Block Request Due to Card Capture
</option>
  <option value="Dropped Call 
" class="Others" style="display: none;">Dropped Call 
</option>
 <option value="Annul Fee Waiver Request For Corporate Customer
" class="Others" style="display: none;">Annul Fee Waiver Request For Corporate Customer
</option>
  <option value="Card Activation
" class="Others" style="display: none;">Card Activation
</option>
  <option value="Card Block Request Due to Card Capture
" class="Others" style="display: none;">Card Block Request Due to Card Capture
</option>

  <option value="Available Balance Query
" class="VISA  Instruction" style="display: none;">Available Balance Query
</option>
  <option value="Available Purchase Limit 
" class="VISA  Instruction" style="display: none;">Available Purchase Limit 
</option>
  <option value="Available Cash Withdrawal Limt 
" class="VISA  Instruction" style="display: none;">Available Cash Withdrawal Limt 
</option>
  <option value="Balance Transfer Query
" class="VISA  Instruction" style="display: none;">Balance Transfer Query
</option>
  <option value="Card Application Status Query
" class="VISA  Instruction" style="display: none;">Card Application Status Query
</option>


  <option value="Balance Transfer Not Done Yet
" class="VISA Information" style="display: none;">Balance Transfer Not Done Yet
</option>
  <option value="Branch / Front Desk Staff Complaint 
" class="VISA Information" style="display: none;">Branch / Front Desk Staff Complaint 
</option>
  <option value="Available Purchase Limit 
" class="VISA Information" style="display: none;">Available Purchase Limit 
</option>
  <option value="Available Cash Withdrawal Limt 
" class="VISA Information" style="display: none;">Available Cash Withdrawal Limt 
</option>
  <option value="Balance Transfer Query
" class="VISA Information" style="display: none;">Balance Transfer Query
</option>
  <option value="Card Application Status Query
" class="VISA Information" style="display: none;">Card Application Status Query
</option>
  <option value="Branch / Front Desk Staff Complaint 
" class="VISA Information" style="display: none;">Branch / Front Desk Staff Complaint 
</option>
  <option value="Available Purchase Limit 
" class="VISA Information" style="display: none;">Available Purchase Limit 
</option>
  <option value="Available Cash Withdrawal Limt 
" class="VISA Information" style="display: none;">Available Cash Withdrawal Limt 
</option>
  <option value="Balance Transfer Query
" class="VISA Information" style="display: none;">Balance Transfer Query
</option>
  <option value="Card Application Status Query
" class="VISA Information" style="display: none;">Card Application Status Query
</option>

  <option value="Auto Debit Instruction
" class="VISA Complaint" style="display: none;">Auto Debit Instruction
</option>
<option value="Balance Transfer Not Done Yet
" class="VISA Complaint" style="display: none;">Balance Transfer Not Done Yet
</option>
  <option value="Branch / Front Desk Staff Complaint 
" class="VISA Complaint" style="display: none;">Branch / Front Desk Staff Complaint 
</option>
  <option value="Available Purchase Limit 
" class="VISA Complaint" style="display: none;">Available Purchase Limit 
</option>
  <option value="Available Cash Withdrawal Limt 
" class="VISA Complaint" style="display: none;">Available Cash Withdrawal Limt 
</option>
  <option value="Balance Transfer Query
" class="VISA Complaint" style="display: none;">Balance Transfer Query
</option>
  <option value="Card Application Status Query
" class="VISA Complaint" style="display: none;">Card Application Status Query
</option>

  <option value="Transaction Detail Query 
" class="Visa  Debit Card" style="display: none;">Transaction Detail Query 
</option>
  <option value="Card / PIN Delivery Query
" class="Visa  Debit Card" style="display: none;">Card / PIN Delivery Query
</option>
  <option value="Card Block Request Due to Card Capture
" class="Visa  Debit Card" style="display: none;">Card Block Request Due to Card Capture
</option>
  <option value="Card Block Request Due to Lost Card
" class="Visa  Debit Card" style="display: none;">Card Block Request Due to Lost Card
</option>
  <option value="Card Block Request Due to Fraud Transection
" class="Visa  Debit Card" style="display: none;">Card Block Request Due to Fraud Transection
</option>
  <option value="Capture Card Delivery Request
" class="Visa  Debit Card" style="display: none;">Capture Card Delivery Request
</option>
</select>
     
      
    </div>

</div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-3 col-form-label">Branch Name</label>
  <div class="col-sm-5" style="margin-left: 15px;">
      <select class="form-control row" name="branchinfo">
            <option></option> 
        <option value="Agrabad Branch">AGRABAD BRANCH (EV)</option>  
        <option value="Aganagar Branch">AGANAGAR BRANCH</option>     
        <option value="Alankar More Branch">ALANKAR MORE BRANCH</option>
        <option value="Ambarkhana Branch">AMBARKHANA BRANCH</option>
        <option value="Arshinagar Branch">ARSHINAGAR BRANCH</option>
        <option value="Ashuganj Branch">ASHUGANJ BRANCH</option>
        <option value="Ashulia Branch">ASHULIA BRANCH</option>
        <option value="Bajitpur Branch">BAJITPUR BRANCH</option>
        <option value="Banani Branch">BANANI BRANCH (EV)</option>
        <option value="Bandar Branch">BANDAR BRANCH</option>
        <option value="Baneshwar Branch">BANESHWAR BRANCH (EV)</option>
        <option value="Bangshal Branch">BANGSHAL BRANCH (EV)</option>
        <option value="Bandartila Branch">BANDARTILA BRANCH </option>
        <option value="Bashundhara Branch">BASHUNDHARA BRANCH</option>
        <option value="Barisal Branch">BARISAL BRANCH (EV)</option>
        <option value="Barisal Branch">BAGERHAT BRANCH</option>
        <option value="Beani Bazar Branch">BEANI BAZAR BRANCH</option>
        <option value="Belkuchi Branch">BELKUCHI BRANCH</option>
        <option value="Benapole Branch">BENAPOLE BRANCH</option>
        <option value="Bhola Branch">BHOLA BRANCH</option>
        <option value="Birol Bazar Branch">BIROL BAZAR BRANCH</option>
        <option value="Board Bazar Branch">BOARD BAZAR BRANCH</option>
        <option value="Bogra Branch">BOGRA BRANCH (EV)</option>
        <option value="Boro Bazar Branch">BORO BAZAR BRANCH (EV)</option>
        <option value="Brahmanbaria Branch">BRAHMANBARIA BRANCH (EV)</option>
        <option value="CDA Avenue Branch">CDA AVENUE BRANCH</option>
        <option value="Chandina Branch">CHANDINA BRANCH</option>
        <option value="Chandra SME/Krishi Branch">CHANDRA SME/KRISHI BRANCH</option>
        <option value="Chapai Nawabganj Branch">CHAPAI NAWABGANJ BRANCH</option>
        <option value="Chawk Bazar Branch">CHAWK BAZAR BRANCH</option>
        <option value="Choumuhani Branch">CHOUMUHANI BRANCH (EV)</option>
        <option value="Comilla Branch">COMILLA BRANCH (EV)</option>
        <option value="Companyganj Branch">COMPANYGANJ BRANCH (EV)</option>
        <option value="Cox's Bazar Branch">COX'S BAZAR BRANCH (EV)</option>
        <option value="Dania Branch">DANIA BRANCH</option>
        <option value="Darus Salam Road Branch">DARUS SALAM ROAD BRANCH</option>
        <option value="Dhamrai SME/Krishi Branch">DHAMRAI SME/KRISHI BRANCH</option>
        <option value="Dhanmondi Branch">DHANMONDI BRANCH (EV)</option>
        <option value="Dholaikhal Branch">DHOLAIKHAL BRANCH </option>
        <option value="Dinajpur Branch">DINAJPUR BRANCH (EV)</option>
        <option value="Elephant Road Branch">ELEPHANT ROAD BRANCH (EV)</option>
        <option value="Faridpur Branch">FARIDPUR BRANCH (EV)</option>
        <option value="Fatikchari Branch">FATIKCHARI BRANCH</option>
        <option value="Federation Branch">FEDERATION BRANCH (EV)</option>
        <option value="Feni Branch">FENI BRANCH (EV)</option>
        <option value="Gabtoli Bagbari Branch">GABTOLI BAGBARI BRANCH</option>
        <option value="Gazipur Chowrasta Branch">GAZIPUR CHOWRASTA BRANCH</option>
        <option value="Ghorasal Branch">GHORASAL BRANCH (EV)</option>
        <option value="Goala Bazar Branch">GOALA BAZAR BRANCH</option>
        <option value="Gouripur Bazar Branch">GOURIPUR BAZAR BRANCH</option>
        <option value="Gulshan Branch">GULSHAN BRANCH (EV)</option>
        <option value="Gulshan-Tejgaon Link Road Branch">GULSHAN-TEJGAON LINK ROAD BRANCH</option>
        <option value="Garibe Newaz Avenue Branch">GARIBE NEWAZ AVENUE BRANCH</option>
        <option value="Hathazari Branch">HATHAZARI BRANCH</option>
        <option value="Habiganj Branch">HABIGANJ BRANCH</option>
        <option value="Hasnabad Branch">HASNABAD BRANCH</option>
        <option value="Hathazari Branch">HEAD OFFICE</option>
        <option value="Isapura Bazar Branch">ISAPURA BAZAR BRANCH</option>
        <option value="Islampur Branch">ISLAMPUR BRANCH (EV)</option>
        <option value="Jamalpur Branch">JAMALPUR BRANCH</option>
        <option value="Jessore Branch">JESSORE BRANCH (EV)</option>
        <option value="Joypurhat Branch">JOYPURHAT BRANCH</option>
        <option value="Kaliganj SME/Krishi Branch">KALIGANJ SME/KRISHI BRANCH</option>
        <option value="Karatia Branch">KARATIA BRANCH</option>
        <option value="Kashinathpur SME/Krishi Branch">KASHINATHPUR SME/KRISHI BRANCH</option>
        <option value="Kawran Bazar Branch">KAWRAN BAZAR BRANCH (EV)</option>
        <option value="Keraniganj Branch">KERANIGANJ BRANCH (EV)</option>
        <option value="Khatunganj Branch">KHATUNGANJ BRANCH (EV)</option>
        <option value="Khulna Branch">KHULNA BRANCH (EV)</option>
        <option value="Konabari Branch">KONABARI BRANCH</option>
        <option value="Konapara Branch">KONAPARA BRANCH</option>
        <option value="Kushtia Branch">KUSHTIA BRANCH (EV)</option>
        <option value="Lalmatia Branch">LALMATIA BRANCH (EV)</option>
        <option value="Lalmatia Branch">LALDIGHI BRANCH</option>
        <option value="Madam Bibir Hat Branch">MADAM BIBIR HAT BRANCH</option>
        <option value="Madhabdi Branch">MADHABDI BRANCH</option>
        <option value="Malibagh Branch">MALIBAGH BRANCH (EV)</option>
        <option value="Manikgonj Branch">MANIKGONJ BRANCH</option>
        <option value="Mawna Branch">MAWNA BRANCH</option>
        <option value="Megola Bazar Branch">MEGOLA BAZAR BRANCH</option>
        <option value="Miah Bazar Branch">MIAH BAZAR BRANCH</option>
        <option value="Mirpur Branch">MIRPUR BRANCH</option>
        <option value="Mohakhali Branch">MOHAKHALI BRANCH</option>
        <option value="Mohammadpur Branch">MOHAMMADPUR BRANCH</option>
        <option value="Motijheel Branch">MOTIJHEEL BRANCH (EV)</option>
        <option value="Moulvi Bazar Branch">MOULVI BAZAR BRANCH (EV)</option>
        <option value="Moulvi Bazar Branch (Dist.)">MOULVI BAZAR BRANCH (DIST.) (EV)</option>
        <option value="Muktarpur Branch">MUKTARPUR BRANCH (EV)</option>
        <option value="Mymensingh Branch">MYMENSINGH BRANCH (EV)</option>
        <option value="Naogaon Branch">NAOGAON BRANCH (EV)</option>
        <option value="Narayanganj Branch">NARAYANGANJ BRANCH (EV)</option>
        <option value="Narsingdi Branch">NARSINGDI BRANCH (EV)</option>
        <option value="Nawabganj SME/Krishi Branch">NAWABGANJ SME/KRISHI BRANCH</option>
        <option value="Nawabpur Road Branch">NAWABPUR ROAD BRANCH (EV)</option>
        <option value="Naya Paltan Branch">NAYA PALTAN BRANCH (EV)</option>
        <option value="Netaiganj Branch">NETAIGANJ BRANCH (EV)</option>
        <option value="Noapara Branch">NOAPARA BRANCH (EV)</option>
        <option value="North Brooke Hall Road Branch">NORTH BROOKE HALL ROAD BRANCH (EV)</option>
        <option value="Nozu Miah Hat Branch">NOZU MIAH HAT BRANCH </option>
        <option value="Pabna Branch">PABNA BRANCH (EV)</option>
        <option value="Pallabi Branch">PALLABI BRANCH (EV)</option>
        <option value="Panchaboti Branch">PANCHABOTI BRANCH</option>
        <option value="Panchdona Branch">PANCHDONA BRANCH</option>
        <option value="Poradah Branch">PORADAH BRANCH</option>
        <option value="Progoti Sarani Branch">PROGOTI SARANI BRANCH</option>
        <option value="Rajshahi Branch">RAJSHAHI BRANCH (EV)</option>
        <option value="Rangamati Branch">RANGAMATI BRANCH</option>
        <option value="Rangpur Branch">RANGPUR BRANCH (EV)</option>
        <option value="Retail Banking Division">RETAIL BANKING DIVISION</option>
        <option value="Rupgonj Branch">RUPGONJ BRANCH</option>
        <option value="Satkhira Branch">SATKHIRA BRANCH (EV)</option>
        <option value="Savar Bazar Branch">SAVAR BAZAR BRANCH (EV)</option>
        <option value="Seed Store Bazar Branch">SEED STORE BAZAR BRANCH </option>
        <option value="Shah Amanat Market Branch">SHAH AMANAT MARKET BRANCH (EV)</option>
        <option value="Shantinagar Branch">SHANTINAGAR BRANCH (EV)</option>
        <option value="Shariatpur Branch">SHARIATPUR BRANCH</option>
        <option value="Shetabgonj SME/Krishi Branch">SHETABGONJ SME/KRISHI BRANCH</option>
        <option value="Sheikh Mujib Road Branch">SHEIKH MUJIB ROAD BRANCH (EV)</option>
        <option value="Sherpur Branch">SHERPUR BRANCH</option>
        <option value="Shibu Market Branch">SHIBU MARKET BRANCH</option>
        <option value="Shreemongal Branch">SHREEMONGAL BRANCH (EV)</option>
        <option value="Sonadanga Branch">SONADANGA BRANCH (EV)</option>
        <option value="Stock Exchange Branch">STOCK EXCHANGE BRANCH</option>
        <option value="Subid Bazar Branch">SUBID BAZAR BRANCH</option>
        <option value="Sylhet Branch">SYLHET BRANCH (EV)</option>
        <option value="Takerhat Branch">TAKERHAT BRANCH (EV)</option>
        <option value="Tanbazar Branch">TANBAZAR BRANCH</option>
        <option value="Tangail Branch">TANGAIL BRANCH</option>
        <option value="Terri Bazar Branch">TERRI BAZAR BRANCH</option>
        <option value="Tongi SME/Krishi Branch">TONGI SME/KRISHI BRANCH</option>
        <option value="Taherpur Branch">TAHERPUR BRANCH</option>
        <option value="Uposhohor Branch">UPOSHOHOR BRANCH</option>
        <option value="Uttara Branch">UTTARA BRANCH</option>
    
    
  </select>
  
      
    </div>
    <label for="inputEmail3" class="col-sm-3 col-form-label">Select from list</label>

</div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-3 col-form-label">Account/cart type</label>
  <div class="col-sm-5">
      <select class="form-control row" name="accountsinfo" style="margin-left: 0px;">
    <option></option>        
        <option>Mobile Bank</option>
        <option>Visa (Credit Card)</option>
        <option>Visa (Debit Card)</option>
        <option>Visa (Prepaid Card)</option>
        <option>IFIC Account</option>
        <option>All IFIC Product</option>
    
  </select>
  
      
    </div>
    <label for="inputEmail3" class="col-sm-3 col-form-label">Select from list</label>

</div>

   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Remarks</label>
    <div class="col-sm-8">
      <textarea class="form-control" rows="5" id="comment" name="categorydes"></textarea>
    </div>
  
  </div>

  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-3 col-form-label">Service type</label>
  <div class="col-sm-5">
      <select class="form-control row" name="serviceType" style="margin-left: 0px;">
    <option></option>        
        <option value="Information">Information</option>
        <option value="Service">Service</option>
        <option value="Complain">Complain</option>
       
    
  </select>
  
      
    </div>
    <label for="inputEmail3" class="col-sm-3 col-form-label">Select from list</label>

</div>
    
  </div>
 
 
 
  <div class="form-group row">
    <div style="margin-left: 700px;">
      <button type="submit" class="btn btn-primary" style="padding: 10px;"> Save </button>
    </div>
  </div>

</form>

        
    </div>
  
</div>
<footer>
    <p class="text-center">@creted by: Shah Md Arafatul Rahman.<b>mobile:</b>01738020985,01635505183</p>
   
</footer>





   <script type="text/javascript">
    function remove() {
        var y = document.getElementsByClassName('General Bank  Instruction');
        for(i=0;i<3;i++){
            y[i].style.display = "none";// for hide.
        }
        var y = document.getElementsByClassName('General Bank  Instruction');
        for(i=0;i<3;i++){
            y[i].style.display = "none";// for hide.
        }
        var y = document.getElementsByClassName('General Bank Complain');
        for(i=0;i<3;i++){
            y[i].style.display = "none";// for hide.
        }
         var y = document.getElementsByClassName('Others');
        for(i=0;i<3;i++){
            y[i].style.display = "none";//for hide.
        }
         var y = document.getElementsByClassName('VISA  Instruction');
        for(i=0;i<3;i++){
            y[i].style.display = "none";//for hide.
        }
        var y = document.getElementsByClassName('VISA Information');
        for(i=0;i<3;i++){
            y[i].style.display = "none";//for hide.
        }
        var y = document.getElementsByClassName('VISA Complaint');
        for(i=0;i<3;i++){
            y[i].style.display = "none";//for hide.
        }
        var y = document.getElementsByClassName('Visa  Debit Card');
        for(i=0;i<3;i++){
            y[i].style.display = "none";//for hide.
        }
    }

    function myFunction(event){ 

        remove();

        var x = document.getElementById("selector").value;      
        var y = document.getElementsByClassName(x);
        for(i=0;i<20;i++){
            y[i].style.display = "block"; // for show.
        }
    }
</script>                     
                    
            
            

@endsection

