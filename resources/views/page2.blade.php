<!DOCTYPE html>
<head>
  <style>
    @font-face {
        font-family: 'Hind', sans-serif;
        font-style: normal;
        font-weight: 400;
    }
</style>
<style>
  * { font-family: Noto Sans, sans-serif; }
</style>
  <style type="text/css">
 
    @media print {
    .page2-form {
      page-break-before: always;
    }
  }
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="{{ URL::asset('public/pdf/css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('public/pdf/css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('public/pdf/css/bank-form.webflow.css') }}" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  
  <link href="https://fonts.googleapis.com/css?family=Hind:400,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
</head>
<body class="body">
  <div class="a4-wrapper">
    <div class="page1-form">
      <img src="{{ URL::asset('public/pdf/images/icici_bank_logo_symbol.png') }}" loading="lazy" sizes="150px" alt="" class="image">
      <div class="tittle-form">
        <h1>Application for Funds Transfer through RTGS / NEFT</h1>
        <div class="second-row">
          <div class="form-block w-form">
            <form id="email-form" name="email-form" data-name="Email Form" class="form"><label class="w-checkbox checkbox-field">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label-2 w-form-label">RTGS</span>
              </label><label class="w-checkbox checkbox-field">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label-2 w-form-label">NEFT</span>
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
                <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label-2 hindi w-form-label">आरटीजीएस</span>
              </label><label class="w-checkbox checkbox-field">
                <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label-2 hindi w-form-label">एनईएफटी</span>
              </label></form>
            <div class="w-form-done"></div>
            <div class="w-form-fail"></div>
          </div>
          <div class="text-block hindi">(आरटीजीएस या एनईएफटी  चुनें)</div>
        </div>
      </div>
      <div class="form-body">
        <div class="form-text">To / प्रति, </div>
        <div class="form-text">The Branch Manger / शाखा प्रबंधक</div>
        <div class="form-text">__________________Branch/ शाखा</div>
        <div class="form-text left-aligned">Date/ तारीख: <span class="text-span">D</span> <span class="text-span">D</span> <span class="text-span">M</span> <span class="text-span">M</span> <span class="text-span">Y</span> <span class="text-span">Y</span> <span class="text-span">Y</span> <span class="text-span">Y</span></div>
        <div class="form-text">Dear Sir/ प्रिय महोदय,</div>
        <div class="form-text">Please remit through NEFT/ RTGS a sum of ₹_____________________________(Rupees in words)_________________________________ _______________________________________________________only as per details give below:</div>
        <div class="form-text">कृपया नीचे दिए गए विवरण के  अनुसार ₹ __________________________________  (शब्दों में ₹) _______________________________________   ______________________________ केवल प्रेषित करे</div>
      </div>
      <div class="form-block w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form"><label class="w-checkbox checkbox-field">
            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-inside-form w-form-label">Cash*(only for NEFT) / नकद (केवल एनईएफटी के लिए)*</span>
          </label><label class="w-checkbox checkbox-field">
            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-inside-form w-form-label">Cheque / चेक</span>
          </label><label class="w-checkbox checkbox-field">
            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-inside-form w-form-label">Debit of my/our account (only for NEFT)<br>मेरा/हमारा खाता डेबिट करे (केवल एनईएफटी के  लिये)</span>
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
          <div class="field-tag">Cheque Number / चेक नंबर:</div>
          <div class="letters-row">
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
            <div class="field-letter"> </div>
          </div>
          <div class="cheque-date">Cheque Date / चेक  की तारीख: <span class="text-span">D</span> <span class="text-span">D</span> <span class="text-span">M</span> <span class="text-span">M</span> <span class="text-span">Y</span> <span class="text-span">Y</span> <span class="text-span">Y</span> <span class="text-span">Y</span></div>
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
      <div class="remmiter-details-wrap">
        <div class="text-block-2">DETAILS OF BENEFICIARY / लाभार्थी का विवरण</div>
        <div class="row">
          <div class="field-tag">Beneficiary&#x27;s Name / लाभार्थी का नाम:</div>
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
          <div class="field-tag">Account Number / लाभार्थी का खाता संख्या</div>
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
          <div class="field-tag">Bank Name / लाभार्थी का  बैंक का नाम:</div>
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
          <div class="field-tag">IFSC Code (11-digit) / IFSC कोड:</div>
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
          </div>
        </div>
        <div class="row">
          <div class="field-tag">Branch Address / शाखा का पता:</div>
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
          <div class="field-tag">Confirm Account Number Again /खाता संख्या की फिर से पुष्टि करें:</div>
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
          </div>
          <div class="field-letter"> </div>
          <div class="field-letter"> </div>
          <div class="field-letter"> </div>
        </div>
        <div class="row">
          <div class="field-tag">Remarks (if any) / टिप्पणी (यदि हो):</div>
          <div class="letters-row">
            <div class="form-text underlined">_____________________________________________________________________________</div>
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
    <div class="page2-form" >
      <div class="remmiter-details-wrap">
        <div class="text-block-2">Terms and Conditions / नियम और शर्तें</div>
        <ul role="list" class="list">
          <li>This transfer is required for a single transaction / यह हस्तांतरण केवल लेनदेन के लिए आवश्यक है</li>
          <li>The fund transfer will be governed by the terms and conditions given on our website www.icicibank.com / फंड ट्रांसफर हमारी वेबसाइट www.icicibank.com पर दिए गए नियमों और शर्तों के अनुसार होगा</li>
          <li>I / We authorise ICICI Bank to recover charges as may be applicable by debiting my account as mentioned above / मैं / हम आईसीआईसीआई बैंक को अपने खाते में डेबिट के रूप में उपर्युक्त उल्लिखित शुल्क वसूल कर सकते हैं</li>
          <li>I / We understand that as per the RBI circular dated October 14, 2010, transfer of funds through electronic mode will be executed only on the basisof the account number of the beneficiary provided while initiating the transaction; name will not be considered as a criteria for providing credit./ मैं / हम समझते हैं कि 14 अक्टूबर, 2010 को आरबीआई के परिपत्र के अनुसार, इलेक्ट्रॉनिक मोड के माध्यम से धन के हस्तांतरण को केवल आधार पर निष्पादित किया जाएगा। लेनदेन शुरू करते समय प्रदान की गई लाभार्थी की खाता संख्या; क्रेडिट प्रदान करने के लिए नाम को मानदंड नहीं माना जाएगा</li>
          <li>I understand that this facility is available only at select locations and banks covered under Electronic Funds Transfer facility offered by RBI / मैं समझता हूं कि यह सुविधा केवल RBI द्वारा दी जाने वाली इलेक्ट्रॉनिक फंड ट्रांसफर सुविधा के तहत चुनिंदा स्थानों और बैंकों में उपलब्ध है</li>
          <li>By signing on this RTGS Payment Instruction, the Customer agrees and acknowledges that this RTGS Payment Instruction and the ICICI Bank RTGSFacility is subject to the Terms and Conditions, the Notice and these terms, and requests the execution of these instructions in terms thereof / इस RTGS भुगतान निर्देश पर हस्ताक्षर करने से, ग्राहक सहमत है और स्वीकार करता है कि यह RTGS भुगतान निर्देश और ICICI बैंक RTGS सुविधा नियम और शर्तों, सूचना और इन शर्तों के अधीन है, और इन शर्तों के निष्पादन का अनुरोध करता है</li>
          <li>Terms used but not defined herein shall have the meaning ascribed to them in the Terms and Conditions / यहां उपयोग किए गए लेकिन परिभाषित नहीं किए गए शब्दों का अर्थ उन नियमों और शर्तों के अनुसार होगा जो उन पर अंकित हैं</li>
          <li>The Customer understands that the terms enumerated in this RTGS Payment Instruction are in addition to and not in derogation of the Terms andConditions /ग्राहक समझता है कि इस आरटीजीएस भुगतान निर्देश में गणना की गई शर्तों के अलावा और शर्तों के अपमान में नहीं हैं शर्तेँ</li>
          <li>Subject to ICICI Bank’s right, at its sole discretion, to accept or reject the RTGS Payment Instructions, ICICI Bank shall endeavor to duly execute theseinstructions, except when, inter alia, this RTGS Payment Instruction is incomplete or has been filled in wrongly or the instructions herein cannot beexecuted under the RTGS. An acknowledgement of receipt of this RTGS Payment Instruction shall not be construed as binding ICICI Bank to executethe same, other than in terms of the Terms and Conditions / ICICI बैंक के अधिकार के अधीन, अपने विवेकाधिकार पर, RTGS भुगतान निर्देशों को स्वीकार या अस्वीकार करने के लिए, ICICI बैंक इनका विधिवत निष्पादन करने का प्रयास करेगा निर्देश, जब, अंतर को छोड़कर, यह आरटीजीएस भुगतान निर्देश अधूरा है या गलत तरीके से भरा गया है या इसमें दिए गए निर्देश नहीं हो सकते हैं RTGS के तहत निष्पादित। इस आरटीजीएस भुगतान निर्देश की प्राप्ति की स्वीकृति आईसीआईसीआई बैंक को निष्पादित करने के लिए बाध्यकारी नहीं होगी नियम और शर्तों के संदर्भ में समान, अन्य</li>
          <li>ICICI Bank has not made any warranty and makes no representation about the quality, nature or availability of the ICICI Bank RTGS Facility / आईसीआईसीआई बैंक ने कोई वारंटी नहीं दी है और आईसीआईसीआई बैंक आरटीजीएस सुविधा की गुणवत्ता, प्रकृति या उपलब्धता के बारे में कोई प्रतिनिधित्व नहीं करता है</li>
          <li>ICICI Bank shall have no obligations to any person including any beneficiary (or any person claiming under or through such beneficiary) other than theCustomer for the execution of this RTGS Payment Instruction / ICICI बैंक को इस आरटीजीएस भुगतान निर्देश के निष्पादन के लिए ग्राहक के अलावा  कोई भी लाभार्थी (या ऐसे लाभार्थी के तहत दावा करने वाले) कोई भी व्यक्ति के लिए कोई उत्तरदायित्व नही</li>
          <li>The Customer is hereby notified that there is a risk of non - payment to the beneficiary on the day of the transaction. The same may be for any reasonwhatsoever, including a holiday at the beneficiary&#x27;s branch. ICICI Bank or RBI or any other participant in NEFT / RTGS shall not be liable, in any mannerwhatsoever, to the Customer for any such delay / ग्राहक को यह सूचित किया जाता है कि लेनदेन के दिन लाभार्थी को भुगतान न करने का जोखिम है। वही किसी भी कारण से हो सकता है जो भी हो, लाभार्थी की शाखा में छुट्टी सहित। आईसीआईसीआई बैंक या आरबीआई या एनईएफटी / आरटीजीएस में किसी अन्य प्रतिभागी को किसी भी तरह से उत्तरदायी नहीं बनाया जाएगा जो भी हो, ग्राहक को इस तरह की देरी के लिए</li>
          <li class="list-item">For NEFT: Transfer of an amount up to ₹49,999/- in cash is permissible using this facility. KYC to be provided by non customer. Cheque is mandatoryfor remittance above ₹ 100,000/-. / एनईएफटी के लिए: इस सुविधा का उपयोग करके नकद में ₹49,999 / - तक की राशि का स्थानांतरण अनुमन्य है। गैर ग्राहक द्वारा प्रदान की जाने वाली केवाईसी। जाँच अनिवार्य है ₹100,000 / से ऊपर के प्रेषण के लिए चेक अनिवार्य है</li>
        </ul>
      </div>
      <div class="remmiter-details-wrap">
        <div class="text-block-2">Customer Signature (S) / ग्राहक के हस्ताक्षर</div>
        <div class="w-layout-grid grid-2">
          <div class="signature-placeholder">
            <div class="placeholder">Signature / हस्ताक्षर</div>
          </div>
          <div class="signature-placeholder">
            <div class="placeholder">Signature / हस्ताक्षर</div>
          </div>
          <div class="signature-placeholder">
            <div class="placeholder">Signature / हस्ताक्षर</div>
          </div>
          <div class="signature-name-placeholder">
            <div class="placeholder">Name / नाम</div>
            <div class="line"></div>
            <div class="text-block-4">*(Primary Applicant) / प्राथमिक आवेदक</div>
          </div>
          <div class="signature-name-placeholder">
            <div class="placeholder">Name / नाम</div>
            <div class="line"></div>
            <div class="text-block-4">*(Joint Applicant 1/ संयुक्त आवेदक 1)</div>
          </div>
          <div class="signature-name-placeholder">
            <div class="placeholder">Name / नाम</div>
            <div class="line"></div>
            <div class="text-block-4">*(Joint Applicant 2 / संयुक्त आवेदक 2)</div>
          </div>
        </div>
      </div>
      <div class="remmiter-details-wrap">
        <div class="text-block-2">For Bank Use Only</div>
        <div class="row">
          <div class="field-tag">1. Sign and Employee ID (Maker):</div>
          <div class="letters-row">
            <div class="form-text underlined">_____________________________________________________________________________</div>
          </div>
        </div>
        <div class="row">
          <div class="field-tag">2. Sign and Employee ID (Checker):</div>
          <div class="letters-row">
            <div class="form-text underlined">_____________________________________________________________________________</div>
          </div>
        </div>
        <div class="row">
          <div class="field-tag">3. UTR / PIO Number:</div>
          <div class="letters-row">
            <div class="form-text underlined">_____________________________________________________________________________</div>
          </div>
        </div>
        <div class="row">
          <div class="field-tag">4. Transaction ID:</div>
          <div class="letters-row">
            <div class="form-text underlined">_____________________________________________________________________________</div>
          </div>
        </div>
        <div class="page-cutter-wrap">
          <div class="page-cutter-section">
            <div class="page-cutter"></div>
            <div class="page-cutter dots"></div>
          </div>
          <div class="page-cutter-section">
            <div class="page-cutter"></div>
            <div class="page-cutter dots"></div>
          </div>
          <div class="page-cutter-section">
            <div class="page-cutter"></div>
            <div class="page-cutter dots"></div>
          </div>
          <div class="page-cutter-section">
            <div class="page-cutter"></div>
            <div class="page-cutter dots"></div>
          </div>
          <div class="page-cutter-section">
            <div class="page-cutter"></div>
            <div class="page-cutter dots"></div>
          </div>
          <div class="page-cutter-section">
            <div class="page-cutter"></div>
            <div class="page-cutter dots"></div>
          </div>
          <div class="page-cutter-section">
            <div class="page-cutter"></div>
            <div class="page-cutter dots"></div>
          </div>
          <div class="page-cutter-section">
            <div class="page-cutter"></div>
            <div class="page-cutter dots"></div>
          </div>
          <div class="page-cutter-section">
            <div class="page-cutter"></div>
            <div class="page-cutter dots"></div>
          </div>
          <div class="page-cutter-section">
            <div class="page-cutter"></div>
            <div class="page-cutter dots"></div>
          </div>
        </div>
      </div>
      <div class="remmiter-details-wrap">
        <div class="text-block-2">Customer Acknowledgement / ग्राहक की रसीद</div>
        <div class="row">
          <div class="field-tag acknoledgments">Customer name / ग्राहक का नाम         </div>
          <div class="letters-row">
            <div class="form-text underlined">___________________________________________</div>
          </div>
          <div class="cheque-date">Date/ तारीख: <span class="text-span">D</span> <span class="text-span">D</span> <span class="text-span">M</span> <span class="text-span">M</span> <span class="text-span">Y</span> <span class="text-span">Y</span> <span class="text-span">Y</span> <span class="text-span">Y</span></div>
        </div>
        <div class="row acknoledgments">
          <div class="wrapper">
            <div class="field-tag acknoledgments">Beneficiary name /लाभार्थी का नाम</div>
            <div class="form-text underlined">________________________________</div>
          </div>
          <div class="wrapper">
            <div class="field-tag acknoledgments">Mode of payment /भुगतान का प्रकार</div>
            <div class="form-text underlined">____________________________________</div>
          </div>
        </div>
        <div class="row acknoledgments">
          <div class="wrapper">
            <div class="field-tag acknoledgments">Beneficiary bank name / लाभार्थी के बैंक का नाम</div>
            <div class="form-text underlined">________________________________</div>
          </div>
          <div class="wrapper">
            <div class="field-tag acknoledgments">Beneficiary account number / लाभार्थी का खाता संख्या</div>
            <div class="form-text underlined">____________________________________</div>
          </div>
        </div>
        <div class="row acknoledgments">
          <div class="wrapper">
            <div class="field-tag acknoledgments">Transaction reference number / संदर्भ संख्या</div>
            <div class="form-text underlined">____________________________________</div>
          </div>
          <div class="wrapper">
            <div class="field-tag acknoledgments">Amount / रकम:</div>
            <div class="form-text underlined">____________________________________</div>
          </div>
        </div>
        <div class="row acknoledgments">
          <div class="wrapper">
            <div class="field-tag acknoledgments">Name and signature of Bank official / बैंक अधिकारी का नाम और हस्ताक्षर</div>
            <div class="form-text underlined">_____________________________________________________________________</div>
          </div>
          <div class="wrapper"><img src="images/Bank-Seal.png" loading="lazy" alt="" class="image-2"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>