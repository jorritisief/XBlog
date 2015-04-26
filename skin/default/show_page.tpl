{% extends 'base.tpl' %}
{% block content %}
			<h3>{{ page.name }}</h3>
			{{ page.content|raw }}
{% endblock %}