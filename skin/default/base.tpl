<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{% if _pagename != '' %}{{ _pagename }} - {% endif %}{{ _settings.name }}</title>

    <link href="{{ _url.skin }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ _url.skin }}/css/blog-post.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ _url.base }}" title="{{ _settings.description }}">{{ _settings.name }}</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
{% for page in _pages %}
					<li><a href="{{ _url.base }}/s/{{ page.url }}">{{ page.name }}</a></li>
{% endfor %}
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
{% block content %}...{% endblock %}
            </div>
            <div class="col-md-4">
				<div class="well">
					<div class="input-group">
						<input type="text" name="search" placeholder="{{ _.search.search }}" class="form-control">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div>
				</div>
                <div class="well">
                    <h4>{{ _.categories.categories }}</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
{% for i, category in _categories %}
{% if i % 2 == 0 %}
                                <li><a href="{{ _url.base }}/c/{{ category.category_id }}">{{ category.name }}</a>
                                </li>
{% endif %}
{% endfor %}
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
{% for i, category in _categories %}
{% if i % 2 == 1 %}
                                <li><a href="{{ _url.base }}/c/{{ category.category_id }}">{{ category.name }}</a>
                                </li>
{% endif %}
{% endfor %}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="well">
                    <h4>{{ _.general.about_blog|format(_settings.name) }}</h4>
                    <p>{{ _settings.description }}</p>
                </div>

            </div>

        </div>
        <hr>
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; {{ _settings.name }} {{ 'now'|date('Y') }} - Theme &copy; Copyright 2014 <a href="http://startbootstrap.com/">StartBootstrap</a></p>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
