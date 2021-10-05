<!DOCTYPE html>
<html lang="en">
<?php require_once 'includes/header.php' ?>

<body>

	<!--PreLoader-->

	<!--PreLoader Ends-->

	<!-- header -->
	<?php require_once 'includes/menu.php' ?>
	<!-- end header -->

	<!-- search area -->

	<style>
		.input_search {
			width: 50%;
			height: 50px;
			border-radius: 5px;
			font-family: cursive;
			font-size: 25px;
		}
	</style>
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p></p>
						<h1>Gallery</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="mt-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3>African Her<span class="orange-text">bs Gallery</span></h3>
						<p></p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="text-center" style="margin-bottom: 5rem;">
							<input type="" name="" id="searchbar" onkeyup="search_animal()" class="input_search">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-11"></div>
						<h4>Zingiber officinale<span>(Ata-Ile)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-22"></div>
						<h4>Allium sativum <span>(Aayu)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-33"></div>
						<h4>Curcuma longa <span>(Ata Ile Pupa)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-44"></div>
						<h4>Citrus aurantium <span>(Osan Jagayin)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-55"></div>
						<h4>Momordica charantia <span>(Ejinrin)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-66"></div>
						<h4>Adenopus breviflorus <span>(Tagiiri)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-77"></div>
						<h4>Citrullus colocynthis <span>(Bara)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-88"></div>
						<h4>Morinda lucida <span>(Oruwo)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-99"></div>
						<h4>Azadirachta indica <span>(Dongoyaro)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-101"></div>
						<h4>Ocimum basilicum <span>(Efinrin-aja)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-102"></div>
						<h4>Parquetina nigrescens <span>(Ogbo)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-103"></div>
						<h4>Phyllanthus amarus <span>(Ehin olobe)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-104"></div>
						<h4>Anchomanes difformis <span>(Ogirisako)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-105"></div>
						<h4>Anogeissus leiocarpa <span>(Ayin)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-106"></div>
						<h4>Anthocleista djalonensis <span>(Sapo)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-107"></div>
						<h4>Bixa orellana <span>(Osun Buke)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-108"></div>
						<h4>Caesalpinia bonduc <span>(Seyo)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-109"></div>
						<h4>Dalbergiella welwitschii <span>(Elemoso)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1011"></div>
						<h4>Cymbopogon giganteus <span>(Kooko Oba)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1012"></div>
						<h4>Mangifera indica <span>(Mangoro)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1013"></div>
						<h4>Mondia whitei <span>(Isirigun)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1014"></div>
						<h4>Nauclea latifolia <span>(Egbesi)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1015"></div>
						<h4>Ocimum gratissicum <span>(Efinrin Nla)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1016"></div>
						<h4>Salacia pallescens <span>(Elewekan)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1017"></div>
						<h4>Sclerias depressa <span>(Labelabe)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1018"></div>
						<h4>Senna alata <span>(Asunwon-oyinbo)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1019"></div>
						<h4>Senna siamea <span>(Kasia)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1020"></div>
						<h4>Sorghum bicolor <span>(Poporo)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1021"></div>
						<h4>Strophanthus hispidus <span>(Sagere)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1022"></div>
						<h4>Tetracera alnifolia <span>(Opon)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1023"></div>
						<h4>Terminalia avicennoides <span>(Idi)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1024"></div>
						<h4>Xylopia aethiopica <span>(Eeru)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1025"></div>
						<h4>Picralima nitida<span>(Abere)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1026"></div>
						<h4>Alstonia boonei <span>(Ahun)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1027"></div>
						<h4>Carpolobia lutea<span>(Osunsun)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1028"></div>
						<h4>Citrus aurantifolia<span>(Osan Wewe)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1029"></div>
						<h4>Enantia chlorantha<span>(Yaani)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1030"></div>
						<h4>Garcinia kola<span>(Orogbo)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1031"></div>
						<h4>Lecaniodiscus cupanioides<span>(Akika)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1032"></div>
						<h4>Microdesmis puberula<span>(Aringo)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1033"></div>
						<h4>Ricinus communis<span>(Laa)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1034"></div>
						<h4>Senna hirsuta<span>(Iya-Omo)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1035"></div>
						<h4>Spathodea campanulata<span>(Oruru)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1036"></div>
						<h4>Sphenocentrum jollyanum<span>(Akerejupon)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1037"></div>
						<h4>Theobroma cacao<span>(Cocoa)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1038"></div>
						<h4>Ancistrophyllum secundiflorum<span>(Okuuku)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1039"></div>
						<h4>Aristolochia ringens<span>(Akoogun)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1040"></div>
						<h4>Buchholzia coriacea<span>(Obi-Aije)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1041"></div>
						<h4>Cola acuminata<span>(Obi Gidi)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1042"></div>
						<h4>Eclipta prostata<span>(Arojoku)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1043"></div>
						<h4>Entradrophragma cylindricum<span>(Jebo)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1044"></div>
						<h4>Erythrophleum sauveolens<span>(Obo)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1045"></div>
						<h4>Eugenia aromatical<span>(Kanafuru)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1046"></div>
						<h4>Lannea welwitschii<span>(Orira)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1047"></div>
						<h4>Persea americanum<span>(Pear)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1048"></div>
						<h4>Tacca leontopetaloides<span>(Gbeutu)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1049"></div>
						<h4>Terminalia superba<span>(Afara)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1050"></div>
						<h4>Ageratum conyzoides<span>(Imi-esu)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1051"></div>
						<h4>Alafia barteri<span>(Agbari-etu)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1052"></div>
						<h4>Allium ascalonicum<span>(Alubosa Elewe)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1053"></div>
						<h4>Bambusa vulgaris<span>(Gbangun)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1054"></div>
						<h4>Croton penduliflorus<span>(Aworoso)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1055"></div>
						<h4>Euphorbia lateriflora<span>(Enuopiri)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1056"></div>
						<h4>Kigelia Africana<span>(Pandoro)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1057"></div>
						<h4>Olax subscorpioidea<span>(Ifon)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1058"></div>
						<h4>Piper guineese<span>(Iyere)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1059"></div>
						<h4>Senna fistula<span>(Aidantoro)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1060"></div>
						<h4>Spigelia anthelmia<span>(Aparan Funfun)</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0" id="gallery_details">
					<div class="single-team-item">
						<div class="team-bg team-bg-1061"></div>
						<h4>Tetrapleura tetraptera<span>(Aidan)</span></h4>
					</div>
				</div>

			</div>
		</div>
		<!-- end products -->

		<!-- logo carousel -->

		<!-- end logo carousel -->

		<!-- footer -->
		<?php require_once "includes/footer.php" ?>
		<!--End of Tawk.to Script-->
		<script>
			function search_animal() {
				let input = document.getElementById('searchbar').value
				if(input == ''){
					location.reload()
				}
				input = input.toLowerCase();
				let x = document.getElementsByTagName('h4');
				// console.log(document.getElementById("gallery_details").outerHTML)
				// let y = document.getElementsById('gallery_details');
				// let u = document.getElementById('gallery_details').children[2].children[2]

				// console.log(u)
				// $this.find("h4")
				for (i = 0; i < x.length; i++) {
					if (!x[i].innerHTML.toLowerCase().includes(input)) {
						var j = x[i].parentNode;
						var y = j.parentNode;
						j.style.display = "none";
						// x[i].style.display = "none";
					} else {
						var j = x[i].parentNode;
						var y = j.parentNode;
						j.style.display = "display";
						// x[i].style.display = "list-item";
					}
				}
			}
		</script>
</body>

</html>