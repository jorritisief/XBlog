{% extends 'base.tpl' %}
{% block content %}
			<b>Profile of</b>
			{{ user.display_name }} ({{ user.username }})
{% endblock %}