@extends('master.layout')


@section('demande')
   <div class="container my-4 ">

            <fieldset>
				<legend> <h3>Identification de l'acte</h3></legend>
				<div class="form-horizontal">
				<input id="ctl0_CONTENU_PAGE_acteNaissance_imageOui" type="radio" name="ctl0$CONTENU_PAGE$acteNaissance$groupeImage" value="ctl0$CONTENU_PAGE$acteNaissance$imageOui" style="display:none;" />
				<input id="ctl0_CONTENU_PAGE_acteNaissance_imageNon" type="radio" name="ctl0$CONTENU_PAGE$acteNaissance$groupeImage" value="ctl0$CONTENU_PAGE$acteNaissance$imageNon" checked="checked" style="display:none;" />

					<div id="panelImageNon" style="display:;">

						<br>
				<i>Veuillez préciser les éléments permettant d'identifier l'acte de naissance :</i>
				<br><br>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group col-lg-12">
								<label for="prenomAr" class="control-label col-lg-6">Prénom  en caractères arabes :</label>
								<div class="col-lg-6" style="padding-left: 0;padding-right: 0;">
									<input name="ctl0$CONTENU_PAGE$acteNaissance$prenomAr" type="text" id="ctl0_CONTENU_PAGE_acteNaissance_prenomAr" class="form-control keyboard-ar" style="background-color:#fff;border-color:#ccc;text-align:right;" /><input type="hidden" name="ctl0$CONTENU_PAGE$acteNaissance$hiddenPrenomAr" id="ctl0_CONTENU_PAGE_acteNaissance_hiddenPrenomAr" /> <input type="submit" name="ctl0$CONTENU_PAGE$acteNaissance$refreshPrenom" value="" id="ctl0_CONTENU_PAGE_acteNaissance_refreshPrenom" style="display:none;" />
										<span id="ctl0_CONTENU_PAGE_acteNaissance_ctl17" style="display:none;color:red;"><span title='Champ obligatoire' class='check-invalide'><img src='themes/images/picto-check-not-ok.gif' alt='Champ obligatoire' /></span></span>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group col-lg-12">
								<label for="ctl0_CONTENU_PAGE_acteNaissance_nomAr" class="control-label col-lg-6">Nom  en caractères arabes :</label>
								<div class="col-lg-6" style="padding-left: 0;padding-right: 0;">
									<input name="ctl0$CONTENU_PAGE$acteNaissance$nomAr" type="text" id="ctl0_CONTENU_PAGE_acteNaissance_nomAr" class="form-control keyboard-ar" style="background-color:#fff;border-color:#ccc;text-align:right;" /><input type="hidden" name="ctl0$CONTENU_PAGE$acteNaissance$hiddenNomAr" id="ctl0_CONTENU_PAGE_acteNaissance_hiddenNomAr" /> <input type="submit" name="ctl0$CONTENU_PAGE$acteNaissance$refreshNom" value="" id="ctl0_CONTENU_PAGE_acteNaissance_refreshNom" style="display:none;" />
										<span id="ctl0_CONTENU_PAGE_acteNaissance_ctl18" style="display:none;color:red;"><span title='Champ obligatoire' class='check-invalide'><img src='themes/images/picto-check-not-ok.gif' alt='Champ obligatoire' /></span></span>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="form-group col-lg-12">
								<label for="prenomLatin" class="control-label col-lg-6">Prénom  en caractères latins<br><span style="font-weight: normal;"><i>(facultatif)</i></span>  :</label>
								<div class="col-lg-6" style="padding-left: 0;padding-right: 0;">
									<input name="ctl0$CONTENU_PAGE$acteNaissance$prenomLatin" type="text" id="ctl0_CONTENU_PAGE_acteNaissance_prenomLatin" class="form-control" />
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group col-lg-12">
								<label for="nomLatin" class="control-label col-lg-6">Nom  en caractères latins<br><span style="font-weight: normal;"><i>(facultatif)</i></span>  :</label>
								<div class="col-lg-6" style="padding-left: 0;padding-right: 0;">
									<input name="ctl0$CONTENU_PAGE$acteNaissance$nomLatin" type="text" id="ctl0_CONTENU_PAGE_acteNaissance_nomLatin" class="form-control" />
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="form-group col-lg-12">
								<label for="prenomMereAr" class="control-label col-lg-6">Prénom de la mère :</label>
								<div class="col-lg-6" style="padding-left: 0;padding-right: 0;">
									<input name="ctl0$CONTENU_PAGE$acteNaissance$prenomMereAr" type="text" id="ctl0_CONTENU_PAGE_acteNaissance_prenomMereAr" class="form-control" />
										<span id="ctl0_CONTENU_PAGE_acteNaissance_ctl20" style="display:none;color:red;"><span title='Champ obligatoire' class='check-invalide'><img src='themes/images/picto-check-not-ok.gif' alt='Champ obligatoire' /></span></span>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group col-lg-12">
								<label for="nomMereAr" class="control-label col-lg-6">Nom de la mère :</label>
								<div class="col-lg-6" style="padding-left: 0;padding-right: 0;">
									<input name="ctl0$CONTENU_PAGE$acteNaissance$nomMereAr" type="text" id="ctl0_CONTENU_PAGE_acteNaissance_nomMereAr" class="form-control" />
										<span id="ctl0_CONTENU_PAGE_acteNaissance_ctl22" style="display:none;color:red;"><span title='Champ obligatoire' class='check-invalide'><img src='themes/images/picto-check-not-ok.gif' alt='Champ obligatoire' /></span></span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group col-lg-12">
								<label for="prenomPereAr" class="control-label col-lg-6">Prénom du père :</label>
								<div class="col-lg-6" style="padding-left: 0;padding-right: 0;">
									<input name="ctl0$CONTENU_PAGE$acteNaissance$prenomPereAr" type="text" id="ctl0_CONTENU_PAGE_acteNaissance_prenomPereAr" class="form-control" />
										<span id="ctl0_CONTENU_PAGE_acteNaissance_ctl24" style="display:none;color:red;"><span title='Champ obligatoire' class='check-invalide'><img src='themes/images/picto-check-not-ok.gif' alt='Champ obligatoire' /></span></span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group col-lg-12">
								<div  class="col-lg-offset-6 col-lg-6" style="padding-left: 0;padding-right: 0;">
									<label class="checkbox-inline text-nowrap">
										<input id="ctl0_CONTENU_PAGE_acteNaissance_dateNaissanceNonConnu" type="checkbox" onclick="J('#dateNaissance_jj').toggle();J('#dateNaissance_mm').toggle();" name="ctl0$CONTENU_PAGE$acteNaissance$dateNaissanceNonConnu" />
										Je ne connais pas ma date de naissance
									</label>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group col-lg-12">

								<label for="dateNaissance_jj" class="control-label col-lg-6">Date de naissance :</label>
								<div class="row col-lg-6" >
									<div class="col-xs-2" style="padding-left: 0;padding-right: 0;width: 70px;">
										<select name="ctl0$CONTENU_PAGE$acteNaissance$dateNaissanceJour" id="dateNaissance_jj" class="form-control" title="Jour">
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option selected="selected" value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
									</div>
									<div class="col-xs-2" style="padding-left: 0;padding-right: 0;width: 70px;">
										<select name="ctl0$CONTENU_PAGE$acteNaissance$dateNaissanceMois" id="dateNaissance_mm" class="form-control" title="Mois">
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option selected="selected" value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
									</div>
									<div class="col-xs-2" style="padding-left: 0;padding-right: 0;width: 85px;">
										<select name="ctl0$CONTENU_PAGE$acteNaissance$dateNaissanceAnnee" id="dateNaissance_aa" class="form-control" title="Année">
                                            <option value="1900">1900</option>
                                            <option value="1901">1901</option>
                                            <option value="1902">1902</option>
                                            <option value="1903">1903</option>
                                            <option value="1904">1904</option>
                                            <option value="1905">1905</option>
                                            <option value="1906">1906</option>
                                            <option value="1907">1907</option>
                                            <option value="1908">1908</option>
                                            <option value="1909">1909</option>
                                            <option value="1910">1910</option>
                                            <option value="1911">1911</option>
                                            <option value="1912">1912</option>
                                            <option value="1913">1913</option>
                                            <option value="1914">1914</option>
                                            <option value="1915">1915</option>
                                            <option value="1916">1916</option>
                                            <option value="1917">1917</option>
                                            <option value="1918">1918</option>
                                            <option value="1919">1919</option>
                                            <option value="1920">1920</option>
                                            <option value="1921">1921</option>
                                            <option value="1922">1922</option>
                                            <option value="1923">1923</option>
                                            <option value="1924">1924</option>
                                            <option value="1925">1925</option>
                                            <option value="1926">1926</option>
                                            <option value="1927">1927</option>
                                            <option value="1928">1928</option>
                                            <option value="1929">1929</option>
                                            <option value="1930">1930</option>
                                            <option value="1931">1931</option>
                                            <option value="1932">1932</option>
                                            <option value="1933">1933</option>
                                            <option value="1934">1934</option>
                                            <option value="1935">1935</option>
                                            <option value="1936">1936</option>
                                            <option value="1937">1937</option>
                                            <option value="1938">1938</option>
                                            <option value="1939">1939</option>
                                            <option value="1940">1940</option>
                                            <option value="1941">1941</option>
                                            <option value="1942">1942</option>
                                            <option value="1943">1943</option>
                                            <option value="1944">1944</option>
                                            <option value="1945">1945</option>
                                            <option value="1946">1946</option>
                                            <option value="1947">1947</option>
                                            <option value="1948">1948</option>
                                            <option value="1949">1949</option>
                                            <option value="1950">1950</option>
                                            <option value="1951">1951</option>
                                            <option value="1952">1952</option>
                                            <option value="1953">1953</option>
                                            <option value="1954">1954</option>
                                            <option value="1955">1955</option>
                                            <option value="1956">1956</option>
                                            <option value="1957">1957</option>
                                            <option value="1958">1958</option>
                                            <option value="1959">1959</option>
                                            <option value="1960">1960</option>
                                            <option value="1961">1961</option>
                                            <option value="1962">1962</option>
                                            <option value="1963">1963</option>
                                            <option value="1964">1964</option>
                                            <option value="1965">1965</option>
                                            <option value="1966">1966</option>
                                            <option value="1967">1967</option>
                                            <option value="1968">1968</option>
                                            <option value="1969">1969</option>
                                            <option value="1970">1970</option>
                                            <option value="1971">1971</option>
                                            <option value="1972">1972</option>
                                            <option value="1973">1973</option>
                                            <option value="1974">1974</option>
                                            <option value="1975">1975</option>
                                            <option value="1976">1976</option>
                                            <option value="1977">1977</option>
                                            <option value="1978">1978</option>
                                            <option value="1979">1979</option>
                                            <option value="1980">1980</option>
                                            <option value="1981">1981</option>
                                            <option value="1982">1982</option>
                                            <option value="1983">1983</option>
                                            <option value="1984">1984</option>
                                            <option value="1985">1985</option>
                                            <option value="1986">1986</option>
                                            <option value="1987">1987</option>
                                            <option value="1988">1988</option>
                                            <option value="1989">1989</option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1992">1992</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option selected="selected" value="2021">2021</option>
                                        </select>
									</div>
								</div>
								<span id="ctl0_CONTENU_PAGE_acteNaissance_ctl27" style="display:none;color:red;"><span title='Champ obligatoire' class='check-invalide'><img src='themes/images/picto-check-not-ok.gif' alt='Champ obligatoire' /></span></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group col-lg-12">
								<label  class="control-label col-lg-6">Sexe :</label>
								<div class="col-lg-6" style="padding-left: 0;padding-right: 0;">
									<label class="radio-inline">
										<input id="ctl0_CONTENU_PAGE_acteNaissance_sexeMasculin" type="radio" name="ctl0$CONTENU_PAGE$acteNaissance$sexe" value="ctl0$CONTENU_PAGE$acteNaissance$sexeMasculin" checked="checked" />
										Masculin
									</label>
									<label class="radio-inline">
										<input id="ctl0_CONTENU_PAGE_acteNaissance_sexeFeminin" type="radio" name="ctl0$CONTENU_PAGE$acteNaissance$sexe" value="ctl0$CONTENU_PAGE$acteNaissance$sexeFeminin" />
										Féminin
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group col-lg-12">
								<label for="numActe" class="control-label col-lg-6">Numéro de l'acte :</label>
								<div class="col-lg-6" style="padding-left: 0;padding-right: 0;">
									<input name="ctl0$CONTENU_PAGE$acteNaissance$numActe" type="text" id="ctl0_CONTENU_PAGE_acteNaissance_numActe" class="form-control" />
										<span id="ctl0_CONTENU_PAGE_acteNaissance_ctl32" style="display:none;color:red;"><span title='Champ obligatoire' class='check-invalide'><img src='themes/images/picto-check-not-ok.gif' alt='Champ obligatoire' /></span></span>
									<div ><a href="#" data-target="#modalInformationsActe" data-toggle="modal" >Où trouver cette information ?</a></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group col-lg-12">
								<label for="anneeActe" class="control-label col-lg-6 TEXT-NOWRAP">Année d'établissement de l'acte :</label>
								<div class="col-lg-6" style="padding-left: 0;padding-right: 0;">
									<select name="ctl0$CONTENU_PAGE$acteNaissance$anneeActe" id="dateNaissance_aa" class="form-control" style="width:100px;">
                                        <option value="1900">1900</option>
                                        <option value="1901">1901</option>
                                        <option value="1902">1902</option>
                                        <option value="1903">1903</option>
                                        <option value="1904">1904</option>
                                        <option value="1905">1905</option>
                                        <option value="1906">1906</option>
                                        <option value="1907">1907</option>
                                        <option value="1908">1908</option>
                                        <option value="1909">1909</option>
                                        <option value="1910">1910</option>
                                        <option value="1911">1911</option>
                                        <option value="1912">1912</option>
                                        <option value="1913">1913</option>
                                        <option value="1914">1914</option>
                                        <option value="1915">1915</option>
                                        <option value="1916">1916</option>
                                        <option value="1917">1917</option>
                                        <option value="1918">1918</option>
                                        <option value="1919">1919</option>
                                        <option value="1920">1920</option>
                                        <option value="1921">1921</option>
                                        <option value="1922">1922</option>
                                        <option value="1923">1923</option>
                                        <option value="1924">1924</option>
                                        <option value="1925">1925</option>
                                        <option value="1926">1926</option>
                                        <option value="1927">1927</option>
                                        <option value="1928">1928</option>
                                        <option value="1929">1929</option>
                                        <option value="1930">1930</option>
                                        <option value="1931">1931</option>
                                        <option value="1932">1932</option>
                                        <option value="1933">1933</option>
                                        <option value="1934">1934</option>
                                        <option value="1935">1935</option>
                                        <option value="1936">1936</option>
                                        <option value="1937">1937</option>
                                        <option value="1938">1938</option>
                                        <option value="1939">1939</option>
                                        <option value="1940">1940</option>
                                        <option value="1941">1941</option>
                                        <option value="1942">1942</option>
                                        <option value="1943">1943</option>
                                        <option value="1944">1944</option>
                                        <option value="1945">1945</option>
                                        <option value="1946">1946</option>
                                        <option value="1947">1947</option>
                                        <option value="1948">1948</option>
                                        <option value="1949">1949</option>
                                        <option value="1950">1950</option>
                                        <option value="1951">1951</option>
                                        <option value="1952">1952</option>
                                        <option value="1953">1953</option>
                                        <option value="1954">1954</option>
                                        <option value="1955">1955</option>
                                        <option value="1956">1956</option>
                                        <option value="1957">1957</option>
                                        <option value="1958">1958</option>
                                        <option value="1959">1959</option>
                                        <option value="1960">1960</option>
                                        <option value="1961">1961</option>
                                        <option value="1962">1962</option>
                                        <option value="1963">1963</option>
                                        <option value="1964">1964</option>
                                        <option value="1965">1965</option>
                                        <option value="1966">1966</option>
                                        <option value="1967">1967</option>
                                        <option value="1968">1968</option>
                                        <option value="1969">1969</option>
                                        <option value="1970">1970</option>
                                        <option value="1971">1971</option>
                                        <option value="1972">1972</option>
                                        <option value="1973">1973</option>
                                        <option value="1974">1974</option>
                                        <option value="1975">1975</option>
                                        <option value="1976">1976</option>
                                        <option value="1977">1977</option>
                                        <option value="1978">1978</option>
                                        <option value="1979">1979</option>
                                        <option value="1980">1980</option>
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option selected="selected" value="2021">2021</option>
                                    </select>
									<div ><a href="#" data-target="#modalInformationsActe" data-toggle="modal" >Où trouver cette information ?</a></div>
								</div>
							</div>
						</div>
					</div>
								</div>


						</div>
				<br>
				<div class="f1-buttons">
                    <a href="/livraison" class="btn btn-primary mb-1" style="width: 100%;">adressLivraison</a>
					<input type="submit" name="ctl0$CONTENU_PAGE$acteNaissance$etapePrecedente" value="adressLivraison" id="ctl0_CONTENU_PAGE_acteNaissance_etapePrecedente" class="btn btn-previous pull-left" />
					<input type="submit" name="ctl0$CONTENU_PAGE$acteNaissance$etapeSuivante" value="Etape suivante" id="ctl0_CONTENU_PAGE_acteNaissance_etapeSuivante" class="btn btn-next" />
				</div>
			</fieldset>


            </div>

            @endsection
