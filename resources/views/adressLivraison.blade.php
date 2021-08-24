            <!--Bloc Adresse de livraison-->
	<fieldset >
		<legend> <h3>Adresse de livraison</h3></legend>

			<div class="checkbox">
				<label for="adresseMaroc"><input id="ctl0_CONTENU_PAGE_adresseLivraison_adresseMaroc" type="radio" name="ctl0$CONTENU_PAGE$adresseLivraison$panelAdresseLiv" value="ctl0$CONTENU_PAGE$adresseLivraison$adresseMaroc" onclick="J('#panelAdresseMaroc').show();J('#panelAdresseEtranger').hide();" checked="checked" />
					 Au Maroc</label>
			</div>

			<div  id="panelAdresseMaroc">
					<div class="form-group">
					<label class="control-label col-lg-3" for="adresse_1" >Adresse <span style="font-weight: normal;"><i>(ligne 1)</i></span> :</label>
					<div class="col-lg-6">
						<input name="ctl0$CONTENU_PAGE$adresseLivraison$adresse_1" type="text" id="ctl0_CONTENU_PAGE_adresseLivraison_adresse_1" class="form-control" />
						<span id="ctl0_CONTENU_PAGE_adresseLivraison_erreurAdresse_1" style="display:none;"><span title='Champ obligatoire' class='check-invalide'><img src='themes/images/picto-check-not-ok.gif' alt='Champ obligatoire' /></span></span>
						<div class="aide-saisie">(Exemple : "3, Rue de la Renaissance" OU "67, Bloc M")</div>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3" for="adresse_2">Adresse <span style="font-weight: normal;"><i>(ligne 2, facultatif)</i></span> :</label>
					<div class="col-lg-6">
						<input name="ctl0$CONTENU_PAGE$adresseLivraison$adresse_2" type="text" id="ctl0_CONTENU_PAGE_adresseLivraison_adresse_2" class="form-control" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-3" for="codePostal">Code postal<br><span style="font-weight: normal;"><i>(facultatif)</i></span> :</label>
					<div class="col-lg-2">
						<input name="ctl0$CONTENU_PAGE$adresseLivraison$codePostal" type="text" maxlength="5" id="ctl0_CONTENU_PAGE_adresseLivraison_codePostal" class="form-control" />
						<span id="ctl0_CONTENU_PAGE_adresseLivraison_erreurCodePostal" style="display:none;"><span title='Champ obligatoire' class='check-invalide'><img src='themes/images/picto-check-not-ok.gif' alt='Champ obligatoire' /></span></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-3" for="localite">Localité:</label>
					<div class="col-lg-6">
						<input name="ctl0$CONTENU_PAGE$adresseLivraison$localite" type="text" id="ctl0_CONTENU_PAGE_adresseLivraison_localite" class="form-control" />
						<span id="ctl0_CONTENU_PAGE_adresseLivraison_erreurLocalite" style="display:none;"><span title='Champ obligatoire' class='check-invalide'><img src='themes/images/picto-check-not-ok.gif' alt='Champ obligatoire' /></span></span>
					</div>
				</div>

			</div>

			<div class="checkbox">
				<label for="adresseEtranger"><input id="ctl0_CONTENU_PAGE_adresseLivraison_adresseEtranger" type="radio" name="ctl0$CONTENU_PAGE$adresseLivraison$panelAdresseLiv" value="ctl0$CONTENU_PAGE$adresseLivraison$adresseEtranger" onclick="J('#panelAdresseEtranger').show();J('#panelAdresseMaroc').hide();" />
					 A l'étranger</label>
			</div>

			<div  id="panelAdresseEtranger" style="display:none;">
				<br>
				<div class="form-group">
					<label class="control-label col-lg-3" for="adresse_1_etranger">Adresse <span style="font-weight: normal;">(ligne 1)</span>:</label>
					<div class="col-lg-6">
						<input name="ctl0$CONTENU_PAGE$adresseLivraison$adresse_1Etranger" type="text" id="ctl0_CONTENU_PAGE_adresseLivraison_adresse_1Etranger" class="form-control" />
						<span id="ctl0_CONTENU_PAGE_adresseLivraison_erreurAdresse_1Etranger" style="display:none;"><span title='Champ obligatoire' class='check-invalide'><img src='themes/images/picto-check-not-ok.gif' alt='Champ obligatoire' /></span></span>
						<div class="aide-saisie">(Exemple : "3, Rue de la Renaissance" OU "67, Bloc M")</div>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3" for="adresse_2_etranger">Adresse <span style="font-weight: normal;">(ligne 2, facultatif)</span>:</label>
					<div class="col-lg-6">
						<input name="ctl0$CONTENU_PAGE$adresseLivraison$adresse_2Etranger" type="text" id="ctl0_CONTENU_PAGE_adresseLivraison_adresse_2Etranger" class="form-control" />
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3" for="codePostal_etranger">Code postal<br><span style="font-weight: normal;"><i>(facultatif)</i></span> :</label>
					<div class="col-lg-2">
						<input name="ctl0$CONTENU_PAGE$adresseLivraison$codePostalEtranger" type="text" maxlength="5" id="ctl0_CONTENU_PAGE_adresseLivraison_codePostalEtranger" class="form-control" />
						<span id="ctl0_CONTENU_PAGE_adresseLivraison_erreurCodePostalEtranger" style="display:none;"><span title='Champ obligatoire' class='check-invalide'><img src='themes/images/picto-check-not-ok.gif' alt='Champ obligatoire' /></span></span>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3" for="localite_etranger">Localité:</label>
					<div class="col-lg-6">
						<input name="ctl0$CONTENU_PAGE$adresseLivraison$localiteEtranger" type="text" id="ctl0_CONTENU_PAGE_adresseLivraison_localiteEtranger" class="form-control" />
						<span id="ctl0_CONTENU_PAGE_adresseLivraison_erreurLocaliteEtranger" style="display:none;"><span title='Champ obligatoire' class='check-invalide'><img src='themes/images/picto-check-not-ok.gif' alt='Champ obligatoire' /></span></span>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-3" for="paysListe">Pays:</label>
					<div class="col-lg-6">
						<select name="ctl0$CONTENU_PAGE$adresseLivraison$paysListe" id="ctl0_CONTENU_PAGE_adresseLivraison_paysListe" class="form-control">
