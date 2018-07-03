<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
		<title>Serco</title>
		<style>
			body {
				font-family			  : Verdana, Geneva, sans-serif;
			}

			h2 {
				width				      : 100%;
				background-color	: #00214e;
				color				      : white !important;
				border				    : 1px solid white;
				border-radius		  : 15px 50px;
				padding				    : 10px 0 10px 25px;
			}

			.txt {
				border				    : 1px solid black;
				border-radius		  : 15px 50px;
				margin				    : 10px 0 10px 0;
				padding				    : 15px;
			}

			#header {
				background-color	: #00214e;
				color				      : white;
				font-size			    : 40px;
				font-family			  : Impact, Charcoal, sans-serif;
			}

			#main {
				background-color	: #f7f8fa;
				// position			    : relative;
				// top					      : 115px;
			}

			@keyframes spin {
				from { transform	: rotate(0deg); }
				to { transform		: rotate(360deg); }
			}

			.circle {
				border-radius	    : 50%;
				display			      : inline-block;
				margin-right	    : 20px;
			}

			#res_icd {
				width				      : 24px;
				height				    : 24px;
				border				    : 1px solid black;
			}


			#res_icd_red {
				width				        : 24px;
				height				      : 24px;
				background-image	  : -moz-radial-gradient(10px 10px 45deg, circle cover, orange 0%, red 100%, red 95%);
				background-image	  : -webkit-radial-gradient(10px 10px, circle cover, orange, red);
				background-image	  : radial-gradient(10px 10px 45deg, circle cover, orange 0%, red 100%, red 95%);
				animation-name		  : spin;
				animation-duration	: 3s;
				animation-iteration-count: infinite;
				animation-timing-function: linear;
			}

			#res_icd_green {
				width				        : 24px;
				height				      : 24px;
				background-image	  : -moz-radial-gradient(10px 10px 45deg, circle cover, yellow 0%, green 100%, red 95%);
				background-image	  : -webkit-radial-gradient(10px 10px, circle cover, yellow, green);
				background-image	  : radial-gradient(10px 10px 45deg, circle cover, yellow 0%, green 100%, red 95%);
				animation-name		  : spin;
				animation-duration	: 3s;
				animation-iteration-count: infinite;
				animation-timing-function: linear;
			}

			.navbar-custom .navbar-brand,
			.navbar-custom .navbar-text {
				color           : rgba(255,255,255,1.0);
			}
			.navbar-custom .navbar-nav .nav-link {
				color           : #ffffff;
			}
			.navbar-custom .nav-item.active .nav-link,
			.navbar-custom .nav-item:hover .nav-link {
				color           : rgba(255,255,255,.5);
			}

			.subtitle {
				font-weight		  : bold;
				color			      : #00214e;
				font-size		    : 18px;
				margin-bottom	  : 10px;
				cursor			    : pointer;
			}

			[data-toggle="collapse"] .fa:before {
				content         : "\f139";
			}

			[data-toggle="collapse"].collapsed .fa:before {
				content         : "\f13a";
			}
		</style>
	</head>
	<body>
		 <nav class="navbar navbar-expand-sm navbar-custom" style="margin-bottom:0px;background-color:#00214e;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<a class="navbar-brand" style="font-size:40px;" href="#"><img src="./moodle/question/type/serco/pix/icon.gif" height="64px"> Serco</a>

			<!-- Links -->
			<div class="collapse navbar-collapse" id="nav-content">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" onclick="$('#documentation').hide();$('#main').show();" href="#presentation"><i class="fa fa-address-card" aria-hidden="true"></i> Présentation</a></li>
				<li class="nav-item"><a class="nav-link" onclick="$('#documentation').hide();$('#main').show();" href="#parameter"><i class="fa fa-globe" aria-hidden="true"></i> Services</a></li>
        <li class="nav-item"><a class="nav-link" onclick="$('#documentation').show();$('#main').hide();" href="#documentation"><i class="fa fa-globe" aria-hidden="true"></i> Documentation</a></li>
				<!---<li class="nav-item"><a class="nav-link" href="#contact"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a></li>--->
			</ul>
		</nav>
		<div id="main" class="container-fluid">
			<h2 id="presentation">Présentation</h2>
			<div class="txt">
        <p><i style="font-size: medium;"><i><span class="" style="font-size: xx-large;">&nbsp;<img src="https://moodleucl.uclouvain.be/pluginfile.php/1738364/mod_label/intro/SercoLogo.jpg" alt="" role="presentation" class="img-responsive atto_image_button_middle" width="96" height="96"> Serĉo</span></i></i>
        </p>
        <p><i style="font-size: medium;"><br></i>
        </p>
        <p><i style="font-size: medium;">"<i><i><i><span>Serĉo&nbsp;</span></i></i>
          </i>is not a Search Engine"</i>
          <br>
        </p>      
				<p>Le nom "Serĉo" est dérivé de la traduction du verbe “chercher” en Espéranto<a href="#_ftn1" name="_ftnref1"><sup><sup>[1]</sup></sup></a>. C'est également le nom choisi pour ce projet en raison de sa définition et de l’idéologie(*) ayant mené à la création de cette langue.</p>
				<h1>Qui sommes-nous ?</h1>
				<p>Des informaticiens de l'équipe TICE qui oeuvrent, en collaboration avec une équipe d'enseignant de MEDE, sur ce projet dans le cadre de l'Université Numérique<a href="#_ftn2" name="_ftnref2"><sup><sup>[2]</sup></sup></a></p>
				<h1>Quel est l&rsquo;objectif de Serco ?</h1>
				<p>Offrir un moyen simple et adapt&eacute &agrave; la r&eacute;alisation d'exercice d'apprentissage, d'effectuer des recherches dans des "collections" "librement accessibles", "structur&eacute;es", "textuelles", "relativement grandes", "stables" et "adapt&eacute;es &agrave; l'apprentissage"</p>
				<p>- "collections" : Une collection est une liste d'&eacute;l&eacute;ments de m&ecirc;me type, de la m&ecirc;me famille.</p>
				<p>- "librement accessible" : Le contenu d'une collection doit &ecirc;tre int&eacute;gralement libre d'acc&egrave;s, d'utilisation et de diffusion. Aucune donn&eacute;e priv&eacute;e ou prot&eacute;g&eacute;e par une quelconque limitation de droit &agrave; la diffusion ne peut &ecirc;tre mise &agrave; la disposition des utilisateurs par ce service qui se veut "Open".</p>
				<p>- "structur&eacute;es" :&nbsp; Chaque &eacute;l&eacute;ment d'une collection est compos&eacute; de la m&ecirc;me liste de champs que tous les &eacute;l&eacute;ments de la collection. (Exemple type : un tableau de donn&eacute;e. Ou chaque ligne repr&eacute;sente un &eacute;l&eacute;ment et chaque colonne un champ)</p>
				<p>- "textuelles" : Le contenu de chaque champ est compos&eacute; de texte simple et trait&eacute; comme tel. Les champs peuvent contenir toute forme de cha&icirc;ne de caract&egrave;res, pouvant repr&eacute;senter du texte, des chiffres, date ou autre. Mais les recherches ne sont effectu&eacute;es que sur base du contenu textuel du champ.</p>
				<p>- "relativement grandes" : L'outil est pr&eacute;vu pour mettre &agrave; disposition des collections allant typiquement de quelques centaines d'&eacute;l&eacute;ments &agrave; plusieurs milliers,</p>
				<p>- "stables" : Les collections mises &agrave; disposition au travers Serco doivent &ecirc;tre peu &eacute;volutives. Elles doivent &ecirc;tre suffisamment stable et ne demander que de rares mises &agrave; jour, voire id&eacute;alement aucune.</p>
				<p>-"adapt&eacute;e &agrave; l'apprentissage" : Une collection doit pouvoir &ecirc;tre d&eacute;riv&eacute;e en "sous-ensembles" de m&ecirc;me structure, et au contenu adapt&eacute; aux diff&eacute;rents niveaux d'&eacute;tude des apprenants</p>
				<p>Exemple type de collection : la classification&nbsp; ICD10 (Classification Internationnales des maladies<a href="#_ftn3" name="_ftnref3"><sup><sup>[3]</sup></sup></a>) qui, dans Serco, peut &ecirc;tre d&eacute;riv&eacute;e en une s&eacute;rie de "sous-ensembles" de m&ecirc;me structure, adapt&eacute;s aux diff&eacute;rents niveaux d'&eacute;tude des apprenants</p>
				<h1>A qui Serco est-il destin&eacute; ?</h1>
				<p>Serco se veut destin&eacute; &agrave; toute la communaut&eacute; universitaire.</p>
				<p>&nbsp;- Aux enseignants d&eacute;sirant mettre &agrave; la disposition des &eacute;tudiants de grandes collections d&rsquo;&eacute;l&eacute;ments utiles &agrave; la r&eacute;alisation de leurs exercices et sur lesquelles ces derniers pourront effectuer des recherches simples pour y retrouver un &eacute;l&eacute;ment sp&eacute;cifique.</p>
				<p>- Aux &eacute;tudiants pour les aider lors de leurs exercices afin de rechercher un Item particulier dans la collection mise &agrave; leur disposition par l'enseignant</p>
				<h1>Ce que Serco n&rsquo;est pas</h1>
				<p>Sans rien pr&eacute;sager de ce qu&rsquo;il peut devenir, &agrave; ce jour Serco n&rsquo;est pas :</p>
				<ul>
				<li>un moteur de recherche Web du type Quant<a href="#_ftn4" name="_ftnref4"><sup><sup>[4]</sup></sup></a>, Google, DugDugGo ou l&rsquo;un des nombreux autres<a href="#_ftn5" name="_ftnref5"><sup><sup>[5]</sup></sup></a> d&eacute;di&eacute;s au r&eacute;f&eacute;rencement des ressources disponibles sur le web et qu&rsquo;il r&eacute;f&eacute;rence automatiquement &agrave; l&rsquo;aide de robots d&rsquo;indexation<a href="#_ftn6" name="_ftnref6"><sup><sup>[6]</sup></sup></a>.</li>
				<li>un annuaire web<a href="#_ftn7" name="_ftnref7"><sup><sup>[7]</sup></sup></a> (tel que DMOZ<a href="#_ftn8" name="_ftnref8"><sup><sup>[8]</sup></sup></a>) destin&eacute; &agrave; proposer une liste de liens vers des ressources disponibles sur le web, class&eacute;s par th&egrave;me, mais qui, contrairement aux moteurs de recherche, ne sont pas automatiquement moissonn&eacute;.</li>
				<li>une application permettant de parser le contenu de fichier, quel qu'en soit le format.</li>
				<li>un service orient&eacute; &ldquo;Big Data&rdquo;<a href="#_ftn9" name="_ftnref9"><sup><sup>[9]</sup></sup></a> n&eacute;cessitant l&rsquo;impl&eacute;mentation de solutions sp&eacute;cifiques &agrave; la gestion des tr&egrave;s gros volumes d&rsquo;information d&eacute;passant les possibilit&eacute;s des syst&egrave;mes traditionnels.</li>
				<li>une application qui impl&eacute;mente la sp&eacute;cification OpenSearch<a href="#_ftn10" name="_ftnref10"><sup><sup>[10]</sup></sup></a>. N&eacute;anmoins, notre volont&eacute; est de s&rsquo;en rapprocher tant que faire se peut.</li>
				<li>un service qui impl&eacute;mente des techniques de recherche complexes (tels que la recherche &ldquo;&agrave; facette&rdquo;<a href="#_ftn11" name="_ftnref11"><sup><sup>[11]</sup></sup></a>) comme Solr<a href="#_ftn12" name="_ftnref12"><sup><sup>[12]</sup></sup></a> ou ElasticSearch<a href="#_ftn13" name="_ftnref13"><sup><sup>[13]</sup></sup></a>.</li>
				</ul>
				<h1>Comment un enseignant peut-il rendre disponibles ses collections de donn&eacute;es ?</h1>
				<p>A ce stade du projet, il vous faut prendre contact avec nous par l'interm&eacute;diaire du formulaire suivant.</p>
				<p><strong>Attention </strong>: Ce projet est actuellement au stade de prototype. Nous ne donnons &agrave; ce stade aucune garantie sur la p&eacute;rennit&eacute; et la stabilit&eacute; de celui-ci dans le temps. Nul doute que, s'il s'av&egrave;re utile et utilis&eacute;, les services offerts seront amen&eacute;s &agrave; &eacute;voluer.</p>
				<h1>Comment un utilisateur peut-il utiliser le service ?</h1>
				<p>Les collections de Serco peuvent peut &ecirc;tre consult&eacute;es directement par l&rsquo;interm&eacute;diaire de la pr&eacute;sente interface web.</p>
				<p>Mais il est &eacute;galement possible d'interroger le service par l&rsquo;interm&eacute;diaire de notre interface REST ou d&rsquo;inclure l&rsquo;acc&egrave;s &agrave; la collection de votre choix directement dans vos pages web par l&rsquo;interm&eacute;diaire d&rsquo;une "iframe".</p>
				<p>Un plugin pour Moodle est en cours de d&eacute;veloppement afin d&rsquo;offrir aux enseignants la possibilit&eacute; d&rsquo;inclure le service directement dans leur Quiz.</p>
				<hr>
				<table cellspacing="1" cellpadding="1" style="border:0;font-size:12px;">
					<tr><td><p><a href="#_ftnref1" name="_ftn1"><sup><sup>[1]</sup></sup></a> <a href="https://fr.wikipedia.org/wiki/Esp%C3%A9ranto">https://fr.wikipedia.org/wiki/Esp%C3%A9ranto</a></p></td>
					<td><p><a href="#_ftnref2" name="_ftn2"><sup><sup>[2]</sup></sup></a> <a href="https://uclouvain.be/fr/universite-numerique">https://uclouvain.be/fr/universite-numerique</a></p></td></tr>
					<tr><td><p><a href="#_ftnref3" name="_ftn3"><sup><sup>[3]</sup></sup></a> <a href="https://fr.wikipedia.org/wiki/Classification_internationale_des_maladies">https://fr.wikipedia.org/wiki/Classification_internationale_des_maladies</a></p></td>
					<td><p><a href="#_ftnref4" name="_ftn4"><sup><sup>[4]</sup></sup></a> <a href="https://fr.wikipedia.org/wiki/Qwant">https://fr.wikipedia.org/wiki/Qwant</a></p></td></tr>
					<tr><td><p><a href="#_ftnref5" name="_ftn5"><sup><sup>[5]</sup></sup></a> <a href="https://fr.wikipedia.org/wiki/Liste_de_moteurs_de_recherche">https://fr.wikipedia.org/wiki/Liste_de_moteurs_de_recherche</a></p></td>
					<td><p><a href="#_ftnref6" name="_ftn6"><sup><sup>[6]</sup></sup></a> <a href="https://fr.wikipedia.org/wiki/Robot_d%27indexation">https://fr.wikipedia.org/wiki/Robot_d%27indexation</a></p></td></tr>
					<tr><td><p><a href="#_ftnref7" name="_ftn7"><sup><sup>[7]</sup></sup></a> <a href="https://fr.wikipedia.org/wiki/Annuaire_web">https://fr.wikipedia.org/wiki/Annuaire_web</a></p></td>
					<td><p><a href="#_ftnref8" name="_ftn8"><sup><sup>[8]</sup></sup></a> <a href="https://fr.wikipedia.org/wiki/DMOZ">https://fr.wikipedia.org/wiki/DMOZ</a></p></td></tr>
					<tr><td><p><a href="#_ftnref9" name="_ftn9"><sup><sup>[9]</sup></sup></a> <a href="https://fr.wikipedia.org/wiki/Big_data">https://fr.wikipedia.org/wiki/Big_data</a></p></td>
					<td><p><a href="#_ftnref10" name="_ftn10"><sup><sup>[10]</sup></sup></a> <a href="http://www.opensearch.org/">http://www.opensearch.org/</a></p></td></tr>
					<tr><td><p><a href="#_ftnref11" name="_ftn11"><sup><sup>[11]</sup></sup></a> <a href="https://fr.wikipedia.org/wiki/Recherche_%C3%A0_facettes">https://fr.wikipedia.org/wiki/Recherche_%C3%A0_facettes</a></p></td>
					<td><p><a href="#_ftnref12" name="_ftn12"><sup><sup>[12]</sup></sup></a> <a href="http://lucene.apache.org/solr/">http://lucene.apache.org/solr/</a></p></td></tr>
					<tr><td><p><a href="#_ftnref13" name="_ftn13"><sup><sup>[13]</sup></sup></a> <a href="https://fr.wikipedia.org/wiki/Elasticsearch">https://fr.wikipedia.org/wiki/Elasticsearch</a></p></td></td></tr>
				</table>
			</div>
      
      <?php 
        $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
      ?>
      <h2 id="parameter">Services</h2>
      <div class="round_box" style="margin-left:15px;margin-bottom:15px;">
        <div style="width:35%;float:left;min-width:480px;max-width:640px;">
          <form id="pathologieSearch" action="javascript:return false;" enctype="multipart/form-data" method="post" style="margin-bottom:20px;">
            <div class="form-horizontal editcase_form" style="display:none;">
              <div class="form-group row fitem">
                <label class="col-sm-2 control-label" style=""> Server : </label>
                <div class="col-sm-3">
                  <select data-content="" name="server" id="server" class="form-control" onchange="initRelated();" tabindex="-98">
                    <option value="<?php echo($actual_link);?>"><?php echo($actual_link);?></option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-horizontal editcase_form">
              <div class="form-group row fitem">
                <label class="col-sm-2 control-label" style=""> Related : </label>
                <div class="col-sm-6">
                  <select data-content="" name="related" id="related" class="form-control"  tabindex="-98">
                  </select>
                </div>
              </div>
            </div>

