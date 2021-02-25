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
  src: url(http://3.23.151.152/rtgs_php/public/bank/Hind-Regular.ttf) format('truetype');
},
 @font-face {
  font-family: Arial;
  font-style: normal;
  font-weight: normal;
  src: url(http://3.23.151.152/rtgs_php/public/Arial-regular.ttf) format('truetype');
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
  
    
    <div class="application" style=" width: 100%;  display: block; height: 85px; margin-top: -15px;">
      <span style="font-size: 15px; width: 100%;  display: block; text-align: center;  font-weight: 700;">Application for Funds Transfer through RTGS / NEFT</span>
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

    <div class="application" style=" width: 100%;  margin-top: -35px; display: block; height: 195px; ">
      
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
        
        <span style="width: 20px; height: 20px; border: 1px solid #000; text-align: center;   line-height: 10px;">D</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">M</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">M</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">Y</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">Y</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">Y</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">Y</span>
        
      </div>
      <div style="font-size: 13px; width: 100%; margin-top: -10px; text-align: left; display: block;  ">
        <span class="hindi" style="font-size: 13px; width: 100%; text-align: left; display: block;  ">
        Dear Sir/ प्रिय महोदय,
        </span>
        <span style="font-size: 13px; width: 100%; text-align: left; ">
        Please remit through NEFT/ RTGS a sum of </span><span class="hindi"> ₹ </span>_____________________________ (Rupees in words) _________________ ___________________________________only as per details give below: <br>
        
        <span style="font-size: 13px; text-align: left; "   class="hindi"> कृपया नीचे दिए गए विवरण के  अनुसार ₹ </span> <span>___________________________________ </span><span class="hindi"> (शब्दों में ₹) </span>____________________________ _________________________________________<span class="hindi">  केवल प्रेषित करे</span>
        
        
      </div>
     
    </div>
    <div class="application" style=" width: 100%; margin-top: -22px; display: block; height: 85px; ">
       <div  style="font-size: 13px;">
        <input type="checkbox" name="" checked=""> Cash (only for NEFT)/<span class="hindi">नकद (केवल एनईएफटी के लए)*</span> 
        <input type="checkbox" name="" checked=""> Cheque/<span class="hindi">चेक</span> 
        <input type="checkbox" name="" checked=""> Debit of my/our account (only for NEFT) /<span class="hindi" style="line-height: 10px;"> मेरा/हमारा खाता डेबट कर (केवल एनईएफटी के लए)</span> 
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

<div class="application" style="padding: 10px 15px;   text-align: center; margin-top: -5px; display: block; height: 20px;  ">
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
<div class="application" style="padding: 10px 15px;      text-align: center;  margin-top: -5px; display: block; height: 15px; ">
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
       
    GOVT
</div>
<div style="width: 23%; font-size: 12px;  line-height: 5px; border: 1px solid #000; border-left: 0px; border-top: 0px; display: block; float: left; height: 35px;" class="hindi">
      Government Payment /सरकारी भुगतान
</div>
 <div style="width: 2%; border: 1px solid #000; border-left: 0px; border-top: 0px;   display: block; float: left; height: 35px;">
         
      
  </div>
<div style="width: 8%; font-size: 12px; line-height: 25px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;">
    SALA
</div>
<div style="width: 23%; font-size: 12px; line-height: 5px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;" class="hindi">
  Salary Payment / तनख्वाह का भुगतान
</div>
  <div style="width: 2%; border: 1px solid #000; border-left: 0px;   display: block; border-top: 0px; float: left; height: 35px;">
         
      
  </div>
<div style="width: 8%; font-size: 12px; line-height: 25px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;">
    TREA
</div>
<div style="width: 23%; font-size: 12px; line-height: 15px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;" class="hindi">
  Treasury Payment / ट्रेजरी भुगतान
</div>
  
  
    
</div>
<div class="application" style="padding: 10px 15px;   text-align: center;  display: block; height: 18px; ">
  <div style="width: 2%; border: 1px solid #000; border-top: 0px; display: block; float: left; height: 35px;">
      
  </div>
<div style="width: 8%; font-size: 12px;  line-height: 25px; border: 1px solid #000; border-left: 0px; border-top: 0px; display: block; float: left; height: 35px;">
       
    HEDG
</div>
<div style="width: 23%; font-size: 12px;  line-height: 15px; border: 1px solid #000; border-left: 0px; border-top: 0px; display: block; float: left; height: 35px;" class="hindi">
      edging / हेजिंग
</div>
 <div style="width: 2%; border: 1px solid #000; border-left: 0px; border-top: 0px;   display: block; float: left; height: 35px;">
         
      
  </div>
<div style="width: 8%; font-size: 12px; line-height: 25px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;">
    SECU
</div>
<div style="width: 23%; font-size: 12px; line-height: 13px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;" class="hindi">
  Securities / सिक्योरिटीज
</div>
  <div style="width: 2%; border: 1px solid #000; border-left: 0px;   display: block; border-top: 0px; float: left; height: 35px;">
         
      
  </div>
<div style="width: 8%; font-size: 12px; line-height: 25px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;">
    VATX
</div>
<div style="width: 23%; font-size: 12px; line-height: 5px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;" class="hindi">
  Value Added Tax Payment /मूल्य वर्धित कर भुगतान
</div>
  
  
    
</div>
<div class="application" style="padding: 10px 15px;   text-align: center;  display: block; height: 15px; ">
  <div style="width: 2%; border: 1px solid #000; border-top: 0px; display: block; float: left; height: 35px;">
      
  </div>
<div style="width: 8%; font-size: 12px;  line-height: 25px; border: 1px solid #000; border-left: 0px; border-top: 0px; display: block; float: left; height: 35px;">
       
    INTC
</div>
<div style="width: 23%; font-size: 12px;  line-height: 5px; border: 1px solid #000; border-left: 0px; border-top: 0px; display: block; float: left; height: 35px;" class="hindi">
      Intra Company Payment / इंट्रा कंपनी भुगतान
</div>
 <div style="width: 2%; border: 1px solid #000; border-left: 0px; border-top: 0px;   display: block; float: left; height: 35px;">
         
      
  </div>
<div style="width: 8%; font-size: 12px; line-height: 25px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;">
    SSBE
</div>
<div style="width: 23%; font-size: 12px; line-height: 5px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;" class="hindi">
  Social Security Benefit /सामाजिक सुरक्षा लाभ
</div>
  <div style="width: 2%; border: 1px solid #000; border-left: 0px;   display: block; border-top: 0px; float: left; height: 35px;">
         
      
  </div>
<div style="width: 8%; font-size: 12px; line-height: 25px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;">
    WHLD
</div>
<div style="width: 23%; font-size: 12px; line-height: 15px; border: 1px solid #000; border-top: 0px; border-left: 0px; display: block; float: left; height: 35px;" class="hindi">
  With Holding / रोक
</div>
</div>
<div class="application" style=" width: 100%; text-align: center;  border-top: 1px solid #000; border-bottom: 1px solid #000;  display: block; background:#dbddc7; height: 20px; ">
  <div style="font-weight: 700; font-size: 13px; display: block; margin-top: -8px;" class="hindi">Terms and Conditions / नियम और शर्तें</div>
</div>
<div class="top" style=" padding: 10px 15px;  height: 495px;">
   <div class="application" style=" width: 100%; display: block; float: left;  height: 20px; ">
       <div style="font-size: 10px; width: 100%; display: block; text-align: left; " class="hindi">
          * This transfer is required for a single transaction / यह हस्तांतरण केवल लेनदेन के लिए आवश्यक है</div> 
          <div style="display: block; margin-top: 2px;">
           <span style="font-size: 10px; line-height: 7px; width: 100%;  text-align: left;  " class="hindi">
          * The fund transfer will be governed by the terms and conditions given on our website www.icicibank.com / फंड ट्रांसफर हमारी वेबसाइट www.icicibank.com पर दिए गए नियमों और शर्तों के अनुसार होगा</span> 
          </div>
          <div style="display: block; margin-top: 4px;">
           <span style="font-size: 10px; line-height: 7px; width: 100%;  text-align: left;  " class="hindi">
          * I / We authorise ICICI Bank to recover charges as may be applicable by debiting my account as mentioned above / मैं / हम आईसीआईसीआई बैंक को अपने खाते में डेबिट के रूप में उपर्युक्त उल्लिखित शुल्क वसूल कर सकते हैं</span> 
          </div>
          <div style="display: block; margin-top: 4px;">
           <span style="font-size: 10px; line-height: 7px; width: 100%;  text-align: left;  " class="hindi">
          * I / We understand that as per the RBI circular dated October 14, 2010, transfer of funds through electronic mode will be executed only on the basisof the account number of the beneficiary provided while initiating the transaction; name will not be considered as a criteria for providing credit. / मैं / हम समझते हैं कि 14 अक्टूबर, 2010 को आरबीआई के परिपत्र के अनुसार, इलेक्ट्रॉनिक मोड के माध्यम से धन के हस्तांतरण को केवल आधार पर निष्पादित किया जाएगा। लेनदेन शुरू करते समय प्रदान की गई लाभार्थी की खाता संख्या; क्रेडिट प्रदान करने के लिए नाम को मानदंड नहीं माना जाएगा</span> 
          </div>
          <div style="display: block; margin-top: 4px;">
           <span style="font-size: 10px; line-height: 7px; width: 100%;  text-align: left;  " class="hindi">
          * I understand that this facility is available only at select locations and banks covered under Electronic Funds Transfer facility offered by RBI / मैं समझता हूं कि यह सुविधा केवल RBI द्वारा दी जाने वाली इलेक्ट्रॉनिक फंड ट्रांसफर सुविधा के तहत चुनिंदा स्थानों और बैंकों में उपलब्ध है</span> 
          </div>
          <div style="display: block; margin-top: 4px;">
           <span style="font-size: 10px; line-height: 7px; width: 100%;  text-align: left;  " class="hindi">
          * By signing on this RTGS Payment Instruction, the Customer agrees and acknowledges that this RTGS Payment Instruction and the ICICI Bank RTGSFacility is subject to the Terms and Conditions, the Notice and these terms, and requests the execution of these instructions in terms thereof / इस RTGS भुगतान निर्देश पर हस्ताक्षर करने से, ग्राहक सहमत है और स्वीकार करता है कि यह RTGS भुगतान निर्देश और ICICI बैंक RTGS सुविधा नियम और शर्तों, सूचना और इन शर्तों के अधीन है, और इन शर्तों के निष्पादन का अनुरोध करता है</span> 
          </div>
          <div style="display: block; margin-top: 4px;">
           <span style="font-size: 10px; line-height: 7px; width: 100%;  text-align: left;  " class="hindi">
          * Terms used but not defined herein shall have the meaning ascribed to them in the Terms and Conditions / यहां उपयोग किए गए लेकिन परिभाषित नहीं किए गए शब्दों का अर्थ उन नियमों और शर्तों के अनुसार होगा जो उन पर अंकित हैं </span> 
          </div>
          <div style="display: block; margin-top: 4px;">
           <span style="font-size: 10px; line-height: 7px; width: 100%;  text-align: left;  " class="hindi">
          * The Customer understands that the terms enumerated in this RTGS Payment Instruction are in addition to and not in derogation of the Terms andConditions /ग्राहक समझता है कि इस आरटीजीएस भुगतान निर्देश में गणना की गई शर्तों के अलावा और शर्तों के अपमान में नहीं हैं शर्तेँ </span> 
          </div>
          <div style="display: block; margin-top: 4px;">
           <span style="font-size: 10px; line-height: 7px; width: 100%;  text-align: left;  " class="hindi">
          * Subject to ICICI Bank’s right, at its sole discretion, to accept or reject the RTGS Payment Instructions, ICICI Bank shall endeavor to duly execute theseinstructions, except when, inter alia, this RTGS Payment Instruction is incomplete or has been filled in wrongly or the instructions herein cannot beexecuted under the RTGS. An acknowledgement of receipt of this RTGS Payment Instruction shall not be construed as binding ICICI Bank to executethe same, other than in terms of the Terms and Conditions / ICICI बैंक के अधिकार के अधीन, अपने विवेकाधिकार पर, RTGS भुगतान निर्देशों को स्वीकार या अस्वीकार करने के लिए, ICICI बैंक इनका विधिवत निष्पादन करने का प्रयास करेगा निर्देश, जब, अंतर को छोड़कर, यह आरटीजीएस भुगतान निर्देश अधूरा है या गलत तरीके से भरा गया है या इसमें दिए गए निर्देश नहीं हो सकते हैं RTGS के तहत निष्पादित। इस आरटीजीएस भुगतान निर्देश की प्राप्ति की स्वीकृति आईसीआईसीआई बैंक को निष्पादित करने के लिए बाध्यकारी नहीं होगी नियम और शर्तों के संदर्भ में समान, अन्य </span> 
          </div>
          <div style="display: block; margin-top: 4px;">
           <span style="font-size: 10px; line-height: 7px; width: 100%;  text-align: left;  " class="hindi">
          * ICICI Bank has not made any warranty and makes no representation about the quality, nature or availability of the ICICI Bank RTGS Facility / आईसीआईसीआई बैंक ने कोई वारंटी नहीं दी है और आईसीआईसीआई बैंक आरटीजीएस सुविधा की गुणवत्ता, प्रकृति या उपलब्धता के बारे में कोई प्रतिनिधित्व नहीं करता है </span> 
          </div>
           <div style="display: block; margin-top: 4px;">
           <span style="font-size: 10px; line-height: 7px; width: 100%;  text-align: left;  " class="hindi">
          * ICICI Bank shall have no obligations to any person including any beneficiary (or any person claiming under or through such beneficiary) other than theCustomer for the execution of this RTGS Payment Instruction / ICICI बैंक को इस आरटीजीएस भुगतान निर्देश के निष्पादन के लिए ग्राहक के अलावा  कोई भी लाभार्थी (या ऐसे लाभार्थी के तहत दावा करने वाले) कोई भी व्यक्ति के लिए कोई उत्तरदायित्व नही</span> 
          </div>
          <div style="display: block; margin-top: 4px;">
           <span style="font-size: 10px; line-height: 7px; width: 100%;  text-align: left;  " class="hindi">
          * The Customer is hereby notified that there is a risk of non - payment to the beneficiary on the day of the transaction. The same may be for any reasonwhatsoever, including a holiday at the beneficiary&#x27;s branch. ICICI Bank or RBI or any other participant in NEFT / RTGS shall not be liable, in any mannerwhatsoever, to the Customer for any such delay / ग्राहक को यह सूचित किया जाता है कि लेनदेन के दिन लाभार्थी को भुगतान न करने का जोखिम है। वही किसी भी कारण से हो सकता है जो भी हो, लाभार्थी की शाखा में छुट्टी सहित। आईसीआईसीआई बैंक या आरबीआई या एनईएफटी / आरटीजीएस में किसी अन्य प्रतिभागी को किसी भी तरह से उत्तरदायी नहीं बनाया जाएगा जो भी हो, ग्राहक को इस तरह की देरी के लिए</span> 
          </div>
          <div style="display: block; margin-top: 4px;">
           <span style="font-size: 10px; line-height: 7px; width: 100%;  text-align: left;  " class="hindi">
          * For NEFT: Transfer of an amount up to ₹49,999/- in cash is permissible using this facility. KYC to be provided by non customer. Cheque is mandatoryfor remittance above ₹ 100,000/-. / एनईएफटी के लिए: इस सुविधा का उपयोग करके नकद में ₹49,999 / - तक की राशि का स्थानांतरण अनुमन्य है। गैर ग्राहक द्वारा प्रदान की जाने वाली केवाईसी। जाँच अनिवार्य है ₹100,000 / से ऊपर के प्रेषण के लिए चेक अनिवार्य है</span> 
          </div>
    </div>
</div>
<div class="application" style=" width: 100%; text-align: center;  border-top: 1px solid #000; border-bottom: 1px solid #000;  display: block; background:#dbddc7; height: 20px; ">
  <div style="font-weight: 700; font-size: 13px; display: block; margin-top: -8px;" class="hindi">Customer Signature (S) / ग्राहक के हस्ताक्षर</div>
</div>

<div class="application" style=" padding: 10px 15px;  width: 100%; text-align: center;     display: block; ">
  <div  style="width: 31%; display: inline-block; margin-top: 10px; height: 40px; font-size: 14px; color: #c7c7c7; border: 1px solid #000;" class="hindi">
    Signature / हस्ताक्षर
  </div>
<div  style="width: 31%; display: inline-block; margin-top: 10px; margin-left: 15px; height: 40px; font-size: 14px; color: #c7c7c7; border: 1px solid #000;" class="hindi">
    Signature / हस्ताक्षर
  </div>
  <div  style="width: 31%; display: inline-block; margin-top: 10px; margin-left: 15px; height: 40px; font-size: 14px; color: #c7c7c7; border: 1px solid #000;" class="hindi">
    Signature / हस्ताक्षर
  </div>
</div>
</body>
</html>