<option value="0">Sélectionner...</option>
<option value="1">AFGHANISTAN</option>
<option value="2">AFRIQUE DU SUD</option>
<option value="3">ALBANIE</option>
<option value="4">ALGERIE</option>
<option value="5">ALLEMAGNE</option>
<option value="6">ANDORRE</option>
<option value="7">ANGOLA</option>
<option value="8">ANTIGUA-ET-BARBUDA</option>
<option value="9">ARABIE SAOUDITE</option>
<option value="10">ARGENTINE</option>
<option value="11">ARMENIE</option>
<option value="12">AUSTRALIE</option>
<option value="13">AUTRICHE</option>
<option value="14">AZERBAÏDJAN</option>
<option value="15">BAHAMAS</option>
<option value="16">BAHREIN</option>
<option value="17">BANGLADESH</option>
<option value="18">BARBADE</option>
<option value="19">BELGIQUE</option>
<option value="20">BELIZE</option>
<option value="21">BENIN</option>
<option value="22">BHOUTAN</option>
<option value="23">Biélorussie</option>
<option value="24">BIRMANIE</option>
<option value="25">BOLIVIE</option>
<option value="26">Bosnie Herzégovine</option>
<option value="27">BOTSWANA</option>
<option value="28">BRESIL</option>
<option value="29">BRUNEI</option>
<option value="30">BULGARIE</option>
<option value="31">BURKINA FASO</option>
<option value="32">BURUNDI</option>
<option value="33">CAMBODGE</option>
<option value="34">CAMEROUN</option>
<option value="35">CANADA</option>
<option value="36">CAP-VERT</option>
<option value="37">CHILI</option>
<option value="38">CHINE</option>
<option value="39">CHYPRE</option>
<option value="40">COLOMBIE</option>
<option value="41">COMORES</option>
<option value="42">CONGO</option>
<option value="43">Corée, du nord</option>
<option value="44">Corée, du sud</option>
<option value="45">COSTA RICA</option>
<option value="46">COTE D'IVOIRE</option>
<option value="47">Croatie (nom local : Hrvatska)</option>
<option value="48">CUBA</option>
<option value="49">DANEMARK</option>
<option value="50">DJIBOUTI</option>
<option value="51">DOMINIQUE</option>
<option value="52">EGYPTE</option>
<option value="53">El Salvador</option>
<option value="54">EMIRATS ARABES UNIS</option>
<option value="55">ÉQUATEUR</option>
<option value="56">ÉRYTHREE</option>
<option value="57">ESPAGNE</option>
<option value="58">ESTONIE</option>
<option value="59">Etats fédérés de Micronésie</option>
<option value="60">ETATS-UNIS</option>
<option value="61">ETHIOPIE</option>
<option value="62">Fédération de Russie</option>
<option value="63">FIDJI</option>
<option value="64">Finlande</option>
<option value="65">FRANCE</option>
<option value="66">GABON</option>
<option value="67">GAMBIE</option>
<option value="68">GEORGIE</option>
<option value="69">GHANA</option>
<option value="70">GRECE</option>
<option value="71">GRENADE</option>
<option value="72">GUATEMALA</option>
<option value="73">GUINEE</option>
<option value="74">GUINEE EQUATORIALE</option>
<option value="75">GUINEE-BISSAU</option>
<option value="76">Guyane</option>
<option value="77">HAÏTI</option>
<option value="78">HONDURAS</option>
<option value="79">HONGRIE</option>
<option value="80">ÎLES MARSHALL</option>
<option value="81">Iles Salomon</option>
<option value="82">INDE</option>
<option value="83">INDONESIE</option>
<option value="84">Iran (République islamique de)</option>
<option value="85">Iraq</option>
<option value="86">IRLANDE</option>
<option value="87">ISLANDE</option>
<option value="88">ISRAËL</option>
<option value="89">ITALIE</option>
<option value="90">JAMAÏQUE</option>
<option value="91">JAPON</option>
<option value="92">JORDANIE</option>
<option value="93">KAZAKHSTAN</option>
<option value="94">KENYA</option>
<option value="95">KIRGHIZISTAN</option>
<option value="96">KIRIBATI</option>
<option value="97">KOWEIT</option>
<option value="98">Laos (République démocratique populaire)</option>
<option value="99">Latvie</option>
<option value="100">LESOTHO</option>
<option value="101">LIBAN</option>
<option value="102">LIBERIA</option>
<option value="103">Libye (Jamahiriya arabe libyenne)</option>
<option value="104">Liechtenstein</option>
<option value="105">LITUANIE</option>
<option value="106">LUXEMBOURG</option>
<option value="107">Macédoine (ancienne république yougoslave)</option>
<option value="108">MADAGASCAR</option>
<option value="109">MALAISIE</option>
<option value="110">MALAWI</option>
<option value="111">MALDIVES</option>
<option value="112">MALI</option>
<option value="113">MALTE</option>
<option value="114">MAURICE</option>
<option value="115">MAURITANIE</option>
<option value="116">MEXIQUE</option>
<option value="117">Moldavie, République de</option>
<option value="118">MONACO</option>
<option value="119">MONGOLIE</option>
<option value="120">MONTENEGRO</option>
<option value="121">MOZAMBIQUE</option>
<option value="122">NAMIBIE</option>
<option value="123">NAURU</option>
<option value="124">NEPAL</option>
<option value="125">NICARAGUA</option>
<option value="126">NIGER</option>
<option value="127">NIGERIA</option>
<option value="128">NORVEGE</option>
<option value="129">NOUVELLE-ZELANDE</option>
<option value="130">OMAN</option>
<option value="131">OUGANDA</option>
<option value="132">OUZBEKISTAN</option>
<option value="133">PAKISTAN</option>
<option value="134">PALAOS</option>
<option value="135">PALESTINE</option>
<option value="136">PANAMA</option>
<option value="137">PAPOUASIE-NOUVELLE-GUINEE</option>
<option value="138">PARAGUAY</option>
<option value="139">PAYS-BAS</option>
<option value="140">PEROU</option>
<option value="141">PHILIPPINES</option>
<option value="142">POLOGNE</option>
<option value="143">PORTUGAL</option>
<option value="144">QATAR</option>
<option value="145">REPUBLIQUE CENTRAFRICAINE</option>
<option value="146">REPUBLIQUE DEMOCRATIQUE DU CONGO</option>
<option value="147">REPUBLIQUE DOMINICAINE</option>
<option value="148">REPUBLIQUE TCHEQUE</option>
<option value="149">ROUMANIE</option>
<option value="150">ROYAUME-UNI</option>
<option value="151">Ruanda</option>
<option value="152">Saint Kitts-et-Nevis</option>
<option value="153">Sainte Lucie</option>
<option value="154">SAINT-MARIN</option>
<option value="155">Saint-Vincent-et-Grenadines</option>
<option value="156">SAMOA</option>
<option value="157">SAO TOME-ET-PRINCIPE</option>
<option value="158">SENEGAL</option>
<option value="159">SERBIE</option>
<option value="160">SEYCHELLES</option>
<option value="161">Sierra Leone</option>
<option value="162">SINGAPOUR</option>
<option value="163">Slovaquie (République slovaque)</option>
<option value="164">SLOVENIE</option>
<option value="165">SOMALIE</option>
<option value="166">SOUDAN</option>
<option value="167">SOUDAN DU SUD</option>
<option value="168">SRI LANKA</option>
<option value="169">SUEDE</option>
<option value="170">SUISSE</option>
<option value="171">SURINAME</option>
<option value="172">SWAZILAND</option>
<option value="173">Syrie (République arabe de)</option>
<option value="174">TADJIKISTAN</option>
<option value="175">Tanzanie, République unie de</option>
<option value="176">TCHAD</option>
<option value="177">THAÏLANDE</option>
<option value="178">TIMOR ORIENTAL</option>
<option value="179">TOGO</option>
<option value="180">TONGA</option>
<option value="181">TRINITE-ET-TOBAGO</option>
<option value="182">TUNISIE</option>
<option value="183">TURKMENISTAN</option>
<option value="184">TURQUIE</option>
<option value="185">TUVALU</option>
<option value="186">UKRAINE</option>
<option value="187">URUGUAY</option>
<option value="188">VANUATU</option>
<option value="189">Vatican (Saint Siège)</option>
<option value="190">VENEZUELA</option>
<option value="191">Viêt-nam</option>
<option value="192">YEMEN</option>
<option value="193">ZAMBIE</option>
<option value="194">ZIMBABWE</option>
</select>
						<span id="ctl0_CONTENU_PAGE_adresseLivraison_erreurpaysListe" style="display:none;"><span title='Champ obligatoire' class='check-invalide'><img src='themes/images/picto-check-not-ok.gif' alt='Champ obligatoire' /></span></span>
					</div>
				</div>
			</div>


	</fieldset>

	<span id="ctl0_CONTENU_PAGE_adresseLivraison_ctl37" style="display:none;color:red;"></span>
	<!--Fin Bloc Adresse de livraison-->