<fieldset style="border:2px solid black;width:99%; border-radius:8px;padding:5px;">
    <legend style="size:12px;padding-left:15px;background:transparent;">Service uniquement</legend>

            <div class="form-horizontal editcase_form">
              <div class="form-group row fitem">
                <label class="col-sm-2 control-label" style=""> Query : </label>
                <div class="col-sm-3">
                  <input name="query" id="query" class="form-control" style="max-width:250px;">
                </div>
              </div>
            </div>

            <div class="form-horizontal editcase_form">
              <div class="form-group row fitem">
                <label class="col-sm-2 control-label" style=""> Offset : </label>
                <div class="col-sm-3">
                  <input name="offset" id="offset" class="form-control" style="max-width:50px;" value="0">
                </div>
              </div>
            </div>

            <div class="form-horizontal editcase_form">
              <div class="form-group row fitem">
                <label class="col-sm-2 control-label" style=""> Limit : </label>
                <div class="col-sm-3">
                  <input name="limit" id="limit" class="form-control" style="max-width:50px;" value="10">
                </div>
              </div>
            </div>

            <div class="form-horizontal editcase_form">
              <div class="form-group row fitem">
                <label class="col-sm-2 control-label" style=""> Order : </label>
                <div class="col-sm-3">
                  <select data-content="" name="order" id="order" class="form-control"  tabindex="-98">
                    <option value="asc">Asc</option>
                    <option value="desc">Desc</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-horizontal editcase_form">
              <div class="form-group row fitem">
                <label class="col-sm-2 control-label" style=""> Format : </label>
                <div class="col-sm-3">
                  <select data-content="" name="format" id="format" class="form-control"  tabindex="-98">
                    <option value="html">html</option>
                    <option value="json">json</option>
                    <option value="xml">xml</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-horizontal editcase_form">
              <div class="form-group row fitem">
                <label class="col-sm-2 control-label" style=""> Langue : </label>
                <div class="col-sm-3">
                  <select data-content="" name="langue" id="langue" class="form-control"  tabindex="-98">
                    <option value="en">Anglais</option>
                    <option value="fr">Français</option>
                  </select>
                </div>
              </div>
            </div>
