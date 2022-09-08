<?PHP include('header.txt');?>
	<!--end top-->
	
	
	<div class="blok" id="home2" style="background-image:url('img/img22.JPG');">
	<h6>Portfolio</h6>
	</div>
		
	<div class="blok" >
		<div class="columns">

			<!-- 

			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="DESCRIPTION HERE" src="img/IMAGENAMEHERE.PNG"> 
			</div>

			-->
		
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="Exam room wired for Cape Ann Animal Hospital as a donation." src="img/img22.JPG"> 
			</div>
			
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="Lighting Fixture Install" src="img/img18.png"> 
			</div>
			
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="Lighting Retrofit" src="img/img1.png">
			</div>
		
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="New Kitchen" src="img/img2.jpg">
			</div> 
			
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="Service upgrade" src="img/img3.png"> 
			</div>
			
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="Lighting Retrofit" src="img/img5.png"> 
			</div> 
			
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="New Kitchen" src="img/img6.png">
			</div>
		
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="Porch Lighting and Fans" src="img/img7.png">
			</div>
			
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="Panels" src="img/img8.png"> 
			</div>
			
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="Ductless AC" src="img/img9.png">
			</div> 
			
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="Boilers" src="img/img10.png">
			</div>
		
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="New Kitchen" src="img/img11.jpg">
			</div>
			
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="New service for a 6-family house" src="img/img12.jpg"> 
			</div>
			
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="Fan and Lighting" src="img/img13.jpg"> 
			</div> 
			
		
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="Troubleshooting a motor starter and VFD" src="img/img15.jpg">
			</div>
			
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="Commercial Lighting" src="img/img16.jpg"> 
			</div>
			
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="Damaged Service" src="img/img17.jpg"> 
			</div>
			
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="Commercial Garage" src="img/img20.jpg">
			</div>
			
			<div class="column" id="imagecolumn">
					<img class="zImages" id="zImg" alt="Viessmann Boilers" src="img/img21.jpg"> 
			</div>
		
			
		</div>
		<br>
		<!-- zoom -->
		<div id="imgZoom" class="zoom">
		  <span class="close">&times;</span>
		  <img class="zoomImage" id="img01">
		  <div id="caption"></div>
		</div>
	</div>
		
	<script>
		var zoom = document.getElementById('imgZoom');
		var images = document.getElementsByClassName('zImages');
		var zoomImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");

		for (var i = 0; i < images.length; i++) {
		  var img = images[i];
		  img.onclick = function(evt) {
			zoom.style.display = "block";
			zoomImg.src = this.src;
			captionText.innerHTML = this.alt;
		  }
		}

		var span = document.getElementsByClassName("close")[0];

		span.onclick = function() {
		  zoom.style.display = "none";
		}
	</script>
	
	<!--start bottom-->
<?PHP include('footer.txt');?>
