---
layout: page
title: About
permalink: /guitar/
---

<ul class="menu">
	<li><a class="MaC">Major Chords</a></li>
	<li><a class="MiC">Minor Chords</a></li>
	<li><a class="MaS">Major Scales</a></li>
	<li><a class="strum">Strumming</a></li>
</ul>

<div class="activity">
</div>

<script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
<script type="text/javascript">
	$('.menu a').click(function() {
		console.log(this)
		if(this.hasClass('.MaC')){
			alert("test");
		}
	});
</script>