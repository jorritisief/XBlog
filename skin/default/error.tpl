{% extends 'base.tpl' %}
{% block content %}
	<h2>{{ _.error_title.page_not_found }}</h2>
	{{ _.error.page_not_found|format(_url.base)|raw }}
{% endblock %}