---
layout: page
title: Experience
description: Sam Swanke has worked with several companies in a variety of roles, as well as team sizes and industries.
permalink: /experience/
---

# Experience

<ul class="exp">
{% for jobObj in site.data.experience %}
{% assign job = jobObj[1] %}
{% if job.company %}
  <li>
    <h4 class="name">{{ job.company }}</h4>
    <p>
      {% if job.title %}{{ job.title }}<br/>{% endif %}
      {% if job.dates %}{{ job.dates }}<br/>{% endif %}
      {% if job.description %}{{ job.description }}<br/>{% endif %}
      {% if job.link %}{{ job.link }}<br/>{% endif %}
    </p>
  </li>
  <hr>
{% endif %}
{% endfor %}
</ul>
