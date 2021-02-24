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
<div class="top"  style="width: 100%; display: block; padding: 0px 15px; ">
  <div class="logo" style="width: 100%; display: block; height: 40px;  ">
    <img src="{{ url('public/bank/images/icici_bank_logo_symbol-p-500.png') }}" style="height: 40px; width: auto;">
  </div>
  <div class="application" style="width: 100%; display: block; height: 80px; ">
    
    <div class="application" style=" width: 100%;  display: block; height: 85px;">
      <span style="font-size: 15px; width: 100%;  display: block; text-align: center; font-weight: 700;">Application for Funds Transfer through RTGS / NEFT</span>
      <span style="font-size: 13px; width: 100%; text-align: center; display: block;  font-weight: 700;">
        <input type="checkbox" name="" checked=""> RTGS <input type="checkbox" name=""> 
        NEFT (Select RTGS or NEFT as remittance type)
      </span>
      <span class="hindi" style="font-size: 13px; width: 100%;  padding: 0px; text-align: center; display: block;">आरटीजीएस / एनईएफटी मा RTGS / NEFT के माध्यम से फंड ट्रांसफर के लिए आवेदन</span>
      <span class="hindi" style="font-size: 13px; width: 100%; margin-top: -10px; text-align: center; display: block;  ">
        <input type="checkbox" name="" checked=""> आरटीजीएस <input type="checkbox" name=""> 
        एनईएफटी (आरटीजीएस या एनईएफटी  चुनें)
      </span>
    </div>

    <div class="application" style=" width: 100%;  margin-top: -15px; display: block; height: 85px;">
      
      <span style="font-size: 13px; width: 100%; margin-top: -10px; text-align: left; display: block;  ">
        To / प्रति,
      </span>
      <span style="font-size: 13px; width: 100%; margin-top: -10px; text-align: left; display: block;  ">
        The Branch Manger / शाखा प्रबंधक
      </span>
      <span style="font-size: 13px; width: 100%; margin-top: -10px; text-align: left; display: block;  ">
        __________________Branch/ शाखा
      </span>
      <div style="font-size: 13px; width: 100%; margin-top: -25px; text-align: right; display: block;  ">
        Date/ तारीख: <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">D</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">D</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">D</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">M</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">M</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">Y</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">Y</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">Y</span>
        <span style="border: 1px solid #000; padding-left: 4px; padding-right: 4px; color: #ccc;">Y</span>
        
      </div>
      <div style="font-size: 13px; width: 100%; margin-top: 0px; text-align: left; display: block;  ">
        <span style="font-size: 13px; width: 100%; text-align: left; display: block;  ">
        Dear Sir/ प्रिय महोदय,
        </span>
        <span style="font-size: 13px; width: 100%; text-align: left; display: block;  ">
        Please remit through NEFT/ RTGS a sum of ₹_____________________________(Rupees in words) ________________________________________________only as per details give below:
        </span>
        <span style="font-size: 13px; width: 100%; text-align: left; display: block;  word-break: break-all;"> कृपया नीचे दिए गए विवरण के  अनुसार ₹ __________________________________  (शब्दों में ₹)_____________________________________________________________________ केवल प्रेषित करे
        </span>
      </div>
      
    </div>
    
  </div>
</div>
 
</body>
</html>
