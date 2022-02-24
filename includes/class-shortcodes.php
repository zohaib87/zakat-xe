<?php
/**
 * Add calculator shortcode.
 *
 * @package Zakat XE
 */

if ( !class_exists('Zakat_XE_Shortcodes') ) {

  class Zakat_XE_Shortcodes {

    function __construct() {

      add_shortcode( 'zakat-xe', array($this, 'zakat_calculator') );

    }

    public function zakat_calculator($atts) {

      ob_start();
      ?>
        <div class="zakat-alerts"></div>
        <form class="zakat-xe form-horizontal">
          <div class="form-group">
            <label for="currency" class="control-label">Select Currency:</label>
            <select id="currency" class="form-control">
              <option value="Curr" disabled>-- Select Currency --</option>
              <option value="USD" selected>USD - United States Dollar</option>
              <option value="AED">AED - United Arab Emirates Dirham</option>
              <option value="AFN">AFN - Afghan Afghani</option>
              <option value="ALL">ALL - Albanian Lek</option>
              <option value="AMD">AMD - Armenian Dram</option>
              <option value="ANG">ANG - Netherlands Antillean Guilder</option>
              <option value="AOA">AOA - Angolan Kwanza</option>
              <option value="ARS">ARS - Argentine Peso</option>
              <option value="AUD">AUD - Australian Dollar</option>
              <option value="AWG">AWG - Aruban Florin</option>
              <option value="AZN">AZN - Azerbaijani Manat</option>
              <option value="BAM">BAM - Bosnia-Herzegovina Convertible Mark</option>
              <option value="BBD">BBD - Barbadian Dollar</option>
              <option value="BDT">BDT - Bangladeshi Taka</option>
              <option value="BGN">BGN - Bulgarian Lev</option>
              <option value="BHD">BHD - Bahraini Dinar</option>
              <option value="BIF">BIF - Burundian Franc</option>
              <option value="BMD">BMD - Bermudan Dollar</option>
              <option value="BND">BND - Brunei Dollar</option>
              <option value="BOB">BOB - Bolivian Boliviano</option>
              <option value="BRL">BRL - Brazilian Real</option>
              <option value="BSD">BSD - Bahamian Dollar</option>
              <option value="BTN">BTN - Bhutanese Ngultrum</option>
              <option value="BWP">BWP - Botswanan Pula</option>
              <option value="BYN">BYN - New Belarusian Ruble</option>
              <option value="BZD">BZD - Belize Dollar</option>
              <option value="CAD">CAD - Canadian Dollar</option>
              <option value="CDF">CDF - Congolese Franc</option>
              <option value="CHF">CHF - Swiss Franc</option>
              <option value="CLP">CLP - Chilean Peso</option>
              <option value="CNY">CNY - Chinese Yuan</option>
              <option value="COP">COP - Colombian Peso</option>
              <option value="CRC">CRC - Costa Rican Colón</option>
              <option value="CUC">CUC - Cuban Convertible Peso</option>
              <option value="CUP">CUP - Cuban Peso</option>
              <option value="CVE">CVE - Cape Verdean Escudo</option>
              <option value="CZK">CZK - Czech Republic Koruna</option>
              <option value="DJF">DJF - Djiboutian Franc</option>
              <option value="DKK">DKK - Danish Krone</option>
              <option value="DOP">DOP - Dominican Peso</option>
              <option value="DZD">DZD - Algerian Dinar</option>
              <option value="EGP">EGP - Egyptian Pound</option>
              <option value="ERN">ERN - Eritrean Nakfa</option>
              <option value="ETB">ETB - Ethiopian Birr</option>
              <option value="EUR">EUR - Euro</option>
              <option value="FJD">FJD - Fijian Dollar</option>
              <option value="FKP">FKP - Falkland Islands Pound</option>
              <option value="GBP">GBP - British Pound Sterling</option>
              <option value="GEL">GEL - Georgian Lari</option>
              <option value="GGP">GGP - Guernsey Pound</option>
              <option value="GHS">GHS - Ghanaian Cedi</option>
              <option value="GIP">GIP - Gibraltar Pound</option>
              <option value="GMD">GMD - Gambian Dalasi</option>
              <option value="GNF">GNF - Guinean Franc</option>
              <option value="GTQ">GTQ - Guatemalan Quetzal</option>
              <option value="GYD">GYD - Guyanaese Dollar</option>
              <option value="HKD">HKD - Hong Kong Dollar</option>
              <option value="HNL">HNL - Honduran Lempira</option>
              <option value="HRK">HRK - Croatian Kuna</option>
              <option value="HTG">HTG - Haitian Gourde</option>
              <option value="HUF">HUF - Hungarian Forint</option>
              <option value="IDR">IDR - Indonesian Rupiah</option>
              <option value="ILS">ILS - Israeli New Sheqel</option>
              <option value="IMP">IMP - Manx pound</option>
              <option value="INR">INR - Indian Rupee</option>
              <option value="IQD">IQD - Iraqi Dinar</option>
              <option value="IRR">IRR - Iranian Rial</option>
              <option value="ISK">ISK - Icelandic Króna</option>
              <option value="JEP">JEP - Jersey Pound</option>
              <option value="JMD">JMD - Jamaican Dollar</option>
              <option value="JOD">JOD - Jordanian Dinar</option>
              <option value="JPY">JPY - Japanese Yen</option>
              <option value="KES">KES - Kenyan Shilling</option>
              <option value="KGS">KGS - Kyrgystani Som</option>
              <option value="KHR">KHR - Cambodian Riel</option>
              <option value="KMF">KMF - Comorian Franc</option>
              <option value="KPW">KPW - North Korean Won</option>
              <option value="KRW">KRW - South Korean Won</option>
              <option value="KWD">KWD - Kuwaiti Dinar</option>
              <option value="KYD">KYD - Cayman Islands Dollar</option>
              <option value="KZT">KZT - Kazakhstani Tenge</option>
              <option value="LAK">LAK - Laotian Kip</option>
              <option value="LBP">LBP - Lebanese Pound</option>
              <option value="LKR">LKR - Sri Lankan Rupee</option>
              <option value="LRD">LRD - Liberian Dollar</option>
              <option value="LSL">LSL - Lesotho Loti</option>
              <option value="LYD">LYD - Libyan Dinar</option>
              <option value="MAD">MAD - Moroccan Dirham</option>
              <option value="MDL">MDL - Moldovan Leu</option>
              <option value="MGA">MGA - Malagasy Ariary</option>
              <option value="MKD">MKD - Macedonian Denar</option>
              <option value="MMK">MMK - Myanma Kyat</option>
              <option value="MNT">MNT - Mongolian Tugrik</option>
              <option value="MOP">MOP - Macanese Pataca</option>
              <option value="MRO">MRO - Mauritanian Ouguiya</option>
              <option value="MUR">MUR - Mauritian Rupee</option>
              <option value="MVR">MVR - Maldivian Rufiyaa</option>
              <option value="MWK">MWK - Malawian Kwacha</option>
              <option value="MXN">MXN - Mexican Peso</option>
              <option value="MYR">MYR - Malaysian Ringgit</option>
              <option value="MZN">MZN - Mozambican Metical</option>
              <option value="NAD">NAD - Namibian Dollar</option>
              <option value="NGN">NGN - Nigerian Naira</option>
              <option value="NIO">NIO - Nicaraguan Córdoba</option>
              <option value="NOK">NOK - Norwegian Krone</option>
              <option value="NPR">NPR - Nepalese Rupee</option>
              <option value="NZD">NZD - New Zealand Dollar</option>
              <option value="OMR">OMR - Omani Rial</option>
              <option value="PAB">PAB - Panamanian Balboa</option>
              <option value="PEN">PEN - Peruvian Nuevo Sol</option>
              <option value="PGK">PGK - Papua New Guinean Kina</option>
              <option value="PHP">PHP - Philippine Peso</option>
              <option value="PKR">PKR - Pakistani Rupee</option>
              <option value="PLN">PLN - Polish Zloty</option>
              <option value="PYG">PYG - Paraguayan Guarani</option>
              <option value="QAR">QAR - Qatari Rial</option>
              <option value="RON">RON - Romanian Leu</option>
              <option value="RSD">RSD - Serbian Dinar</option>
              <option value="RUB">RUB - Russian Ruble</option>
              <option value="RWF">RWF - Rwandan Franc</option>
              <option value="SAR">SAR - Saudi Riyal</option>
              <option value="SBD">SBD - Solomon Islands Dollar</option>
              <option value="SCR">SCR - Seychellois Rupee</option>
              <option value="SDG">SDG - Sudanese Pound</option>
              <option value="SEK">SEK - Swedish Krona</option>
              <option value="SGD">SGD - Singapore Dollar</option>
              <option value="SHP">SHP - Saint Helena Pound</option>
              <option value="SLL">SLL - Sierra Leonean Leone</option>
              <option value="SOS">SOS - Somali Shilling</option>
              <option value="SRD">SRD - Surinamese Dollar</option>
              <option value="STD">STD - São Tomé and Príncipe Dobra</option>
              <option value="SVC">SVC - Salvadoran Colón</option>
              <option value="SYP">SYP - Syrian Pound</option>
              <option value="SZL">SZL - Swazi Lilangeni</option>
              <option value="THB">THB - Thai Baht</option>
              <option value="TJS">TJS - Tajikistani Somoni</option>
              <option value="TMT">TMT - Turkmenistani Manat</option>
              <option value="TND">TND - Tunisian Dinar</option>
              <option value="TOP">TOP - Tongan Paʻanga</option>
              <option value="TRY">TRY - Turkish Lira</option>
              <option value="TTD">TTD - Trinidad and Tobago Dollar</option>
              <option value="TWD">TWD - New Taiwan Dollar</option>
              <option value="TZS">TZS - Tanzanian Shilling</option>
              <option value="UAH">UAH - Ukrainian Hryvnia</option>
              <option value="UGX">UGX - Ugandan Shilling</option>
              <option value="USD">USD - United States Dollar</option>
              <option value="UYU">UYU - Uruguayan Peso</option>
              <option value="UZS">UZS - Uzbekistan Som</option>
              <option value="VEF">VEF - Venezuelan Bolívar Fuerte</option>
              <option value="VND">VND - Vietnamese Dong</option>
              <option value="VUV">VUV - Vanuatu Vatu</option>
              <option value="WST">WST - Samoan Tala</option>
              <option value="XAF">XAF - CFA Franc BEAC</option>
              <option value="XCD">XCD - East Caribbean Dollar</option>
              <option value="XOF">XOF - CFA Franc BCEAO</option>
              <option value="XPF">XPF - CFP Franc</option>
              <option value="YER">YER - Yemeni Rial</option>
              <option value="ZAR">ZAR - South African Rand</option>
              <option value="ZMW">ZMW - Zambian Kwacha</option>
            </select>
          </div>

          <div class="form-group">
            <label for="nisab" class="control-label">Nisab:</label>
            <input type="text" class="form-control" id="nisab" placeholder="" disabled>
            <small id="nisab-date"></small>
          </div>

          <div class="form-group">
            <label for="savings" class="control-label">Bank Saving:</label>
            <input type="number" class="form-control" id="savings" placeholder="">
            <small>Use lowest amount held for 1 year</small>
          </div>

          <div class="form-group">
            <label for="metals" class="control-label">Gold & Silver:</label>
            <input type="number" class="form-control" id="metals" placeholder="">
            <small>Monetary value</small>
          </div>

          <div class="form-group">
            <label for="loans" class="control-label">Money owed to you:</label>
            <input type="number" class="form-control" id="loans" placeholder="">
          </div>

          <div class="form-group">
            <label for="total" class="control-label">Total:</label>
            <input type="text" class="form-control" id="total" placeholder="" disabled>
          </div>

          <div class="form-group">
            <label for="zakat" class="control-label">Zakat:</label>
            <input type="text" class="form-control" id="zakat" placeholder="" disabled>
          </div>

          <div class="form-group">
            <label for="reset-zakat" class="control-label"></label>
            <input type="submit" name="reset-zakat" id="zakat-reset" class="btn btn-primary" value="Reset">
          </div>
        </form>
      <?php
      $output = ob_get_clean();

      return $output;

    }

  }
  new Zakat_XE_Shortcodes();

}