---
layout: page
title: Experience
description: Sam Swanke has worked with several companies in a variety of roles, as well as team sizes and industries.
permalink: /experience/
---

<div id='experience'>
  <h1>Experience</h1>
  <a href='/'><h3>back</h3></a>

  <h2>EDUCATION</h2>
  <p>University of Vermont<br>Bachelor of Science<br>Computer Science<br>2017</p>

  <h2>PROFESSIONAL</h2>
  <ul class='exp'>
  {% for jobObj in site.data.experience %}
  {% assign job = jobObj[1] %}
  {% if job.company %}
    <li>
      {% if job.title %}{{ job.title }}{% endif %}: {{ job.company }} {% if job.dates %}{{ job.dates }}{% endif %}
    </li>
  {% endif %}
  {% endfor %}
  </ul>
</div>