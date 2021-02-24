<?php

$data_check = str_split($data->cheque_number);
$data_account = str_split($data->account_number);
$data_address= str_split($data->address);
$data_name = str_split($data->name);
$bank_name = str_split($data->bank_name);
$ifsc_code  = str_split($data->ifsc);
$remark   = str_split($data->remarks);
$mobile_number   = str_split($data->mobile_number);
$date = str_split(date('dmY', strtotime($data->transaction_date)));
$amount_word = number_to_word($data->amount);
           

?>
<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri Feb 05 2021 15:08:21 GMT+0000 (Coordinated Universal Time)  -->

<head>
  <link rel="stylesheet" href="{{ URL::asset('public/assets/css/webflow.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('public/assets/css/bank-form.webflow.css') }}">  
  <style type="text/css">
    .field-letter{
          text-align: center;
    line-height: 1.2;
    }
  </style>
</head>
<body class="body" id="sdsds">
  <div class="a4-wrapper" >
    <div class="page1-form"><img src="{{ URL::asset('public/assets/media/icici/icici_bank_logo_symbol.png') }}" loading="lazy" sizes="150px" srcset="{{ URL::asset('public/assets/media/icici/icici_bank_logo_symbol-p-500.png') }} 500w, {{ URL::asset('public/assets/media/icici/icici_bank_logo_symbol-p-800.png') }} 800w, {{ URL::asset('public/assets/media/icici/icici_bank_logo_symbol-p-1080.png') }} 1080w, {{ URL::asset('public/assets/media/icici/icici_bank_logo_symbol-p-1600.png') }} 1600w, {{ URL::asset('public/assets/media/icici/icici_bank_logo_symbol-p-2000.png') }} 2000w, {{ URL::asset('public/assets/media/icici/icici_bank_logo_symbol-p-2600.png') }} 2600w, {{ URL::asset('public/assets/media/icici/icici_bank_logo_symbol-p-3200w.png') }} 3200w, {{ URL::asset('public/assets/media/icici/icici_bank_logo_symbol') }} 3400w" alt="" class="image">
      <div class="tittle-form">
        <h1>Application for Funds Transfer through RTGS / NEFT</h1>
        <div class="second-row">
          <div class="form-block w-form">
            <form id="email-form" name="email-form" data-name="Email Form" class="form"><label class="w-checkbox checkbox-field">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox @if($data->transaction_method == 'rtgs') w--redirected-checked @endif "></div><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label-2 w-form-label">RTGS</span>
              </label><label class="w-checkbox checkbox-field">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox @if($data->transaction_method == 'neft') w--redirected-checked @endif" ></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label-2 w-form-label">NEFT</span>
              </label></form>
            <div class="w-form-done"></div>
            <div class="w-form-fail"></div>
          </div>
          <div class="text-block">(Select RTGS or NEFT as remittance type)</div>
        </div>
        <h1 class="hindi">आरटीजीएस / एनईएफटी मा RTGS / NEFT के माध्यम से फंड ट्रांसफर के लिए आवेदन</h1>
        <div class="second-row hindi">
          <div class="form-block w-form">
            <form id="email-form" name="email-form" data-name="Email Form" class="form"><label class="w-checkbox checkbox-field">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox @if($data->transaction_method == 'rtgs') w--redirected-checked @endif"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label-2 hindi w-form-label">आरटीजीएस</span>
              </label><label class="w-checkbox checkbox-field">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox @if($data->transaction_method == 'neft') w--redirected-checked @endif"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label-2 hindi w-form-label">एनईएफटी</span>
              </label></form>
            <div class="w-form-done"></div>
            <div class="w-form-fail"></div>
          </div>
          <div class="text-block hindi">(आरटीजीएस या एनईएफटी  चुनें)</div>
        </div>
      </div>
      <div class="form-body">
        <div class="form-text">To / प्रति, </div>
        <div class="form-text">The Branch Manger / शाखा प्रबंधक</div>
        <div class="form-text" style=""><span style="    border-bottom: 1px solid;"> {{$data->branch_name}}</span>  Branch/ शाखा</div>
        <div class="form-text left-aligned">Date/ तारीख: 


            @foreach($date as $key => $val)
             <span class="text-span">{{$val}}</span>
            @endforeach
          </div>
        <div class="form-text">Dear Sir/ प्रिय महोदय,</div>
        <div class="form-text">Please remit through NEFT/ RTGS a sum of <span style='margin-right:.3em; border: none; border-color: transparent; pointer-events:none;text-decoration: underline;' > ₹{{$data->amount}} </span> (Rupees in words)  <span style="    border-bottom: 1px solid;">{{ $amount_word }}</span> _______________________________________________________only as per details give below:</div>
        <div class="form-text">कृपया नीचे दिए गए विवरण के  अनुसार ₹ __________________________________  (शब्दों में ₹) _______________________________________   ______________________________ केवल प्रेषित करे</div>
      </div>
      <div class="form-block w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form"><label class="w-checkbox checkbox-field">
            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-inside-form w-form-label">Cash*(only for NEFT) / नकद (केवल एनईएफटी के लिए)*</span>
          </label><label class="w-checkbox checkbox-field">
            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-inside-form w-form-label">Cheque / चेक</span>
          </label><label class="w-checkbox checkbox-field">
            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-inside-form w-form-label">Debit of my/our account (only for NEFT)<br>मेरा/हमारा खाता डेबिट करे (केवल एनईएफटी के  लिये)</span>
          </label></form>
        <div class="w-form-done"></div>
        <div class="w-form-fail"></div>
      </div>
      <div class="form-text">*In case of cash please fill in the pay-in-slip / कैश के मामले में कृपया पे-इन-स्लिप भरें</div>
      <div class="form-text bold">*To be filled by the Applicant in CAPITAL LETTERS / कैपिटल लेटर में आवेदक द्वारा भरा जाना</div>
      <div class="remmiter-details-wrap">
        <div class="text-block-2">DETAILS OF APPLICANT (REMITTER) / आवेदन का विवरण</div>
        <div class="row">
          <div class="field-tag">Account Number / खाता संख्या : </div>
          <div class="letters-row">

            @foreach($data_account as $key => $val)
            <div class="field-letter"> {{ $val }}</div>
            @endforeach
          </div>
        </div>
        <div class="row">
          <div class="field-tag">Cheque Number / चेक नंबर:</div>
          <div class="letters-row">
          
            @foreach($data_check as $keya => $vala)
            <div class="field-letter"> {{ $vala  }}</div>
            @endforeach
            
          </div>
          <div class="cheque-date">Cheque Date / चेक  की तारीख: <span class="text-span">D</span> <span class="text-span">D</span> <span class="text-span">M</span> <span class="text-span">M</span> <span class="text-span">Y</span> <span class="text-span">Y</span> <span class="text-span">Y</span> <span class="text-span">Y</span></div>
        </div>
        <div class="row">
          <div class="field-tag">Remitter&#x27;s Name / आवेदक का नाम:</div>
          <div class="letters-row">
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
          </div>
        </div>
        <div class="row">
          <div class="field-tag">Address / पता:</div>
          <div class="letters-container">
            <div class="letters-row padding">
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
            </div>
            <div class="letters-row">
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="field-tag">Mobile / Other Number / मोबाइल / अन्य नंबर:</div>
          <div class="letters-row">
           @foreach($mobile_number as $key => $val)
            <div class="field-letter"> {{ $val }}</div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="remmiter-details-wrap">
        <div class="text-block-2">DETAILS OF BENEFICIARY / लाभार्थी का विवरण</div>
        <div class="row">
          <div class="field-tag">Beneficiary&#x27;s Name / लाभार्थी का नाम:</div>
          <div class="letters-row">
           @foreach($data_name as $key => $val)
            <div class="field-letter"> {{ $val }}</div>
            @endforeach
          </div>
        </div>
        <div class="row">
          <div class="field-tag">Account Number / लाभार्थी का खाता संख्या</div>
          <div class="letters-container">
            <div class="letters-row padding">
           @foreach($data_account as $key => $val)
            <div class="field-letter"> {{ $val }}</div>
            @endforeach
            </div>
            <div class="letters-row">
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
              <div class="field-letter"> </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="field-tag">Bank Name / लाभार्थी का  बैंक का नाम:</div>
          <div class="letters-row">
            @foreach($bank_name as $key => $val)
            <div class="field-letter"> {{ $val }}</div>
            @endforeach
          </div>
        </div>
        <div class="row">
          <div class="field-tag">IFSC Code (11-digit) / IFSC कोड:</div>
          <div class="letters-row">
            @foreach($ifsc_code as $key => $val)
            <div class="field-letter"> {{ $val }}</div>
            @endforeach

          </div>
        </div>
        <div class="row">
          <div class="field-tag">Branch Address / शाखा का पता:</div>
          <div class="letters-row">
            
            @foreach($data_address as $key => $val)
            <div class="field-letter"> {{ $val }}</div>
            @endforeach

          </div>
        </div>
        <div class="row">
          <div class="field-tag">Confirm Account Number Again /खाता संख्या की फिर से पुष्टि करें:</div>
          <div class="letters-row">
           
            @foreach($data_account as $key => $val)
            <div class="field-letter"> {{ $val }}</div>
            @endforeach
          </div>
          <div class="field-letter"> </div>
          <div class="field-letter"> </div>
          <div class="field-letter"> </div>
        </div>
        <div class="row">
          <div class="field-tag">Remarks (if any) / टिप्पणी (यदि हो):</div>
          <div class="letters-row">
            
            <div class="form-text underlined"> {{ $data->address  }}</div>
          </div>
        </div>
      </div>
      <div class="remmiter-details-wrap">
        <div class="text-block-2">PURPOSE CODE FOR RTGS / आरटीजीएस के लिए पूर्ण कोड</div>
        <div class="w-layout-grid grid">
          <div class="columns">
            <div class="div-block">
              <div id="w-node-TextBlock 5-ed6c9f6f" class="text-block-3">CASH</div>
              <div id="w-node-c62c300b7c9a-ed6c9f6f" class="text-block-3 right-border-only">Cash Management Transfer/नकद प्रबंधन हस्तांतरण</div>
            </div>
            <div class="div-block">
              <div id="w-node-2189935de205-ed6c9f6f" class="text-block-3">INTE</div>
              <div id="w-node-2189935de207-ed6c9f6f" class="text-block-3 right-border-only">Interest / ब्याज</div>
            </div>
            <div class="div-block">
              <div id="w-node-ac4a957049d9-ed6c9f6f" class="text-block-3">SUPP</div>
              <div id="w-node-ac4a957049db-ed6c9f6f" class="text-block-3 last-block">Supplier Payment / प्रदाकय भुगतान </div>
            </div>
          </div>
          <div class="columns">
            <div class="div-block">
              <div id="w-node-72014fea84ed-ed6c9f6f" class="text-block-3">CORT</div>
              <div id="w-node-72014fea84ef-ed6c9f6f" class="text-block-3 right-border-only">Trade Settlement Payment / व्यापार निपटान भुगतान</div>
            </div>
            <div class="div-block">
              <div id="w-node-72014fea84f2-ed6c9f6f" class="text-block-3">LOAN</div>
              <div id="w-node-72014fea84f4-ed6c9f6f" class="text-block-3 right-border-only">Loan / ऋण</div>
            </div>
            <div class="div-block">
              <div id="w-node-72014fea84f7-ed6c9f6f" class="text-block-3">TAXS</div>
              <div id="w-node-72014fea84f9-ed6c9f6f" class="text-block-3 last-block">Tax Payment/ कर भुगतान</div>
            </div>
          </div>
          <div class="columns">
            <div class="div-block">
              <div id="w-node-3b7fd79223bc-ed6c9f6f" class="text-block-3">DIVI</div>
              <div id="w-node-3b7fd79223be-ed6c9f6f" class="text-block-3 right-border-only">Dividend / लाभांश</div>
            </div>
            <div class="div-block">
              <div id="w-node-3b7fd79223c1-ed6c9f6f" class="text-block-3">PENS</div>
              <div id="w-node-3b7fd79223c3-ed6c9f6f" class="text-block-3 right-border-only">Pension Payment / पेंशन भुगतान</div>
            </div>
            <div class="div-block">
              <div id="w-node-3b7fd79223c6-ed6c9f6f" class="text-block-3">TRAD</div>
              <div id="w-node-3b7fd79223c8-ed6c9f6f" class="text-block-3 last-block">Trade /व्यापार</div>
            </div>
          </div>
          <div class="columns">
            <div class="div-block">
              <div id="w-node-2c06491a0d1b-ed6c9f6f" class="text-block-3">GOVT</div>
              <div id="w-node-2c06491a0d1d-ed6c9f6f" class="text-block-3 right-border-only">Government Payment /सरकारी भुगतान</div>
            </div>
            <div class="div-block">
              <div id="w-node-2c06491a0d20-ed6c9f6f" class="text-block-3">SALA</div>
              <div id="w-node-2c06491a0d22-ed6c9f6f" class="text-block-3 right-border-only">Salary Payment / तनख्वाह का भुगतान</div>
            </div>
            <div class="div-block">
              <div id="w-node-2c06491a0d25-ed6c9f6f" class="text-block-3">TREA</div>
              <div id="w-node-2c06491a0d27-ed6c9f6f" class="text-block-3 last-block">Treasury Payment / ट्रेजरी भुगतान</div>
            </div>
          </div>
          <div class="columns">
            <div class="div-block">
              <div id="w-node-cc2ff3fec68d-ed6c9f6f" class="text-block-3">HEDG</div>
              <div id="w-node-cc2ff3fec68f-ed6c9f6f" class="text-block-3 right-border-only">Hedging / हेजिंग</div>
            </div>
            <div class="div-block">
              <div id="w-node-cc2ff3fec692-ed6c9f6f" class="text-block-3">SECU</div>
              <div id="w-node-cc2ff3fec694-ed6c9f6f" class="text-block-3 right-border-only">Securities / सिक्योरिटीज</div>
            </div>
            <div class="div-block">
              <div id="w-node-cc2ff3fec697-ed6c9f6f" class="text-block-3">VATX</div>
              <div id="w-node-cc2ff3fec699-ed6c9f6f" class="text-block-3 last-block">Value Added Tax Payment /मूल्य वर्धित कर भुगतान</div>
            </div>
          </div>
          <div class="columns">
            <div class="div-block">
              <div id="w-node-49ef46cea80c-ed6c9f6f" class="text-block-3">INTC</div>
              <div id="w-node-49ef46cea80e-ed6c9f6f" class="text-block-3 right-border-only">Intra Company Payment / इंट्रा कंपनी भुगतान</div>
            </div>
            <div class="div-block">
              <div id="w-node-49ef46cea811-ed6c9f6f" class="text-block-3">SSBE</div>
              <div id="w-node-49ef46cea813-ed6c9f6f" class="text-block-3 right-border-only">Social Security Benefit /सामाजिक सुरक्षा लाभ</div>
            </div>
            <div class="div-block">
              <div id="w-node-49ef46cea816-ed6c9f6f" class="text-block-3">WHLD</div>
              <div id="w-node-49ef46cea818-ed6c9f6f" class="text-block-3 last-block">With Holding / रोक</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>

<script type="text/javascript">
  var prtContent = document.getElementById("sdsds");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
</script>