---
layout: page
id: experience
title: Experience
description: Sam Swanke has worked with several companies in a variety of roles, as well as team sizes and industries.
permalink: /experience/
---

<section class='education'>
  <h2>EDUCATION</h2>
  <p>University of Vermont<br>Bachelor of Science<br>Computer Science<br>2017</p>
</section>

<section class='professional'>
  <h2>PROFESSIONAL</h2>
  <ul class='exp'>
  {% for jobObj in site.data.experience %}
  {% assign job = jobObj[1] %}
  {% if job.company %}
    <li>
       {% if job.dates %}{{ job.dates }}{% endif %} — {% if job.title %}{{ job.title }}{% endif %} — {{ job.company }}
    </li>
  {% endif %}
  {% endfor %}
  </ul>
</section>
