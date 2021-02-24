<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>  

<style type="text/css">
  @page { margin: 20px; padding: 15px; }
    @font-face {
  font-family: Hind;
  font-style: normal;
  font-weight: normal;
  src: url(http://localhost/rtgs_php/public/bank/Hind-Regular.ttf) format('truetype');
},
 @font-face {
  font-family: Arial;
  font-style: normal;
  font-weight: normal;
  src: url(http://localhost/rtgs_php/public/Arial-regular.ttf) format('truetype');
},
.hindi { 
  font-family: Hind, DejaVu Sans, sans-serif;
}
body{
  font-family: Arial, sans-serif;
}

input[type=checkbox] { display: inline; }
</style>
</head>
<body style="padding: 10px 0px; border: 1px solid;">
<div class="top"  style="width: 100%; display: block; padding: 10px 15px; ">
  <div class="logo" style="width: 100%; display: block; height: 25px;  ">
    <img src="{{ url('public/bank/images/icici_bank_logo_symbol-p-500.png') }}" style="height: 25px; width: auto;">
  </div>
  
    
    <div class="application" style=" width: 100%;  display: block; height: 85px;">
      <span style="font-size: 15px; width: 100%;  display: block; text-align: center; font-weight: 700;">Application for Funds Transfer through RTGS / NEFT</span>
      <span style="font-size: 13px; width: 100%; margin-top: -2px; text-align: center; display: block;  font-weight: 700;">
        <input type="checkbox" name="" checked=""> RTGS <input type="checkbox" name=""> 
        NEFT (Select RTGS or NEFT as remittance type)
      </span>
      <span class="hindi" style="font-size: 13px; width: 100%;  margin-top: -5px;   padding: 0px; text-align: center; display: block;">आरटीजीएस / एनईएफटी मा RTGS / NEFT के माध्यम से फंड ट्रांसफर के लिए आवेदन</span>
      <span class="hindi" style="font-size: 13px; width: 100%; margin-top: -10px; text-align: center; display: block;  ">
        <input type="checkbox" name="" checked=""> आरटीजीएस <input type="checkbox" name=""> 
        एनईएफटी (आरटीजीएस या एनईएफटी  चुनें)
      </span>
    </div>

    <div class="application" style=" width: 100%;  margin-top: -15px; display: block; height: 195px; ">
      
      <span class="hindi" style="font-size: 13px; width: 100%; margin-top: -10px; text-align: left; display: block;  ">
        To / प्रति,
      </span>
      <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -10px; text-align: left; display: block;  ">
        The Branch Manger / शाखा प्रबंधक
      </span>
      <span class="hindi"   style="font-size: 13px; width: 100%; margin-top: -10px; text-align: left; display: block;  ">
        __________________Branch/ शाखा
      </span>
      <div style="font-size: 13px; width: 100%; margin-top: -25px; text-align: right; display: block;  ">
        <span class="hindi">Date/ तारीख:</span> <span style="border: 1px solid #000; color: #ccc;">D</span>
        
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">D</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">M</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">M</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">Y</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">Y</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">Y</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">Y</span>
        
      </div>
      <div style="font-size: 13px; width: 100%; margin-top: 0px; text-align: left; display: block;  ">
        <span class="hindi" style="font-size: 13px; width: 100%; text-align: left; display: block;  ">
        Dear Sir/ प्रिय महोदय,
        </span>
        <span style="font-size: 13px; width: 100%; text-align: left; ">
        Please remit through NEFT/ RTGS a sum of </span><span class="hindi"> ₹ </span>_____________________________ (Rupees in words) _________________ ___________________________________only as per details give below: <br>
        
        <span style="font-size: 13px; text-align: left; "   class="hindi"> कृपया नीचे दिए गए विवरण के  अनुसार ₹ </span> <span>___________________________________ </span><span class="hindi"> (शब्दों में ₹) </span>____________________________ _________________________________________<span class="hindi">  केवल प्रेषित करे</span>
        
        
      </div>
     
    </div>
    <div class="application" style=" width: 100%;  margin-top: -10px; display: block; height: 100px; ">
       <div  style="font-size: 13px;">
        <input type="checkbox" name="" checked=""> Cash (only for NEFT)/<span class="hindi">नकद (केवल एनईएफटी के लए)*</span> 
        <input type="checkbox" name="" checked=""> Cheque/<span class="hindi">चेक</span> 
        <input type="checkbox" name="" checked=""> Debit of my/our account (only for NEFT) /<span class="hindi"> मेरा/हमारा खाता डेबट कर (केवल एनईएफटी के लए)</span> 
        </div>
        <span style="font-size: 13px; width: 100%; text-align: left; ">
          * In case of cash please fill in the pay-in-slip /</span> <span  style="font-size: 13px;" class="hindi">कैश के मामले में कृपया पे-इन-स्लिप भरें</span> 
          <div style="display: block; margin-top: -10px;">
           <span style="font-size: 13px; width: 100%; font-family: Arial, sans-serif;  text-align: left; font-weight: 700; ">
          * To be filled by the Applicant in CAPITAL LETTERS /</span> <span  style="font-size: 13px;" class="hindi">कैपिटल लेटर में आवेदक द्वारा भरा जाना</span> 
          </div>
    </div>
</div>
<div class="application" style=" width: 100%; text-align: center;  border-top: 1px solid #000; border-bottom: 1px solid #000;  display: block; background:#dbddc7; height: 20px; ">
  <div style="font-weight: 700; font-size: 13px; display: block; margin-top: -8px;" class="hindi">DETAILS OF APPLICANT (REMITTER) / आवेदन का विवरण</div>
</div>

<div class="application" style="padding: 10px 15px;   text-align: center;  display: block; height: 40px; ">
    <div style="width: 30%;  display: block; float: left;">
       <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -10px; text-align: left; display: block;  ">
          Account Number / खाता संख्या :
        </span> 
         <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -5px; text-align: left; display: block;  ">
          Cheque Number/ चेक नंबर :
        </span> 
    </div>

    <div style="width: 40%;display: block; float: left; ">
      <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -3px; text-align: left; display: block;  ">
        <span  style=" width: 20px; height: 20px; border: 1px solid #000; text-align: center;  display: inline-block; line-height: 10px; "></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
      </span> 
      <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -3px; text-align: left; display: block;">
        <span  style=" width: 20px; height: 20px; border: 1px solid #000; text-align: center;  display: inline-block; line-height: 10px; "></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
      </span> 
    </div>
    <div style="width: 30%;display: block; float: left; ">
      <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -5px; text-align: left; display: block;  ">
        Cheque Date / चेक  की तारीख:
        <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -3px; text-align: left; display: block;  ">
        <span  style=" width: 20px; height: 20px; border: 1px solid #000; text-align: center;  display: inline-block; line-height: 10px; ">D</span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;">D</span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;">M</span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;">M</span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;">Y</span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;">Y</span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;">Y</span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;">Y</span>
      </span> 
      </span>
    </div>
</div>
<div class="application" style="padding: 10px 15px;   text-align: center;  display: block; height: 65px; ">
    <div style="width: 30%;  display: block; float: left;">
       <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -10px; text-align: left; display: block;  ">
          Remitter's Name/ आवेदक का नाम:
        </span> 
         <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -5px; text-align: left; display: block;  ">
          Address/ पता:
        </span> 
    </div>

    <div style="width: 70%;display: block; float: left; ">
      <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -3px; text-align: left; display: block;  ">
        <span  style=" width: 20px; height: 20px; border: 1px solid #000; text-align: center;  display: inline-block; line-height: 10px; "></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
      
        

      </span> 
      <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -3px; text-align: left; display: block;  ">
        <span  style=" width: 20px; height: 20px; border: 1px solid #000; text-align: center;  display: inline-block; line-height: 10px; "></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        


        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; "></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        

      </span> 
     
    </div>
    
</div>

<div class="application" style="padding: 10px 15px;   text-align: center;  display: block; height: 25px; ">
    <div style="width: 30%;  display: block; float: left;">
       <span  class="hindi"  style="font-size: 13px; width: 100%; line-height: 5px; margin-top: -10px; text-align: left; display: block;  ">
          Mobile / Other Number / मोबाइल / अन्य नंबर:
        </span> 
        
    </div>

    <div style="width: 70%;display: block; float: left; ">
      <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -3px; text-align: left; display: block;  ">
        <span  style=" width: 20px; height: 20px; border: 1px solid #000; text-align: center;  display: inline-block; line-height: 10px; "></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
      </span> 
      
     
    </div>
    
</div>
  
 <div class="application" style=" width: 100%; text-align: center;  border-top: 1px solid #000; border-bottom: 1px solid #000;  display: block; background:#dbddc7; height: 20px; ">
  <div style="font-weight: 700; font-size: 13px; display: block; margin-top: -8px;" class="hindi">DETAILS OF BENEFICIARY / लाभार्थी का विवरण</div>
</div>
<div class="application" style="padding: 10px 15px;   text-align: center;  display: block; height: 15px; ">
    <div style="width: 30%;  display: block; float: left;">
       <span  class="hindi"  style="font-size: 13px; width: 100%; line-height: 5px; margin-top: 0px; text-align: left; display: block;  ">
          Beneficiary&#x27;s Name / लाभार्थी का नाम:
        </span> 
        
    </div>

    <div style="width: 70%;display: block; float: left; ">
      <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -3px; text-align: left; display: block;  ">
        <span  style=" width: 20px; height: 20px; border: 1px solid #000; text-align: center;  display: inline-block; line-height: 10px; "></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
      </span> 
      
     
    </div>
    
</div>
<div class="application" style="padding: 10px 15px;   text-align: center;  display: block; height: 12px; ">
    <div style="width: 30%;  display: block; float: left;">
       <span  class="hindi"  style="font-size: 13px; width: 100%; line-height: 5px; margin-top: -12px; text-align: left; display: block;  ">
          Account Number / लाभार्थी का खाता संख्या
        </span> 
        
    </div>

    <div style="width: 70%;display: block; float: left; ">
      <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -3px; text-align: left; display: block;  ">
        <span  style=" width: 20px; height: 20px; border: 1px solid #000; text-align: center;  display: inline-block; line-height: 10px; "></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
      </span> 
      
     
    </div>
    
</div>
<div class="application" style="padding: 10px 15px;      text-align: center;  display: block; height: 12px; ">
    <div style="width: 30%;  display: block; float: left;">
       <span  class="hindi"  style="font-size: 13px; width: 100%; line-height: 5px; margin-top: 0px; text-align: left; display: block;  ">
          Bank Name / लाभार्थी का  बैंक का नाम:
        </span> 
        
    </div>

    <div style="width: 70%;display: block; float: left; ">
      <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -3px; text-align: left; display: block;  ">
        <span  style=" width: 20px; height: 20px; border: 1px solid #000; text-align: center;  display: inline-block; line-height: 10px; "></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
      </span> 
      
     
    </div>
    
</div>
<div class="application" style="padding: 10px 15px;      text-align: center;  display: block; height: 12px; ">
    <div style="width: 30%;  display: block; float: left;">
       <span  class="hindi"  style="font-size: 13px; width: 100%; line-height: 5px; margin-top: 0px; text-align: left; display: block;  ">
          IFSC Code (11-digit) / IFSC कोड:
        </span> 
        
    </div>

    <div style="width: 70%;display: block; float: left; ">
      <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -3px; text-align: left; display: block;  ">
        <span  style=" width: 20px; height: 20px; border: 1px solid #000; text-align: center;  display: inline-block; line-height: 10px; "></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
       
      </span> 
      
     
    </div>
    
</div>
<div class="application" style="padding: 10px 15px;      text-align: center;  display: block; height: 12px; ">
    <div style="width: 30%;  display: block; float: left;">
       <span  class="hindi"  style="font-size: 13px; width: 100%; line-height: 5px; margin-top: 0px; text-align: left; display: block;  ">
          Branch Address / शाखा का पता:
        </span> 
        
    </div>

    <div style="width: 70%;display: block; float: left; ">
      <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -3px; text-align: left; display: block;  ">
        <span  style=" width: 20px; height: 20px; border: 1px solid #000; text-align: center;  display: inline-block; line-height: 10px; "></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
       
       <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
      
       
      </span> 
      
     
    </div>
    
</div>
<div class="application" style="padding: 10px 15px;      text-align: center;  display: block; height: 12px; ">
    <div style="width: 30%;  display: block; float: left;">
       <span  class="hindi"  style="font-size: 13px; width: 100%; line-height: 5px; margin-top: -15px; text-align: left; display: block;  ">
          Confirm Account Number Again /खाता संख्या की फिर से पुष्टि करें:
        </span> 
        
    </div>

    <div style="width: 70%;display: block; float: left; ">
      <span  class="hindi"  style="font-size: 13px; width: 100%; margin-top: -3px; text-align: left; display: block;  ">
        <span  style=" width: 20px; height: 20px; border: 1px solid #000; text-align: center;  display: inline-block; line-height: 10px; "></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
       
       <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
        <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
         <span  style=" width: 20px; height: 20px;  display: inline-block;  border: 1px solid #000; text-align: center; line-height: 10px; margin-left: -5px; border-left: none;"></span>
      
       
      </span> 
      
     
    </div>
    
</div>
<div class="application" style="padding: 10px 15px;      text-align: center;  display: block; height: 12px; ">
    <div style="width: 30%;  display: block; float: left;">
       <span  class="hindi"  style="font-size: 13px; width: 100%; line-height: 5px;text-align: left; display: block;  ">
          Remarks (if any) / टिप्पणी (यदि हो):
        </span> 
        
    </div>

    <div style="width: 70%;display: block; float: left; ">________________________________________________________</div>
    
</div>
<div class="application" style=" width: 100%; text-align: center;  border-top: 1px solid #000; border-bottom: 1px solid #000;  display: block; background:#dbddc7; height: 20px; ">
  <div style="font-weight: 700; font-size: 13px; display: block; margin-top: -8px;" class="hindi">PURPOSE CODE FOR RTGS / आरटीजीएस के लिए पूर्ण कोड</div>
</div>


<div class="application"  style=" padding: 10px 15px; width:100%;display: block;   text-align: center;  display: block; height: 18px; ">
  <div style="width: 2%; border: 1px solid #000;  display: block; float: left; height: 35px;">
  </div>
<div style="width: 8%; font-size: 12px; line-height: 25px; border: 1px solid #000; border-left: 0px; display: block; float: left; height: 35px;">
       
    Cash
</div>
<div style="width: 23%; font-size: 12px; line-height: 5px; border: 1px solid #000; border-left: 0px; display: block; float: left; height: 35px;" class="hindi">
         
      Cash Management Transfer/नकद प्रबंधन हस्तांतरण
</div>
 <div style="width: 2%; border: 1px solid #000; border-left: 0px;   display: block; float: left; height: 35px;">
         
      
  </div>
<div style="width: 8%; font-size: 12px; line-height: 25px; border: 1px solid #000; border-left: 0px; display: block; float: left; height: 35px;">
    INTE
</div>
<div style="width: 23%; font-size: 12px; line-height: 15px; border: 1px solid #000; border-left: 0px; display: block; float: left; height: 35px;" class="hindi">
  Interest / ब्याज
</div>
  <div style="width: 2%; border: 1px solid #000; border-left: 0px;   display: block; float: left; height: 35px;">
         
      
  </div>
<div style="width: 8%; font-size: 12px; line-height: 25px; border: 1px solid #000; border-left: 0px; display: block; float: left; height: 35px;">
    SUPP
</div>
<div style="width: 23%; font-size: 12px; line-height: 5px; border: 1px solid #000; border-left: 0px; display: block; float: left; height: 35px;" class="hindi">
  Supplier Payment / प्रदाकय भुगतान
</div>
  
  
    
</div>
<div class="application" style="padding: 10px 15px;   text-align: center;  display: block; height: 18px; ">
  <div style="width: 2%; border: 1px solid #000; border-top: 0px; display: block; float: left; height: 35px;">
      
  </div>
<div style="width: 8%; font-size: 12px;  line-height: 25px; border: 1px solid #000; border-left: 0px; border-top: 0px; display: block; float: left; height: 35px;">
       
    DIVI
</div>
<div style="width: 23%; font-size: 12px;  line-height: 15px; border: 1px solid #000; border-left: 0px; border-top: 0px; display: block; float: left; height: 35px;" class="hindi">
      Dividend / लाभांश
</div>
 <div style="width: 2%; border: 1px solid #000; border-left: 0px; border-top: 0px;   display: block; float: left; height: 35px;">
         
      
  </div>
<div style="width: 8%; font-size: 12px; line-height: 25px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;">
    PENS
</div>
<div style="width: 23%; font-size: 12px; line-height: 15px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;" class="hindi">
  Pension Payment / पेंशन भुगतान
</div>
  <div style="width: 2%; border: 1px solid #000; border-left: 0px;   display: block; border-top: 0px; float: left; height: 35px;">
         
      
  </div>
<div style="width: 8%; font-size: 12px; line-height: 25px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;">
    TRAD
</div>
<div style="width: 23%; font-size: 12px; line-height: 15px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;" class="hindi">
  Trade /व्यापार
</div>
  
  
    
</div>
<div class="application" style="padding: 10px 15px;   text-align: center;  display: block; height: 18px; ">
  <div style="width: 2%; border: 1px solid #000; border-top: 0px; display: block; float: left; height: 35px;">
      
  </div>
<div style="width: 8%; font-size: 12px;  line-height: 25px; border: 1px solid #000; border-left: 0px; border-top: 0px; display: block; float: left; height: 35px;">
       
    CORT
</div>
<div style="width: 23%; font-size: 12px;  line-height: 5px; border: 1px solid #000; border-left: 0px; border-top: 0px; display: block; float: left; height: 35px;" class="hindi">
         
      Trade Settlement Payment / व्यापार निपटान भुगतान
</div>
 <div style="width: 2%; border: 1px solid #000; border-left: 0px; border-top: 0px;   display: block; float: left; height: 35px;">
         
      
  </div>
<div style="width: 8%; font-size: 12px; line-height: 25px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;">
    LOAN
</div>
<div style="width: 23%; font-size: 12px; line-height: 15px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;" class="hindi">
  Loan / ऋण
</div>
  <div style="width: 2%; border: 1px solid #000; border-left: 0px;   display: block; border-top: 0px; float: left; height: 35px;">
         
      
  </div>
<div style="width: 8%; font-size: 12px; line-height: 25px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;">
    TAXS
</div>
<div style="width: 23%; font-size: 12px; line-height: 15px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;" class="hindi">
  Tax Payment/ कर भुगतान
</div>
  
  
    
</div>
<div class="application" style="padding: 10px 15px;   text-align: center;  display: block; height: 15px; ">
  <div style="width: 2%; border: 1px solid #000; border-top: 0px; display: block; float: left; height: 35px;">
      
  </div>
<div style="width: 8%; font-size: 12px;  line-height: 25px; border: 1px solid #000; border-left: 0px; border-top: 0px; display: block; float: left; height: 35px;">
       
    CORT
</div>
<div style="width: 23%; font-size: 12px;  line-height: 5px; border: 1px solid #000; border-left: 0px; border-top: 0px; display: block; float: left; height: 35px;" class="hindi">
         
      Trade Settlement Payment / व्यापार निपटान भुगतान
</div>
 <div style="width: 2%; border: 1px solid #000; border-left: 0px; border-top: 0px;   display: block; float: left; height: 35px;">
         
      
  </div>
<div style="width: 8%; font-size: 12px; line-height: 25px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;">
    LOAN
</div>
<div style="width: 23%; font-size: 12px; line-height: 15px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;" class="hindi">
  Loan / ऋण
</div>
  <div style="width: 2%; border: 1px solid #000; border-left: 0px;   display: block; border-top: 0px; float: left; height: 35px;">
         
      
  </div>
<div style="width: 8%; font-size: 12px; line-height: 25px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;">
    TAXS
</div>
<div style="width: 23%; font-size: 12px; line-height: 15px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;" class="hindi">
  Tax Payment/ कर भुगतान
</div>
  
  
    
</div>
</body>
</html>
