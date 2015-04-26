{% extends 'base.tpl' %}
{% block content %}
			{% for post in _posts %}
			{% include 'inc.post.tpl' %}
			{% endfor %}
{% endblock %}
