<div class="content-wrapper">
                    <div class="content">

		<!--
// Copyright (c) 2015 All Right Reserved, https://web-school.in
//
// This source is subject to the Gescis License.
// All other rights reserved.
//
// THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
// KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
// IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
// PARTICULAR PURPOSE.

@(#)Project:        					Webschool
@(#)Version:        					v3.0
@(#)Initial Development Completion:                     Date: 10/06/2015
@(#)Developers:     					 Arya K Nair,Reshma R Pillai
@(#)Copyright:      					(C) Gescis Technologies, Technopark
@(#)Product:        					Webschool ERP.
@(#)Template:        					Multiple templates developed by Gescis.
-->
<div class="page-header">
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="#"><i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="#">Settings</a></li>
            <li class="active">Institution Details</li>
        </ul>
        <ul class="breadcrumb-elements">
            <li><a href="/usermanual"><i class="icon-comment-discussion position-left"></i> Support</a></li>
        </ul>
        <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div>
<div class="content">
    <h6 class="content-group text-semibold"></h6>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">Institution Details</h6>
                                        <div class="panel-body">
                                                    <div class="row">
                                <div class="col-lg-9">
                                    <div class="panel panel-flat">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">Profile information</h6>
                                            <div class="heading-elements">
                                                <ul class="icons-list">
                                                    <li><a data-action="collapse"></a></li>
                                                    <li><a data-action="reload"></a></li>
                                                </ul>
                                            </div>
                                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a>
                                        <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
                                        <div class="panel-body">
                                            <form enctype="multipart/form-data" id="institution-form" action="/index.php/core/institution/update/id/1" method="post"> 
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="reg_input_name" class="req">Institution Name </label>
                                                        <input size="60" maxlength="256" class="form-control" name="Institution[institution_name]" id="Institution_institution_name" type="text" value="Demo School"><div class="school_val_error" id="Institution_institution_name_em_" style="display:none"></div>                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="reg_input_name" class="req">Institution Address</label>
                                                        <textarea class="form-control" name="Institution[institution_address]" id="Institution_institution_address">DELHI ROAD, REWARI-123401</textarea><div class="school_val_error" id="Institution_institution_address_em_" style="display:none"></div>                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="reg_input_currency" class="req">Institution Email</label>
                                                        <input size="60" maxlength="256" class="form-control" name="Institution[institution_contactemail]" id="Institution_institution_contactemail" type="text" value="demo@gmail.com"><div class="school_val_error" id="Institution_institution_contactemail_em_" style="display:none"></div>                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="reg_input_currency" class="req">Institution Phone</label>
                                                        <input size="60" maxlength="256" class="form-control" name="Institution[institution_phone]" id="Institution_institution_phone" type="text" value="123456767899"><div class="school_val_error" id="Institution_institution_phone_em_" style="display:none"></div>                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="reg_input_currency" class="req">Institution Mobile</label>
                                                        <input size="60" maxlength="256" class="form-control" name="Institution[institution_mobile]" id="Institution_institution_mobile" type="text" value="09585643"><div class="school_val_error" id="Institution_institution_mobile_em_" style="display:none"></div>                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="reg_input_currency" class="req">Institution Fax</label>
                                                        <input size="60" maxlength="256" class="form-control" name="Institution[institution_fax]" id="Institution_institution_fax" type="text" value="2342134"><div class="school_val_error" id="Institution_institution_fax_em_" style="display:none"></div>                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="reg_input_currency" class="req">Admin Contact Person</label>
                                                        <input size="60" maxlength="256" class="form-control" name="Institution[institution_contactperson]" id="Institution_institution_contactperson" type="text" value="Mr.Demo "><div class="school_val_error" id="Institution_institution_contactperson_em_" style="display:none"></div>                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="Country" class="req">Country</label>
                                                        <input prompt="Please select" class="form-control" name="Institution[institution_country]" id="Institution_institution_country" type="text" maxlength="45" value="India"><div class="school_val_error" id="Institution_institution_country_em_" style="display:none"></div>                                                    </div>
                                                    <div class="col-md-4">
                                                                                                                <label for="reg_input_currency" class="req">Currency Type</label>
                                                        <select id="sh_currency" name="sh_currency" class="form-control" data-required="true">
                                                            <option>Please Select</option>
                                                            <option value="AFN">AFN</option>
                                                            <option value="ALL">ALL</option>
                                                            <option value="DZD">DZD</option>
                                                            <option value="USD">USD</option>
                                                            <option value="EUR">EUR</option>
                                                            <option value="AOA">AOA</option>
                                                            <option value="XCD">XCD</option>
                                                            <option value="XCD">XCD</option>
                                                            <option value="ARP">ARP</option>
                                                            <option value="AMD">AMD</option>
                                                            <option value="AWG">AWG</option>
                                                            <option value="AUD">AUD</option>
                                                            <option value="EUR">EUR</option>
                                                            <option value="AZN">AZN</option>
                                                            <option value="BSD">BSD</option>
                                                            <option value="BHD">BHD</option>
                                                            <option value="BDT">BDT</option>
                                                            <option value="BBD">BBD</option>
                                                            <option value="BYR">BYR</option>
                                                            <option value="EUR">EUR</option>
                                                            <option value="BZD">BZD</option>
                                                            <option value="XOF">XOF</option>
                                                            <option value="BMD">BMD</option>
                                                            <option value="BTN">BTN</option>
                                                            <option value="BOV">BOV</option>
                                                            <option value="BAM">BAM</option>
                                                            <option value="BWP">BWP</option>
                                                            <option value="NOK">NOK</option>
                                                            <option value="BRL">BRL</option>
                                                            <option value="USD">USD</option>
                                                            <option value="BND">BND</option>
                                                            <option value="BGL">BGL</option>
                                                            <option value="XOF">XOF</option>
                                                            <option value="BIF">BIF</option>
                                                            <option value="KHR">KHR</option>
                                                            <option value="XAF">XAF</option>
                                                            <option value="CAD">CAD</option>
                                                            <option value="CVE">CVE</option>
                                                            <option value="KYD">KYD</option>
                                                            <option value="XAF">XAF</option>
                                                            <option value="XAF">XAF</option>
                                                            <option value="CLF">CLF</option>
                                                            <option value="CNY">CNY</option>
                                                            <option value="AUD">AUD</option>
                                                            <option value="AUD">AUD</option>
                                                            <option value="COU">COU</option>
                                                            <option value="KMF">KMF</option>
                                                            <option value="XAF">XAF</option>
                                                            <option value="CDF">CDF</option>
                                                            <option value="NZD">NZD</option>
                                                            <option value="CRC">CRC</option>
                                                            <option value="HRK">HRK</option>
                                                            <option value="CUP">CUP</option>
                                                            <option value="EUR">EUR</option>
                                                            <option value="CZK">CZK</option>
                                                            <option value="CSJ">CSJ</option>
                                                            <option value="XOF">XOF</option>
                                                            <option value="DKK">DKK</option>
                                                            <option value="DJF">DJF</option>
                                                            <option value="XCD">XCD</option>
                                                            <option value="DOP">DOP</option>
                                                            <option value="USD">USD</option>
                                                            <option value="EGP">EGP</option>
                                                            <option value="USD">USD</option>
                                                            <option value="EQE">EQE</option>
                                                            <option value="ERN">ERN</option>
                                                            <option value="EEK">EEK</option>
                                                            <option value="ETB">ETB</option>
                                                            <option value="FKP">FKP</option>
                                                            <option value="DKK">DKK</option>
                                                            <option value="FJD">FJD</option>
                                                            <option value="FIM">FIM</option>
                                                            <option value="XFO">XFO</option>
                                                            <option value="EUR">EUR</option>
                                                            <option value="XPF">XPF</option>
                                                            <option value="EUR">EUR</option>
                                                            <option value="XAF">XAF</option>
                                                            <option value="GMD">GMD</option>
                                                            <option value="GEL">GEL</option>
                                                            <option value="DDM">DDM</option>
                                                            <option value="EUR">EUR</option>
                                                            <option value="GHC">GHC</option>
                                                            <option value="GIP">GIP</option>
                                                            <option value="GRD">GRD</option>
                                                            <option value="DKK">DKK</option>
                                                            <option value="XCD">XCD</option>
                                                            <option value="EUR">EUR</option>
                                                            <option value="USD">USD</option>
                                                            <option value="GTQ">GTQ</option>
                                                            <option value="GNE">GNE</option>
                                                            <option value="GWP">GWP</option>
                                                            <option value="GYD">GYD</option>
                                                            <option value="USD">USD</option>
                                                            <option value="AUD">AUD</option>
                                                            <option value="EUR">EUR</option>
                                                            <option value="HNL">HNL</option>
                                                            <option value="HKD">HKD</option>
                                                            <option value="HUF">HUF</option>
                                                            <option value="ISJ">ISJ</option>
                                                            <option value="INR" selected="selected">INR</option>
                                                            <option value="IDR">IDR</option>
                                                            <option value="IRR">IRR</option>
                                                            <option value="IQD">IQD</option>
                                                            <option value="IEP">IEP</option>
                                                            <option value="ILS">ILS</option>
                                                            <option value="ITL">ITL</option>
                                                            <option value="JMD">JMD</option>
                                                            <option value="JPY">JPY</option>
                                                            <option value="JOD">JOD</option>
                                                            <option value="KZT">KZT</option>
                                                            <option value="KES">KES</option>
                                                            <option value="AUD">AUD</option>
                                                            <option value="KPW">KPW</option>
                                                            <option value="KRW">KRW</option>
                                                            <option value="KWD">KWD</option>
                                                            <option value="KGS">KGS</option>
                                                            <option value="LAJ">LAJ</option>
                                                            <option value="LVL">LVL</option>
                                                            <option value="LBP">LBP</option>
                                                            <option value="ZAR">ZAR</option>
                                                            <option value="LRD">LRD</option>
                                                            <option value="LYD">LYD</option>
                                                            <option value="CHF">CHF</option>
                                                            <option value="LTL">LTL</option>
                                                            <option value="LUF">LUF</option>
                                                            <option value="MOP">MOP</option>
                                                            <option value="MKN">MKN</option>
                                                            <option value="MGF">MGF</option>
                                                            <option value="MWK">MWK</option>
                                                            <option value="MYR">MYR</option>
                                                            <option value="MVR">MVR</option>
                                                            <option value="MAF">MAF</option>
                                                            <option value="MTL">MTL</option>
                                                            <option value="USD">USD</option>
                                                            <option value="EUR">EUR</option>
                                                            <option value="MRO">MRO</option>
                                                            <option value="MUR">MUR</option>
                                                            <option value="EUR">EUR</option>
                                                            <option value="MXV">MXV</option>
                                                            <option value="USD">USD</option>
                                                            <option value="MDL">MDL</option>
                                                            <option value="MCF">MCF</option>
                                                            <option value="MNT">MNT</option>
                                                            <option value="EUR">EUR</option>
                                                            <option value="XCD">XCD</option>
                                                            <option value="MAD">MAD</option>
                                                            <option value="MZM">MZM</option>
                                                            <option value="MMK">MMK</option>
                                                            <option value="ZAR">ZAR</option>
                                                            <option value="AUD">AUD</option>
                                                            <option value="NPR">NPR</option>
                                                            <option value="NLG">NLG</option>
                                                            <option value="ANG">ANG</option>
                                                            <option value="XPF">XPF</option>
                                                            <option value="NZD">NZD</option>
                                                            <option value="NIO">NIO</option>
                                                            <option value="XOF">XOF</option>
                                                            <option value="NGN">NGN</option>
                                                            <option value="NZD">NZD</option>
                                                            <option value="AUD">AUD</option>
                                                            <option value="USD">USD</option>
                                                            <option value="NOK">NOK</option>
                                                            <option value="OMR">OMR</option>
                                                            <option value="PKR">PKR</option>
                                                            <option value="USD">USD</option>
                                                            <option value="USD">USD</option>
                                                            <option value="PGK">PGK</option>
                                                            <option value="PYG">PYG</option>
                                                            <option value="YDD">YDD</option>
                                                            <option value="PEH">PEH</option>
                                                            <option value="PHP">PHP</option>
                                                            <option value="NZD">NZD</option>
                                                            <option value="PLN">PLN</option>
                                                            <option value="TPE">TPE</option>
                                                            <option value="USD">USD</option>
                                                            <option value="QAR">QAR</option>
                                                            <option value="ROK">ROK</option>
                                                            <option value="RUB">RUB</option>
                                                            <option value="RWF">RWF</option>
                                                            <option value="EUR">EUR</option>
                                                            <option value="SHP">SHP</option>
                                                            <option value="XCD">XCD</option>
                                                            <option value="XCD">XCD</option>
                                                            <option value="EUR">EUR</option>
                                                            <option value="XCD">XCD</option>
                                                            <option value="WST">WST</option>
                                                            <option value="EUR">EUR</option>
                                                            <option value="STD">STD</option>
                                                            <option value="SAR">SAR</option>
                                                            <option value="XOF">XOF</option>
                                                            <option value="CSD">CSD</option>
                                                            <option value="SCR">SCR</option>
                                                            <option value="SLL">SLL</option>
                                                            <option value="SGD">SGD</option>
                                                            <option value="SKK">SKK</option>
                                                            <option value="SIT">SIT</option>
                                                            <option value="SBD">SBD</option>
                                                            <option value="SOS">SOS</option>
                                                            <option value="ZAL">ZAL</option>
                                                            <option value="ESB">ESB</option>
                                                            <option value="LKR">LKR</option>
                                                            <option value="SDG">SDG</option>
                                                            <option value="SRG">SRG</option>
                                                            <option value="NOK">NOK</option>
                                                            <option value="SZL">SZL</option>
                                                            <option value="SEK">SEK</option>
                                                            <option value="CHW">CHW</option>
                                                            <option value="SYP">SYP</option>
                                                            <option value="TWD">TWD</option>
                                                            <option value="TJR">TJR</option>
                                                            <option value="TZS">TZS</option>
                                                            <option value="THB">THB</option>
                                                            <option value="USD">USD</option>
                                                            <option value="XOF">XOF</option>
                                                            <option value="NZD">NZD</option>
                                                            <option value="TOP">TOP</option>
                                                            <option value="TTD">TTD</option>
                                                            <option value="TND">TND</option>
                                                            <option value="TRL">TRL</option>
                                                            <option value="TMM">TMM</option>
                                                            <option value="USD">USD</option>
                                                            <option value="AUD">AUD</option>
                                                            <option value="SUR">SUR</option>
                                                            <option value="UGS">UGS</option>
                                                            <option value="UAK">UAK</option>
                                                            <option value="AED">AED</option>
                                                            <option value="GBP">GBP</option>
                                                            <option value="USS">USS</option>
                                                            <option value="USD">USD</option>
                                                            <option value="UYI">UYI</option>
                                                            <option value="UZS">UZS</option>
                                                            <option value="VUV">VUV</option>
                                                            <option value="VEB">VEB</option>
                                                            <option value="VNC">VNC</option>
                                                            <option value="USD">USD</option>
                                                            <option value="USD">USD</option>
                                                            <option value="XPF">XPF</option>
                                                            <option value="MAD">MAD</option>
                                                            <option value="YER">YER</option>
                                                            <option value="YUM">YUM</option>
                                                            <option value="ZRZ">ZRZ</option>
                                                            <option value="ZMK">ZMK</option>
                                                            <option value="ZWC">ZWC</option>


                                                        </select> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="Language">Language</label>
                                                        <input size="60" maxlength="256" class="form-control" readonly="" value="English" name="Institution[institution_language]" id="Institution_institution_language" type="text"><div class="school_val_error" id="Institution_institution_language_em_" style="display:none"></div>                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="Language">Institution code(This code will be used as the prefix for student admission number)</label>
                                                        <input id="ytInstitution_isautogeneration" type="hidden" value="0" name="Institution[isautogeneration]"><input checked="checked" name="Institution[isautogeneration]" id="Institution_isautogeneration" value="1" type="checkbox">                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="reg_input_currency" class="req">Institution Code</label>
                                                        <input size="60" maxlength="256" class="form-control" name="Institution[institution_code]" id="Institution_institution_code" type="text" value="DEM"><div class="school_val_error" id="Institution_institution_code_em_" style="display:none"></div>                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="Timezone" class="req">Timezone</label>
                                                        <select class="form-control" name="Institution[institution_timezone]" id="Institution_institution_timezone">
<option value="">Select</option>
<option value="European Central Time(ECT) - GMT+01:00">European Central Time(ECT) - GMT+01:00</option>
<option value="Indiana Eastern Standard Time(IET) - GMT-05:00">Indiana Eastern Standard Time(IET) - GMT-05:00</option>
<option value="Indian Standard Time(IST) - GMT+05:30" selected="selected">Indian Standard Time(IST) - GMT+05:30</option>
<option value="Eastern European Time(EET) - GMT+02:00">Eastern European Time(EET) - GMT+02:00</option>
<option value="Arabic Standard Time(ART) - GMT+02:00">Arabic Standard Time(ART) - GMT+02:00</option>
<option value="Eastern African Time(EAT) - GMT+03:00">Eastern African Time(EAT) - GMT+03:00</option>
<option value="Middle East Time(MET) - GMT+03:30">Middle East Time(MET) - GMT+03:30</option>
<option value="Near East Time(NET) - GMT+04:00">Near East Time(NET) - GMT+04:00</option>
<option value="Pakistan Lahore Time(PLT) - GMT+05:00">Pakistan Lahore Time(PLT) - GMT+05:00</option>
<option value="Bangladesh Standard Time(BST) - GMT+06:00">Bangladesh Standard Time(BST) - GMT+06:00</option>
<option value="Vietnam Standard Time(VST) - GMT+07:00">Vietnam Standard Time(VST) - GMT+07:00</option>
<option value="China Taiwan Time(CTT) - GMT+08:00">China Taiwan Time(CTT) - GMT+08:00</option>
<option value="Japan Standard Time(JST) - GMT+09:00">Japan Standard Time(JST) - GMT+09:00</option>
<option value="Australia Central Time(ACT) - GMT+09:30">Australia Central Time(ACT) - GMT+09:30</option>
<option value="Australia Eastern Time(AET) - GMT+10:00">Australia Eastern Time(AET) - GMT+10:00</option>
<option value="Solomon Standard Time(SST) - GMT+11:00">Solomon Standard Time(SST) - GMT+11:00</option>
<option value="New Zealand Standard Time(NST) - GMT+12:00">New Zealand Standard Time(NST) - GMT+12:00</option>
<option value="Midway Islands Time(MIT) - GMT-11:00">Midway Islands Time(MIT) - GMT-11:00</option>
<option value="Hawaii Standard Time(HST) - GMT-10:00">Hawaii Standard Time(HST) - GMT-10:00</option>
<option value="Alaska Standard Time(AST) - GMT-09:00">Alaska Standard Time(AST) - GMT-09:00</option>
<option value="Pacific Standard Time(PST) - GMT-08:00">Pacific Standard Time(PST) - GMT-08:00</option>
<option value="Phoenix Standard Time(PNT) - GMT-07:00">Phoenix Standard Time(PNT) - GMT-07:00</option>
<option value="Mountain Standard Time(MST) - GMT-07:00">Mountain Standard Time(MST) - GMT-07:00</option>
<option value="Central Standard Time(CST) - GMT-06:00">Central Standard Time(CST) - GMT-06:00</option>
<option value="Eastern Standard Time(EST) - GMT-05:00">Eastern Standard Time(EST) - GMT-05:00</option>
<option value="Puerto Rico and US Virgin Islands Time(PRT) - GMT-04:00">Puerto Rico and US Virgin Islands Time(PRT) - GMT-04:00</option>
<option value="Canada Newfoundland Time(CNT) - GMT-03:30">Canada Newfoundland Time(CNT) - GMT-03:30</option>
<option value="Argentina Standard Time(AGT) - GMT-03:00">Argentina Standard Time(AGT) - GMT-03:00</option>
<option value="Brazil Eastern Time(BET) - GMT-03:00">Brazil Eastern Time(BET) - GMT-03:00</option>
<option value="Central African Time(CAT) - GMT-01:00">Central African Time(CAT) - GMT-01:00</option>
</select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="reg_input_logo">Upload Logo</label>
                                                        <input id="ytInstitution_institution_logo" type="hidden" value="" name="Institution[institution_logo]"><input name="Institution[institution_logo]" id="Institution_institution_logo" type="file"><div class="school_val_error" id="Institution_institution_logo_em_" style="display:none"></div>                                                    </div>
                                                </div>
                                            </div>
                                            <!--<div class="text-right">
                                                <button class="btn btn-primary" type="submit"> <i class="icon-arrow-right14 position-right"></i></button>
                                            </div>-->
                                            </form>                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="thumbnail">
                                        <div class="thumb thumb-slide">
                                                                                            <img alt="" src="/banner/07012017103449.jpg">
                                                                                    </div>

                                        <div class="caption text-center">
                                            <h6 class="text-semibold no-margin">Demo School 
                                                <small class="display-block">demo@gmail.com</small>
                                            </h6>
                                        </div>
                                    </div>
                            </div>
                        </div>
                                        <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
            <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
        </div>
    </div>
</div>
</div>
<script>
    populateCountries("Institution_institution_country");


    $("input").keyup(function () {

        $('#item-grid').yiiGridView('update', {
            data: {search: $('#search').val()}
        });
        return false;

    });

</script>	

		
                    </div>
                    <div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
                        <ul class="nav navbar-nav no-border visible-xs-block">
                            <li>
                                <a data-target="#navbar-second" data-toggle="collapse" class="text-center collapsed">
                                    <i class="icon-circle-up2"></i>
                                </a>
                            </li>
                        </ul>
                        <div id="navbar-second" class="navbar-collapse collapse">
                            <div class="navbar-text">
                               © 2017. Webschool by GESCIS Technologies Pvt Ltd. V3.2
                            </div>
                        </div>
                    </div>
                </div>