---
layout: page
title: Blog
id: blog
permalink: /blog/
---

<ul class="blog">
  {% for post in site.posts %}
    <li>
      <a href="{{ post.url }}"><h4>{{ post.title }}</h4></a>
        <p class="meta">{{ post.date | date: '%B %d, %Y' }}</p>
      <hr>
      {{ post.content | strip_html | truncatewords: 50 }}
    </li>
  {% endfor %}
</ul>