</fieldset>
            <!---<div style="width:50%;"><button id="generate" type="button" class="btn btn-primary" style="">Générer</button></div>--->
          </form>
        </div>  
        <div style="width:64%;float:left;min-width:640px;">
					<div class="circle" id="res_icd" 		style="float:left;"></div>
					<div class="circle" id="res_icd_red" 	style="float:left;display:none;"></div>
					<div class="circle" id="res_icd_green" 	style="float:left;display:none;"></div>
					<span>Service URL : <a onclick="testService($('#server').val());" href="#testServiceDiv"><span id="alltext"><span style="color:red;" id="trgServer"></span>/service/index.php?related=<span style="color:red;" id="trgRelated"></span>&format=<span style="color:red;" id="trgFormat"></span>&query=<span style="color:red;" id="trgQuery"></span>&order=<span style="color:red;" id="trgOrder"></span>&offset=<span style="color:red;" id="trgOffset"></span>&limit=<span style="color:red;" id="trgLimit"></span>&lang=<span style="color:red;" id="trgLangue"></span></span></a></span>
          <textarea id="servicereturn" style="display: block;width: 100%;padding: .375rem .75rem;font-size: 1rem;line-height: 1.5;color: #495057;background-color: #fff;background-clip: padding-box;border: 1px solid #ced4da;border-radius: .25rem;transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;margin-top:10px;height:150px;"></textarea>					<div>IFRAME Code : &lt;iframe <span style="color:black">src</span>="<span style="color:red;" id="trgServerFrm"></span>/service/?action=include&related=<span style="color:red;" id="trgRelatedFrm"></span>" <span style="color:blue">width</span>="100%" <span style="color:blue">height</span>="300"&gt;&lt;/iframe&gt;</div>
					<iframe id="sercofrm" src="" width="100%" height="300" style="margin-bottom:30px;"></iframe>
        </div>
      </div>
		</div>
    <br>
    <div id="documentation" style="display:none;"
    <?php 
        $response = file_get_contents('http://serco.sipr.ucl.ac.be/service/index.php?doc');
        echo($response);
    ?>
    </div>
		<script>
    /*
			function testService(url) {
          var jqxhr = $.getJSON( $('#alltext').text(), function() {
				}).done(function(result) {
					$('#res_icd_green').show();
          $('#servicereturn').val(JSON.stringify(result));
			    }).fail(function() {
					$('#res_icd_red').show();
			    }).always(function() {
					$('#res_icd').hide();
				});
			}
      */
      
			function testService(url) {
        $.ajax( $('#alltext').text()).done(function(data) {
            $('#servicereturn').val(data);
            $('#res_icd_green').show();
          }).fail(function() {
            $('#res_icd_red').show();
          }).always(function() {
            $('#res_icd').hide();
          });
      }
      

      function initRelated() {
      $('#related').empty();
      var jqxhr = $.getJSON($('#server').val()+"/service/index.php?info", function() {
        }).done(function(result) {
          var json = result['response']['docs']['Collection_Type'];
          //console.log(json);
          for (var i = 0; i < json.length; i++) {
            for (var j = 0; j < json[i]['collections'].length; j++) {
              $('#related').append($('<option>', {
                    value: json[i].ref + ':' +  json[i]['collections'][j].ref,
                    text : json[i].name + ':' + json[i]['collections'][j].name,
              }));
            }
          }
          generate();
        }).fail(function() {
        }).always(function() {
        });
      }

      initRelated();
      
