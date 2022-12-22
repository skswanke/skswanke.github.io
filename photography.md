---
layout: page
id: photography
title: Photography
description: Sam Swanke has taken many photographs of his travels and hobbies.
permalink: /photography/
---

Under Construction. Check back to see cool photos.

<div class='image-grid-row'>
{% for photoObj in site.data.photos %}
{% assign photo = photoObj[1] %}
{% if photo.src %}
  <img src="{{ photo.src r}" alt="{{ photo.alt }}">
{% endif %}
{% endfor %}
</div>