/*    $("#generate" ).click(function() {
      generate();
    });*/

    function generate() {
        var server  = $('#server').val();
        var related = $('#related').val();
        var query   = $('#query').val();
        var offset  = $('#offset').val();
        var limit   = $('#limit').val();
        var order   = $('#order').val();
        var format  = $('#format').val();
        var langue  = $('#langue').val();
        
        $('#res_icd').show();
        $('#res_icd_red').hide();
        $('#res_icd_green').hide();
        

        $('#trgServer').html(server);
        $('#trgRelated').html(related);
        $('#trgQuery').html(query);
        $('#trgOffset').html(offset);
        $('#trgLimit').html(limit);
        $('#trgOrder').html(order);
        $('#trgFormat').html(format);
        $('#trgLangue').html(langue);    


        $('#trgServerFrm').html(server);
        $('#trgRelatedFrm').html(related);
//        $('#trgQueryFrm').html(query);
//        $('#trgOffsetFrm').html(offset);
//        $('#trgLimitFrm').html(limit);
//        $('#trgOrderFrm').html(order);
//        $('#trgFormatFrm').html(format);
//        $('#trgLangueFrm').html(langue);    

//        $('#sercofrm').attr('src',server + "/service/?action=include&related=" + related + "&format="+format+"&query="+query+"&order="+order+"&offset="+offset+"&limit="+limit+"&lang="+langue);           
        $('#sercofrm').attr('src',server + "/service/?action=include&related=" + related);           
        testService('');
    }
    
    $('.form-control').change(function() {
      generate();
    });

    $('.form-control').keyup(function() {
      generate();
    });

    </script>
	</body>
</html>
